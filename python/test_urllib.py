#! /usr/bin/env python
#coding=utf-8
#
def isPy3():
    import platform , re
    if(re.match(r'^3', str(platform.python_version()))):
        return True
    else:
        return False

def doRequestPy2(url):
    import urllib2
    response = urllib2.urlopen(url)
    html = response.read()
    print(html)

def doRequestPy3(url):
    from urllib import request as r;
    response = r.urlopen(url)
    print(response.read())

def startThread(url , count=100):
    import threading as t
    ary = []
    ####################
    if(isPy3()):
        fn=doRequestPy3
    else:
        fn=doRequestPy2
    ###################
    for i in range(1 , count):
        ary.append(t.Thread(target=fn,args=(u"%s?gid=1&uid=q%d"%(url,i),)))

    for i in range(1, count):
        th = ary.pop();
        th.start();

def main():
    url = 'http://192.168.13.234/progress.php'
    threadCount = 10000
    startThread(url , threadCount)

if __name__ == '__main__':
    main();
