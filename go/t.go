package main

import (
	"crypto/md5"
	"fmt"
)

func main() {
	fmt.Println("Hello, 世界")
	data := []byte("These pretzels are making me thirsty.")
	fmt.Printf("%x", md5.Sum(data))

}
