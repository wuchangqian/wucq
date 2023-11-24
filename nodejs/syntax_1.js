"use strict";

const {log, table, log:l} = console
const c = {...console}

const ary = [ 1 , 5 ,8]
const [a , b , e] = [...ary]

const a1 = [1,2,3,4,5,7,8,8]
const a2 = [4,5,6,8,9,0]
const a_b = [...a1,...a2]

const obj1 = { a: 111, b: 222 , c:'1c'};
const obj2 = { c: 333, d: 444 };
const merged = { ...obj1, ...obj2 };

l(merged)

l(a_b);