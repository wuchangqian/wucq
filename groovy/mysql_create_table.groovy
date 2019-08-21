import java.sql.*;
import groovy.sql.Sql

class Example {
   static void main(String[] args) {
      // Creating a connection to the database
      def sql = Sql.newInstance('jdbc:mysql://localhost:3306/test', 'root', 'sys123', 'com.mysql.jdbc.Driver')

      def sqlstr = """CREATE TABLE EMPLOYEE (
         FIRST_NAME CHAR(20) NOT NULL,
         LAST_NAME CHAR(20),
         AGE INT,
         SEX CHAR(1),
         INCOME FLOAT )"""

      sql.execute(sqlstr);
      sql.close()
   }
}
