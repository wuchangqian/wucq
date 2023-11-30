#! /usr/local/bin/python3
import pymongo
myclient = pymongo.MongoClient("mongodb://8.144.167.25:21121/")
dblist = myclient.list_database_names()
# dblist = myclient.database_names() 
if "runoobdb" in dblist:
  print("数据库已存在！")