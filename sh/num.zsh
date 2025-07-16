#! /usr/bin/env zsh

# mathfunc模块包含常见的数学计算函数: abs ceil floor int float sqrt cbrt log log10 rand48
zmodload -i zsh/mathfunc
integer i=123
float f=100.01
echo ${(t)i}
echo ${(t)f}

echo $(( $i * $f ))
echo $(( sin(0) + ceil(15.4) ))
