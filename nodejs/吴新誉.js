"use strict";

let tab1 = [
    {'name' : "wuxinyu" , 'age':10 , 'sex':'男'}
]

var arr = ['1', '2', '3'];
var r;
const p = (x)=>parseInt(x);
r = arr.map(p);
console.log(r);

// console.table(tab1 , ['name' , 'age' , 'sex'])

