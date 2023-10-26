"use strict";

const {log , table , time , timeEnd , grid} = console

let name = 'world'

log(`hello ${name}`)

time('begin')
let ary = [
    {'a':'2' , 'b':'bb' , 'c':'cc'},
    {'a':'2' , 'b':'bb' , 'c':'cc'},
];
let tb = {
    a:'aaa',
    b:'bbb',
    c:'ccc'
}
table(ary , ['a','b','c'])

table(tb)
timeEnd('begin')