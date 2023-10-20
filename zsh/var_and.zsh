#! /usr/bin/env zsh
# 等号两边不能有空格
a=488; b=488;
#echo $a , $b; exit;
# 变量中的 a b 可以不加"$"
#echo $(( a + b ))
str1=wuchangqian
#echo $str1[3,-1]
local -A table=(k1 value1 k2 value2 k3 value3)
#echo ${(t)table}
table[name]='wcq'
for i ({6..9}) {
    table[key$i]="value$i"
}
for k v (${(kv)table}){
    echo "$k => $v";
}
#print -l $table

# ((  )) 用作数值比较用
if (( a > 0 && b >> 0 &&  a == b )) {
    #echo "a=b";
} elif (( a > b)) {
    #echo "a>b";
} else {
    #echo "a<b";
}

# [[]] 字符串比较
s1="string1"
s2="string1"
if [[ $s1 == $s2 ]] {
    #echo "$s1 == $s2";
} else {
    #echo "$s1 != $s2";
}

# { } 在当前shell运行命令并判断结果
# ( ) 在子shell运行命令并判断结果
if { ; } {
    #echo "yes : $? ";
} else {
    #echo "error : $? ";
}

# loops 
for i (a1 a2 a3) {
    #echo -n "loop1: $i";
}
for (( i=0 ; i<3; i++ )) {
    #echo -n "loop2 : $i"
}
# 上面的写法不如下面的写法
for i ({1..3}) {
    #echo -n $i;
}
repeat 5 {
    #echo -n 'yes!'
}
for f (/Users/wcq/*.*) {
    #echo ":> $f";
}

# select 
#select i ( jim bob carmy ) {
#    echo $i
#    break;
#}
