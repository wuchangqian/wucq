'use strict'
const {log:l} = console
let a = 'wcq';
let b = '2'
let o  = {
    a,
    b
}
let c = Reflect.ownKeys(o)

l(c)