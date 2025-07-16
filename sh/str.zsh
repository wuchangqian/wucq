#! /usr/bin/env zsh
str1="string var"
str1+="中文"
pth=/User/wcq/Downloads/t.php
f=var_and.zsh
e='AP-ccc-wxy.mp42023-07-07.18/43.mp4';
echo ${e%%2023*};
exit;
echo $pth[(I)wcq] #index
echo ${str1:u} #uppercase
echo ${(U)str1} #uppercase
echo ${(C)str1} #capitalize
echo ${(L)str1} #uppercase
echo ${pth##*/} # 删除/及其左边的所有字符-贪婪模式 键盘上#在$左边
echo ${pth#*/} # 删除/
echo ${pth%%/*} 删除/及其右边边的所有字符-贪婪模式 键盘上 % 在 $ 的右边
echo ${pth%/*}

echo ${pth:h} # h取目录名 t取文件名 e扩展名 A相对路径转绝对路径
echo ${pth:t} # h取目录名 t取文件名 e扩展名 A相对路径转绝对路径
echo ${pth:e} # h取目录名 t取文件名 e扩展名 A相对路径转绝对路径
echo ${pth:A}
#echo $#str1
#echo $str1[2,-1]
for i ({1..$#str1}) {
    #echo $str1[i]
}
str2=$(<./var_and.zsh)
