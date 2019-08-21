require 'digest/sha1'
require 'zlib'
filename = 'E:\wwwroot\erp2.busionline.com\App\Home\Controller\IndexController.class.php';
content = '';
File.open(filename) do |file|
  file.each_line{|line|
      content +=line;
    }
  file.close();
end

header = "blob #{content.length}\0"
store = header + content
sha1 = Digest::SHA1.hexdigest(store)
p sha1;
exit;
