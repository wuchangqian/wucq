package wcq
import groovy.xml.MarkupBuilder

class MyGroovy {
    static void main(args) {


        File f = new File("d:/t.php");
        f.eachLine{
            line -> println line;
        }
        println f.absolutePath;


    }
}
