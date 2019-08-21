package wcq
import groovy.xml.MarkupBuilder

class MyGroovy {
    static void main(args) {

         def mp = [1 : ['Enemy Behind', 'War, Thriller','DVD','2003',
         'PG', '10','Talk about a US-Japan war'],
         2 : ['Transformers','Anime, Science Fiction','DVD','1989',
         'R', '8','A scientific fiction'],
         3 : ['Trigun','Anime, Action','DVD','1986',
         'PG', '10','Vash the Stam pede'],
         4 : ['Ishtar','Comedy','VHS','1987', 'PG',
         '2','Viewable boredom ']]

      def mB = new MarkupBuilder()

      // Compose the builder
      def MOVIEDB = mB.collection('shelf': 'New Arrivals' , 'wcq':'wuchangqian') {
         mp.each {
            sd ->
            mB.movie('title': sd.value[0]) {
               type(sd.value[1])
               format(sd.value[2])
               year(sd.value[3])
               rating(sd.value[4])
               stars(sd.value[4])
               description(sd.value[5])
            }
         }
      }

    }
}
