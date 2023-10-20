import cv2

img = cv2.imread('/Users/wcq/Downloads/logo.jpg')
cv2.imshow("demo" , img)

'''
    ffmpeg -f concat -i  MIDD-717-A.wmv  -i  MIDD-717-B.wmv   -c copy -o MIDD-717.mp4


ffmpeg -f concat -i  'MIDD-717-A.wmv'  -i  'MIDD-717-B.wmv'   -c copy -o 'MIDD-717.mp4'

'''
   @Override
   public void addResourceHandlers(ResourceHandlerRegistry registry) {
         //第一个方法设置访问路径前缀，第二个方法设置资源路径
        registry.addResourceHandler("/static/**").addResourceLocations("classpath:/static/");
         //添加对上传文件的直接访问
        Environment env = SpringContextHolder.getBean(Environment.class);
        String uploadFilePath = env.getProperty("upload-file-path");
         registry.addResourceHandler("/upload/**").addResourceLocations("file:" + uploadFilePath);
     }


     <build>
        <plugins>
 
            <plugin>
                <groupId>org.apache.maven.plugins</groupId>
                <artifactId>maven-site-plugin</artifactId>
                <version>3.7.1</version>
            </plugin>
 
            <plugin>
                <groupId>org.apache.maven.plugins</groupId>
                <artifactId>maven-project-info-reports-plugin</artifactId>
                <version>3.0.0</version>
            </plugin>
 
        </plugins>
    </build>