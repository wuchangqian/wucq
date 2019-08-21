package main

import "database/sql"
import _ "github.com/go-sql-driver/mysql"

var db = &sql.DB{}

func init() {
	dbw := DbWorker{
		Dsn: "root:Sys@1234@tcp(192.168.13.238:3306)/ucenter",
	}
	db, err := sql.Open("mysql",
		dbw.Dsn)
	if err != nil {
		panic(err)
		return
	}
	defer db.Close()
}

func main() {
	query()
}

func query() {

	//方式1 query
	start := time.Now()
	rows, _ := db.Query("SELECT * FROM wt_city")
	defer rows.Close()
	for rows.Next() {
		var name string
		var code int
		if err := rows.Scan(&code, &name); err != nil {
			log.Fatal(err)
		}
		//fmt.Printf("name:%s ,id:is %d\n", name, id)
	}
	end := time.Now()
	fmt.Println("方式1 query total time:", end.Sub(start).Seconds())

	//方式2 query
	start = time.Now()
	stm, _ := db.Prepare("SELECT * FROM wt_city")
	defer stm.Close()
	rows, _ = stm.Query()
	defer rows.Close()
	for rows.Next() {
		var name string
		var code int
		if err := rows.Scan(&code, &name); err != nil {
			log.Fatal(err)
		}
		// fmt.Printf("name:%s ,code:is %d\n", name, code)
	}
	end = time.Now()
	fmt.Println("方式2 query total time:", end.Sub(start).Seconds())

	//方式3 query
	start = time.Now()
	tx, _ := db.Begin()
	defer tx.Commit()
	rows, _ = tx.Query("SELECT * FROM wt_city")
	defer rows.Close()
	for rows.Next() {
		var name string
		var code int
		if err := rows.Scan(&code, &name); err != nil {
			log.Fatal(err)
		}
		//fmt.Printf("name:%s ,code:is %d\n", name, code)
	}
	end = time.Now()
	fmt.Println("方式3 query total time:", end.Sub(start).Seconds())
}
