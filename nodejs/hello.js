"use strict";

const {log , table , time , timeEnd , grid} = console

let name = 'world'

log(`hello ${name}`)

time('begin')
let ary = [
    [1 ,3 , 4,5,7]
    ['ab' , 'c' , 'd' ,'e' ,'45']
];
let tb = {
    a:'aaa',
    b:'bbb',
    c:'ccc'
}
table(ary , [1,2,3])

table(tb)
timeEnd('begin')