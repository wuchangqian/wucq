"use strict";

const {log , info , debug , error , table , time , timeEnd , grid} = console

var someObject = { str: "Some text", id: 5};
console.log(someObject);

let name = 'world'
log(`hello ${name}`);
info('this is info');
debug('this is debug');
error('this is error');


time('begin')

let aryOfObject = [
    {'name':'wu' ,    'sex':'male' , 'age':'18' , 'title':'CTO'},
    {'name':'zhang' , 'sex':'female' , 'age':'20' , 'title':'CFO'},
    {'name':'wang' , 'sex':'male' , 'age':'20' , 'title':'CEO'},
];

table(aryOfObject , ['name','sex' , 'age' , 'title'])

let obj = {
    name:'lily',
    age:18,
    email:'lily@gmail.com'
}

table(obj)

timeEnd('begin')