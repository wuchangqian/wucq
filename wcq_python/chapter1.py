#! /usr/bin/env python3
# 这个是我的第一个程序
myname='吴长迁'
myage=39
myemail='me@wuchangqian.com'
mymoney=100
#print('hello:'+myname)   

# UPDATE `www_zhipeiketang_com`.`train_student_tasks2023` SET `group_id` = 2374, `uid` = 2000095303, `video_id` = 453, `chapter_id` = 11010, `videoStartFace` = 200000, `candid_type` = 1, `candid_cnt` = 1, `candid_heyan_id` = '{\"15\":1}', `record_video_state` = '', `tanti_heyan_id` = 0, `duration` = 10636, `learntime` = 5806, `learntime2` = 0, `lastrecordsecond` = 5806, `lastpushsecond` = 5806, `postdate` = 1701748013, `xueshi` = '1.00', `cnt` = 585, `last_record_time` = 0, `start_learn_time` = '2023-12-05 08:12:18', `end_learn_time` = '0000-00-00 00:00:00' WHERE `id` = 169;


# 定义一个叫 : myinfo的函数 
# 4个参数
def myinfo(name,age,email):
    fmt="我是:{0}\n我今年:{1}岁\n我的邮箱是:{2}"
    fmt2="我5年后:{0}岁"
    print(fmt.format(name,age,email))
    print(fmt2.format(age+5))

myinfo(myname,myage,myemail)


登录错误:[刘圆语]与身份证号[330682198904200049]登记姓名不一致,实名认证失败!Array ( [returnCode] => 10009 [returnData] => Array ( ) [returnMsg] => 用户不存在 )