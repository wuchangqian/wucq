"use strict";
require(sys);// sys;
const {debug,log,info,error} = console;


log(typeof Symbol)

sys.exit();
// const a = [1,2,4,5,6]

// let c = [...a,...a,...a]

// debug(c);


let s = '1234abc455'
let t = s.replaceAll('b', '9$&9')
log(t)


let c = String.fromCharCode(0x20BB7)
let d = String.fromCodePoint(0x20BB7)
log(c);
log(d)
// log('hello world!');
