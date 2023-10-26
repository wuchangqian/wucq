"use strict";
const {log:l , info , assert , table , error, dir} = console

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