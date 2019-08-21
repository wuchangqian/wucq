package wcq
import groovy.sql.Sql
class MyGroovy {
    static void main(args) {
        def db_url="jdbc:mysql://localhost:3306/cdcol"
        def username="root"
        def password="sys123"
        def driverClass="com.mysql.jdbc.Driver"
        def sql = Sql.newInstance(db_url, username, password, driverClass)
        sql.eachRow("select * from cds"){row ->
            println row.id + row.titel
            //def con ="un"
            //def path = "D://asd"
            //def pan = "E:"
            //sql.execute("insert into data_path (s_size, b_size, con,path,pan) values (1000, 10,${con}, ${path}, ${pan})")
        }
    }
}
