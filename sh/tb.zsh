#! /usr/bin/env zsh

local -A table=(k1 value1 k2 value2 k3 value3)
#echo ${(t)table} # t修饰符打印变量类型
table[name]='wcq'
for i ({6..9}) {
    #table[key$i]="value$i"
}
for k v (${(v)table}){
    echo "$k => $v";
}
#print -l $table
#echo 1
