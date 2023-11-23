"use strict";
const {log, log:l , info , assert , table , error, dir} = console
const {exit: E} = process;
/********************************* 
 * ES6字符串增加的方法:
 * String.fromCodePoint()
 * String.raw()
 * 实例方法：codePointAt()
 * 实例方法：normalize()
 * 实例方法：includes(), startsWith(), endsWith()
 * 实例方法：repeat()
 * 实例方法：padStart()，padEnd()
 * 实例方法：trimStart()，trimEnd()
 * 实例方法：matchAll()
 * 实例方法：replaceAll()
 * 实例方法：at()
************************************/

let l2 = Array.prototype.slice.apply({0:1, 1:2, 2:3, 3:4, 4:5, length: 5} ,[1,3] )

log(l2);
E();

let unicodeStr = "\u0061\u0061\u0061\u0061\u0061\u{20BB7}";
let s = 'wcq';
l(unicodeStr , unicodeStr.length)

for(let cp of unicodeStr){
    l(cp);
}

let str = `
${'abc'.replace('a' , 'd')}
`;
for(let x of str ){
    // l(x)
}

// l(str);

let str_b = "abcdefghijklmnopqrst";

for(let lt of str_b){
    // l(lt)
}