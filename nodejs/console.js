"use strict";
/***********************************************
 *  console 有如下函数:
 * log:         [Function: log],
 * warn:        [Function: warn],
 * dir:         [Function: dir],
 * time:        [Function: time],
 * timeEnd:     [Function: timeEnd],
 * timeLog:     [Function: timeLog],
 * trace:       [Function: trace],
 * assert:      [Function: assert],
 * clear:       [Function: clear],
 * count:       [Function: count],
 * countReset:  [Function: countReset],
 * group:       [Function: group],
 * groupEnd:    [Function: groupEnd],
 * table:       [Function: table],
 * debug:       [Function: debug],
 * info:        [Function: info],
 * dirxml:      [Function: dirxml],
 * error:       [Function: error],
 * groupCollapsed: [Function: groupCollapsed],
 * Console:     [Function: Console],
 * profile:     [Function: profile],
 * profileEnd:  [Function: profileEnd],
 * timeStamp:   [Function: timeStamp],
 * context:     [Function: context]
 **************************************************/

const {
    log,
    info,
    debug,
    error,
    table,
    time,
    timeEnd,
    grid,
    dir
} = console
const {
    log: l,
    info: i,
    debug: d,
    error: e,
    table: tb,
    time: tm,
    timeEnd: te,
    grid: g
} = console
const {
    exit: E
} = process;

let w = Math.cos(60);

l(w);


// l(globalThis);
// E();

var someObject = {
    str: "Some text",
    id: 5
};
l(someObject);

let name = 'world'
log(`hello ${name}`);
info('this is info');
debug('this is debug');
error('this is error');

time('begin')

let aryOfObject = [{
    'name': 'wu',
    'sex': 'male',
    'age': '18',
    'title': 'CTO'
}, {
    'name': 'zhang',
    'sex': 'female',
    'age': '20',
    'title': 'CFO'
}, {
    'name': 'wang',
    'sex': 'male',
    'age': '20',
    'title': 'CEO'
}, ];

table(aryOfObject, ['name', 'sex', 'age', 'title'])

let obj = {
    name: 'lily',
    age: 18,
    email: 'lily@gmail.com'
}

table(obj)

timeEnd('begin')