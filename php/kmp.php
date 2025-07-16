<?php
set_time_limit(1);
$str = "6139
6158
6239
6241
6259
6260
6300
6317
6318";

echo preg_replace('/[^\d]/', ',', $str) , "\n";

__halt_compiler();


$a = [{
    "resource": "/Users/wcq/vite_test/wcqvue/src/pages/index.vue",
    "owner": "_generated_diagnostic_collection_name_#0",
    "severity": 8,
    "message": "[vue/require-v-for-key]\nElements in iteration expect to have 'v-bind:key' directives.",
    "source": "eslint-plugin-vue",
    "startLineNumber": 4,
    "startColumn": 7,
    "endLineNumber": 4,
    "endColumn": 32
}];

/****************
3 : 在校大学生
4 ： 社会人员
5 ： 高校毕业生
11 ： 农民工
*****************/

$a = [
 ['begintime' => 120001 , 'endtime' => 120010],
 ['begintime' => 120051 , 'endtime' => 120060],
];

$b = [
    ['begin' => 120053 , 'end' => 120050 , 'row' => 1]
];
$ret = judgeTimeRepeat($a , $b);
print_r($ret);
// 求职老师账号： 18995211525  密码250011

function judgeTimeRepeat($existZhiboChangciTimeStamps, $importTimeStamps)
{
    foreach ($importTimeStamps as $importItem) {
        $importBegin = $importItem['begin'];
        $importEnd   = $importItem['end'];
        foreach ($existZhiboChangciTimeStamps as $existItem) {
            $existBegin = $existItem['begintime'];
            $existEnd   = $existItem['endtime'];
            // 判断两个时间段是否有重叠
            if(($importBegin >= $existBegin && $importBegin <= $existEnd)  || ($importEnd >= $existBegin && $importEnd <= $existEnd)) {
            #if(!($importEnd < $existBegin || $importBegin > $existEnd)) {
                $beginDate = date('Y-m-d H:i:s', $importItem['begin']);
                $endDate   = date('Y-m-d H:i:s', $importItem['end']);
                return [
                    'code' => 500,
                    'msg' => "第 {$importItem['row']} 行: 时间段 {$beginDate} ~ {$endDate}存在重复!"
                ];
            }
        }
        // 将当前导入时间段加入现有列表，供后续比较使用
        $existZhiboChangciTimeStamps[] = [
            'begintime' => $importBegin,
            'endtime'   => $importEnd
        ];
    }
    return [
        'code' => 0,
        'msg' => ''
    ];
}


die;

echo 1;
sleep(3);
echo 3;
__halt_compiler();
$str  = '13333llaaa';
$p = 'aaaa';

$a = 0xcbfff;
$b = 0xa4000;
echo ($a - $b + 1)/1024;;
echo "\n";
echo 0x27fff;
__halt_compiler();
echo mystrstr($str , $p);

1. 赛程设置（新的大赛有tp5.1），参赛选手能看到赛事的进度，和自己进展到哪一步。
2. 新增加预报名功能。能先不提交项目。
3. 新增一个视频宣传模块（播放几个专项赛视频），后台能管理。
4. 管理员分级。
5. 加一些下载的资料链接。

1. abstract double travel(int males , CFrequentFlyer context)
2. context.setState(new CSilver())
3. context.setState(new CGold())
4. context.setState(new CSilver())
4. context.setState(new CBasic())

1. void buildPartA()
2. Product getResult()
3. product.setPartA
4. product.setPartB
5. builder.buildPartA()


1.  abstract void doPaint(Matrix m)
2.  imp.doPaint(m)
3.  new GIFImage()
4.  new LinuxImp()
5.  image.setImp(imageImp)


1.  abstract void buildParts()
2.  this.pizzaBuilder = pizzaBuilder
3.  pizzaBuilder.buildParts()
4.  waiter.setPizzaBuilder(hawallan_pizzabuilder)
5.  waiter.construct();

1.  ticket.printInvoice()
2.  super.printInvoice()
3.  super.printInvoice()
4.  new HeadDecorator(new FootDecorator(t))
5.  new HeadDecorator(new FootDecorator(null))



1.  Address address
2.  address.street()
3.  address.zip()
4.  address.city()
5.  DutchAddress addrAdapter = new DutchAddressAdapter(addr)


1.  double acceptCash(double money)
2.  cs = new CashNormal()
3.  cs = new CashDiscount(0.8)
4.  cs = new CashReturn(300,100)
5.  return cs.acceptCash(money)



1. void visit(Book p_book)
2. void visit(Article p_article)
3. void accept(LibraryVisitor vistor)
4.  visitor.visit(this)
5.  visitor.visit(this)


1. interface Command
2. light.on()
3. light.off()
4. onCommands[slot] 
5. offCommands[slot] 
6. onCommands[slot].execute()
7. offCommands[slot].execute()



1. Subject
2. observer.update(temperature , humidity , cleanness)
3. notifyObservers()
4. measurementsChanged()
5. Observer
6. envData.registerObserver(this)



1. interface  
2. public void drawLine(double x1 , double y1 , double x2 , double y2)
3. public void drawCircle(double x , double y , double r);
4. DP1.draw_a_circle(x,y,r);
5. this.drawcircle(x,y,z);
6. abstract public void draw()




1. implements 
2. WorkExperience obj = new WorkExperience();
3. implements
4. (WorkExperience)work.Clone()
5. new Resume(this.work)
6. (Resume)a.Clone()



U1 温度显示
U2 显示华氏温度
U3 显示温度计
U4 单位自动换算


C1  TemperatureCovertorDialog
C2 FahrenheitEditBox
C3  CelsiusEditBox
C4 TemperatureBar
C5 FahrenheitRaise
C6 FahrenheitLower
C7 CelsiusRaise
C8 CelsiusLower


void doPrint(Interval val)
pr.doPrint(this)
st = new PrintIntervalsComma();
st = new PrintIntervalsDots();
st = new PrintIntervalsLine();



new Memento(state)
Memento.getState();
void add(Memento state)
Memento get(int index)
originator.saveStateToMemento();
originator.saveStateToMemento();


public String getName();

public void dispose(Patient patient);

new ConcretePatient("myname");

Facade 

new Facade(patient);

f.dispose();


项目申报书：参见附件一（含表一：项目申报书基本
信息；表二：项目基本情况表） ，须提交作品电子版 Word。
2.初赛提交材料：创新赛道提交资料以 2025 年“两山”
梦想基金项目评审和第十届“两山杯”创新创业大赛科技创业
组规则为准。创意赛道需提交策划书和设计方案。创业赛道
需提交须提交商业计划书，对市场调研、创业构想、项目发
展等详细介绍； 文件规格： 须提交作品电子版 Word 和 PDF
格式文件，不超过 40 页，不大于 200 MB；如有音视频文件
须一并提交。总文件大小不超过 1G。复赛和决赛提交材料
另行通知。


1.农科区
2.递铺街道
3.天荒坪镇
4.孝丰镇
5.梅溪镇
6.天子湖镇
7.溪龙乡
8.孝源街道
9.杭垓镇
10.报褔镇
11.章村镇
12.上墅乡
13.山川乡
14.鄣吴镇



1.农科区
2.昌硕街道
3.递铺街道
4.灵峰街道
5.天荒坪镇
6.孝丰镇
7.梅溪镇
8.天子湖镇
9.溪龙乡
10.孝源街道
11.杭垓镇
12.报褔镇
13.章村镇
14.上墅乡
15.山川乡
16.鄣吴镇
17.临港经济区



6139,6158,6239,6241,6259,6260
UPDATE `sb_local_com`.`sbtr_groups` SET `name` = '河南杏林职业技能培训学校有限公司2024年第8期', `banci` = 'WC57230', `number` = 'HN-2024-226', `record` = '', `courseId` = 1, `sid` = 4, `cid` = 1, `student_count` = 35, `student_theory_count` = 35, `student_plan_count` = 35, `student_gain_count` = 35, `examtype` = 0, `begintime` = '2024-09-06', `endtime` = '2024-09-16', `exam_begintime` = 1726446600, `exam_endtime` = 1726500600, `college` = '', `address` = '郑州  市  升达经贸管理学院', `teachers` = '|23763|23762|', `orgid` = 385, `orgname` = '郑州市杏林职业技能培训学校有限公司', `dlsid` = 0, `shenhe` = 0, `ischeck` = 1, `checkuid` = 1, `standard_ver` = 1, `kh_assign` = 1, `checktime` = 1725595005, `expertuid` = 23763, `expertname` = '刘银委', `shenhe_level` = 0, `shenhe_admin` = 0, `kp_teacheruid` = 23763, `kp_teachername` = '刘银委', `teacherid1` = 23763, `teachername1` = '刘银委', `teacherid2` = 23762, `teachername2` = '田红敏', `dudao_teacheruid` = 0, `dudao_teachername` = '', `content` = '', `isfinish` = 0, `isduty` = 1, `isown` = 0, `istest` = 0, `issync` = 0, `isprint` = 0, `jiezhang` = 0, `province` = '410000', `city` = '410100', `area` = '410101', `kaishikaoshi` = 1, `is_shengshu` = 0, `can_live` = 1, `can_export_theory` = 1, `houxu_fuwu_lunci` = 1, `require_upload_sfz` = 0, `require_phone_valid` = 0, `kaoshi_require_face` = 0, `face_heyan_min_score` = 75, `face_heyan_quality_control` = 'NONE', `face_heyan_liveness_control` = 'NONE', `gain_splitimg_state` = 0, `require_video_task` = 0, `video_course_id` = 0, `require_video_face` = 0, `video_on_hook` = 0, `can_yjfk` = 0, `can_jspg` = 0, `jspg_open_status` = 0, `learn_video_order` = 1, `video_task_suffix` = '', `kp_begintime` = 1726477456, `kp_endtime` = 1726483999, `pf_version` = 1, `gain_version` = 2, `gain_plan_version` = 1, `evaluation_version` = 0, `teacher_can_reset_bukao` = 1, `evaluation_o2t` = 0, `map_pxjg_gid` = 0, `year` = '2024', `month` = 9, `is_test` = 0, `aid` = 2309, `postdate` = 1726476871 WHERE `id` = 5490;
UPDATE `sb_local_com`.`sbtr_groups` SET `name` = '河南杏林职业技能培训学校有限公司2024年第9期', `banci` = 'WC57231', `number` = 'HN-2024-227', `record` = '', `courseId` = 1, `sid` = 3, `cid` = 1, `student_count` = 35, `student_theory_count` = 35, `student_plan_count` = 35, `student_gain_count` = 35, `examtype` = 0, `begintime` = '2024-09-06', `endtime` = '2024-09-16', `exam_begintime` = 1726446600, `exam_endtime` = 1726500600, `college` = '', `address` = '郑州  市  升达经贸管理学院', `teachers` = '|23837|7381|', `orgid` = 385, `orgname` = '郑州市杏林职业技能培训学校有限公司', `dlsid` = 0, `shenhe` = 0, `ischeck` = 1, `checkuid` = 1, `standard_ver` = 1, `kh_assign` = 1, `checktime` = 1725595080, `expertuid` = 23837, `expertname` = '宋紫薇', `shenhe_level` = 0, `shenhe_admin` = 0, `kp_teacheruid` = 23837, `kp_teachername` = '宋紫薇', `teacherid1` = 23837, `teachername1` = '宋紫薇', `teacherid2` = 7381, `teachername2` = '李辉', `dudao_teacheruid` = 0, `dudao_teachername` = '', `content` = '', `isfinish` = 0, `isduty` = 1, `isown` = 0, `istest` = 0, `issync` = 0, `isprint` = 0, `jiezhang` = 0, `province` = '410000', `city` = '410100', `area` = '410101', `kaishikaoshi` = 1, `is_shengshu` = 0, `can_live` = 1, `can_export_theory` = 1, `houxu_fuwu_lunci` = 1, `require_upload_sfz` = 0, `require_phone_valid` = 0, `kaoshi_require_face` = 0, `face_heyan_min_score` = 75, `face_heyan_quality_control` = 'NONE', `face_heyan_liveness_control` = 'NONE', `gain_splitimg_state` = 0, `require_video_task` = 0, `video_course_id` = 0, `require_video_face` = 0, `video_on_hook` = 0, `can_yjfk` = 0, `can_jspg` = 0, `jspg_open_status` = 0, `learn_video_order` = 1, `video_task_suffix` = '', `kp_begintime` = 1726451210, `kp_endtime` = 1726455451, `pf_version` = 1, `gain_version` = 2, `gain_plan_version` = 1, `evaluation_version` = 0, `teacher_can_reset_bukao` = 1, `evaluation_o2t` = 0, `map_pxjg_gid` = 0, `year` = '2024', `month` = 9, `is_test` = 0, `aid` = 2309, `postdate` = 1726476891 WHERE `id` = 5491;


E1: 商户
E2: 骑手
E3: 用户
E4: 支付系统

new Memento(state);
Memento.getState();
void add(Memento state);
Memento get(int index);
originator.saveStateToMemento();
originator.saveStateToMemento();


function mystrstr($str , $p){
    $l1 = strlen($str);
    $l2 = strlen($p);
    if($l2 > $l1){
        return -1;
    }
    for($i = 0 ; $i <= $l1 - $l2 ; $i++){
        // echo "i : $i \n";
        for($j = 0 ; $j < $l2 ; $j++){
            // echo "j = $j ";
            if($str[$i+$j] != $p[$j]){
                // echo "\n";
                break;
            }
            // echo "\n";
        }
        if($j == $l2){
            return $i;
        }
    }
    return -1;
}