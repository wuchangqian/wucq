from PIL import Image
import glob, os

size = 128, 128

for infile in glob.glob('*.jpg') :
    print(infile);
    file, ext = os.path.splitext(infile)
    with Image.open(infile) as im:
        im.thumbnail(size)
        im.save(file + ".thumbnail.jpg", "JPEG")