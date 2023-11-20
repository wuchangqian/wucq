import cv2

img = cv2.imread('./htl.jpg')
print(img)
cv2.imshow("demo" , img)
cv2.waitKey()
cv2.destroyAllWindows();

'''
    ffmpeg -f concat -i  MIDD-717-A.wmv  -i  MIDD-717-B.wmv   -c copy -o MIDD-717.mp4


ffmpeg -f concat -i  'MIDD-717-A.wmv'  -i  'MIDD-717-B.wmv'   -c copy -o 'MIDD-717.mp4'

'''