'use strict';
const {log:l , table} = console;

/**
 * ES6 出现之前，字符串对象共有 4 个方法，可以使用正则表达式：match()、replace()、search()和split()。
 */
let exp = /^\d{1,10}$/uig;

let sm = Object.getOwnPropertySymbols(e)

l(sm);

table(exp.flags)