package wcq

class MyGroovy {
    static void main(args) {

        def asset = new XmlParser().parse("d:/endpoints.xml");
        def title=asset.Endpoint[0].RegionIds[0].RegionId[0].text()

        println title

    }
}
