"use strict";
const c1 = require('./lib/submodule.js');
const c2 = require('./lib/submodule.js');
const c3 = require('./lib/submodule');

console.log(require.main)

c2.add();
c3.add();
c3.add();
c3.add();

// c1.fn.reset();
let cnt = c1.add();
// console.log(c1)

console.log(cnt);