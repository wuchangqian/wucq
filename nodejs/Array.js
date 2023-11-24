'use strict';

const {log} = console
/***************************
 * 静态方法:
 * Array.from(arrayLike, [mapFn], [thisArg])
 * Array.fromAsync() 
 * Array.isArray(arg) 
 * Array.of(...argv)
 *
 ***************************/

log(global == globalThis);

// log(globalThis);

let a = new Array([1])
a = [undefined , undefined , undefined]
log(a.length)
log([].length)