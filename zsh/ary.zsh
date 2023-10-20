#! /usr/bin/env zsh
str1='happy new year'
strs='ha:hb:hc'
strf=$(<./str.zsh)
ary1=(1 3 "abc" 'edf')
ary2=(a b c)
ary3=("${(s.:.)strs}") # 分割字符串
ary4=(${(f)strf}) # 分割字符串
#print -l $ary3
for l ($ary3) {
    #print ":> $l"
}
ary7=(${(f)"$(<./str.zsh)"})
for ln ($ary7) {
    echo "l>: $ln"
}
ary1+='newItem'
ary1+=($ary2) # ary2如果不加括号会被转为一个字符串
#print -l $ary1
#echo "count(\$ary1): $#ary1 "

ary=(*)
for d ($ary) {
    #echo $d;
}
