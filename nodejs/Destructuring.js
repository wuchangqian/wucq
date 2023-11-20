'use strict';

const {
    log: l,
    error,
    table,
    log: log
} = console;
const {
    exit: E,
    exit: exit
} = process;

/** 解构赋值主要的应用场景:
 * 1.交换变量的值
 * 2.从函数返回多个值
 * 3.函数参数的定义
 * 4.提取 JSON 数据
 * 5.函数参数的默认值
 * 6.遍历 Map 结构
 * 7.输入模块的指定方法
 */

// 场景一: 交换变量的值
let x = 1,
    y = 2;
[x, y] = [y, x]
// log(x,y)  // 2 1

// 场景二: 从函数返回多个值
// 返回一个数组
function fn_ret_multi_num() {
    return [1, 2, 3];
}
let [ret1, ret2, ret3] = fn_ret_multi_num();

// 返回一个对象
function fn_ret_object() {
    return {
        name: 'zhangshan',
        sex: 'male',
        age: 18,
        email: 'text@domain.com'
    };
}
let {
    name,
    sex,
    age
} = fn_ret_object();
let {
    name: nm,
    sex: gendor
} = fn_ret_object();
// l(name, sex, age, nm, gendor)


// 场景三： 函数参数的定义
// 参数是一组有次序的值
function fn_argv_use_ary([x, y, z]) {
    l(x, y, z)
}
fn_argv_use_ary([1, 2, 3]);

// 参数是一组无次序的值
function fn_argv_use_obj({
    x,
    y,
    z
}) {
    l(x, y, z)
}
fn_argv_use_obj({
    z: 3,
    y: 2,
    x: 1
});


// 场景四：提取 JSON 数据
let jsonData = {
    id: 42,
    status: "OK",
    data: [867, 5309]
};

let {
    id,
    status,
    data: number
} = jsonData;
l(id, status, number)

// 场景五：函数参数的默认值（指定参数的默认值，就避免了在函数体内部再写var foo = config.foo || 'default foo';这样的语句）
function fn_set_default_val({
    name = 'noname',
    age = 10,
    sex = 'male'
}) {
    l(name, age, sex)
}
fn_set_default_val({});

// 场景六：遍历Map结构（任何部署了 Iterator 接口的对象，都可以用for...of循环遍历）
const mymap = new Map();
mymap.set('zhang', '张三');
mymap.set('li', '李四');
mymap.set('wang', '万五');
for (let [k, v] of mymap) {
    l(k, "\t:", v)
}

const myset = new Set();
myset.add(1);
myset.add(10);
myset.add(100);
myset.forEach(function(x) {
    console.log(x)
})


// 场景七：输入模块的指定方法
const {
    add,
    dec,
    show
} = require("./lib/submodule");

add();
add();
add();
add();
add();
add();
add();
add();
show()


let [foo, [
    [bar], baz
]] = [1, [
    [2], 3
]];
// log(bar);//2
let [, , v3, , v5] = ["zhangsan", "lisi", "wangwu", "you", "shi"];
// log(v3 , v5) // wangwu shi