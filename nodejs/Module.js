"use strict";
const {
    log: l,
    log
} = console

/** ****************************
 * 
 * 不管require几次 只有一个实例
 * 
 * *************************** */
const c1 = require('./lib/submodule.js');
const c2 = require('./lib/submodule.js');
const c3 = require('./lib/submodule');


//log(require.main)

c2.add();
c3.add();
c3.add();
c3.add();

// c1.fn.reset();
let cnt = c1.add();
// l(c1)

l(cnt);