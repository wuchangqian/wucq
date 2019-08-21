package main

import (
	"flag"
	"net/http"
	"time"
	"strings"
	"math"
	"strconv"
	"fmt"
	"os"
)

type Response struct {
	Status 		int
	ReqTime 	float64
}

var (
	ch chan *Response = make(chan *Response)
)

func main()  {
	var (
		url string
		reqNum, reqTime int
		reqAry []float64
		un float64
	)
	flag.StringVar(&url, "u", "", "测试的地址")
	flag.IntVar(&reqNum, "n", 100, "请求总次数")
	flag.IntVar(&reqTime, "t", 10, "请求持续时间（秒）")
	flag.Parse()

	secNum := math.Ceil(float64(reqNum / reqTime))

	for i := 1; i < reqTime; i++ {
		reqAry = append(reqAry, secNum)
		un += secNum
	}
	reqAry = append(reqAry, float64(reqNum) - un)

	go doFor(reqAry, url)

	func() {
		countNum := map[string]int{}
		countTime := map[string]float64{}
		i := 0
		for v := range ch {
			if v.Status >= 200 && v.Status < 300 {
				countNum["2**"] += 1
				countTime["2**"] += v.ReqTime
			} else if v.Status >= 300 && v.Status < 400 {
				countNum["3**"] += 1
				countTime["3**"] += v.ReqTime
			} else if v.Status >= 400 && v.Status < 500 {
				countNum["4**"] += 1
				countTime["4**"] += v.ReqTime
			} else if v.Status >= 500 && v.Status < 600 {
				countNum["5**"] += 1
				countTime["5**"] += v.ReqTime
			} else {
				countNum["链接丢失"] += 1
				countTime["链接丢失"] += v.ReqTime
			}
			i++
			if i == reqNum {
				computingRes(countNum, countTime)
				os.Exit(0)
			}
		}
	}()
}

func doFor(reqAry []float64, url string) {
	for _, v := range reqAry {
		for i := 1.0; i <= v; i++ {
			go request(url)
		}
		time.Sleep(1 * time.Second)
	}
}

//请求
func request(url string) {

	defer func(){
		recover()
	}()

	begin := time.Now().UnixNano()
	req, err := http.Get(url)
	if err != nil {
		r := &Response{
			Status:0,
			ReqTime:0,
		}
		ch <- r
		panic(err)
	} else {
		end := time.Now().UnixNano()
		status := strings.Split(req.Status, " ")
		s, _ := strconv.Atoi(status[0])
		use := float64(end - begin) / 1000000000
		r := &Response{
			Status:s,
			ReqTime:use,
		}
		ch <- r
	}
	req.Body.Close()

}

//计算结果
func computingRes(countNum map[string]int, countTime map[string]float64)  {
	for k, v := range countNum {
		avgTime := fmt.Sprintf("%.6f", float64(countTime[k] / float64(v)))
		fmt.Println("状态：" + k + " 数量：" + strconv.Itoa(v) + " 平均时长：" + avgTime)
	}
}
