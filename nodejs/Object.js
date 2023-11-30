'use strict'
const {
    log
} = console;
const {
    exit:E
} = process;

const obj2 = {
  foo: 123,
  get bar() { return 'abc' },
  set bar(v) { this.foo = v }
};

let ol = Object.getOwnPropertyDescriptors(obj2)
log(ol);
E();

const wcq = {
    info:1,
    error:2,
    dir:3,
    c:11,
    c3:11,

}
let o12 = {..."hello"}
//log(o12)
const {info,error,dir, ...z} = wcq
// log(dir)
// log(z)
let as1 = Object.assign({b: 'c'},
  Object.defineProperty({[Symbol()]:3}, 'invisible', {
    enumerable: true,
    value: 'hello'
  })
)
//log(as1)
E();

/*****************************
 Object 的实例方法:
 1. Object.prototype.valueOf();返回当前对象对应的值(自动类型转换时会默认调用这个方法)
 2. Object.prototype.toString();返回当前对象对应的字符串形式。
 3. Object.prototype.toLocaleString();返回当前对象对应的本地字符串形式。
 4. Object.prototype.propertyIsEnumerable(prop);表示指定的属性是否是对象的可枚举自有属性(判断某个属性是否可枚举。)
 5. Object.prototype.isPrototypeOf(obj);检查一个对象是否存在于另一个对象的原型链中。(判断某个属性是否为当前对象自身的属性，还是继承自原型对象的属性)
 6. Object.prototype.hasOwnProperty(prop);表示对象自有属性（而不是继承来的属性）中是否具有指定的属性。

 Object提供了一个内部数据结构“属性描述对象”（attributes object），用来描述对象的属性，控制它的行为
 {
  value: 123,
  writable: false,
  enumerable: true,
  configurable: false,
  get: undefined,
  set: undefined
}

Object 的静态方法:
Object.is('1', 1) 静态方法确定两个值是否为相同值。
Object.create(prototype, propertiesObject)：该方法可以指定原型对象和（元）属性，返回一个新的对象。
Object.assign(target, ...sources)：该方法将多个source的属性复制到target上（值拷贝）
Object.keys(obj) 返回一个由给定对象自身的可枚举的字符串键属性名组成的数组。
Object.values(obj) 返回一个给定对象的自有可枚举字符串键属性值组成的数组。
Object.entries(obj) 返回一个数组，包含给定对象自有的可枚举字符串键属性的键值对。
Object.fromEntries(iterable) 将键值对列表转换为一个对象。
Object.getPrototypeOf(obj) 返回指定对象的原型（即内部 [[Prototype]] 属性的值）。
Obejct.setPrototypeOf(obj, prototype) 将一个指定对象的原型（即内部的 [[Prototype]] 属性）设置为另一个对象或者 null。
Object.hasOwn(obj, prop) 旨在取代 Object.prototype.hasOwnProperty()。
Object.getOwnPropertyDescriptor(obj, prop): 获取某个属性的描述对象。
Object.getOwnPropertyDescriptors(obj): 返回给定对象的所有自有属性描述符。
Object.getOwnPropertyNames(obj):返回一个数组，其包含给定对象中所有自有属性（包括不可枚举属性，但不包括使用 symbol 值作为名称的属性）。
Object.getOwnPropertySymbols(obj): 静态方法返回一个包含给定对象所有自有 Symbol 属性的数组。
Object.defineProperty(obj , property , propertiesObject): 通过描述对象，定义某个属性。
Object.defineProperties(obj , {prop1:{},prop1:{}}): 通过描述对象，定义多个属性。
Object.groupBy(items, callback) （这是一项实验性技术）根据提供的回调函数返回的字符串值对给定可迭代对象中的元素进行分组。返回的对象具有每个组的单独属性，其中包含组中的元素的数组。
-----控制对象状态的方法
Object.preventExtensions(obj)：防止新属性被添加到对象中(即防止该对象被扩展),它还可以防止对象的原型被重新指定。
Object.isExtensible(obj)：判断对象是否可扩展。
Object.seal(obj)：禁止对象配置。
Object.isSealed(obj)：判断一个对象是否可配置。
Object.freeze(obj)：冻结一个对象。可以防止扩展，并使现有的属性不可写入和不可配置。被冻结的对象不能再被更改
Object.isFrozen(obj)：判断一个对象是否被冻结。
******************************/

let o = {
    k0:'v0'
};
Object.defineProperty(o , 'shi' ,{
    value:7
})

let pr1 = Object.getOwnPropertyDescriptor(o , 'shi')
log(pr1)

for(let p in o){
    log(p)
}
let c1 = {
    k1:'v1'
}
let c2 = {
    k2: 'v2'
}
let c3 = {
    k3: 'v3'
}
// Object.seal(o);
// Object.freeze(o);
Object.preventExtensions(o);
o.k0 = 3;
Object.defineProperty(o , 'k0' , {
    value:33
})
let ise = Object.isExtensible(o);
log(ise)
// Object.setPrototypeOf(o , {})
log(o.k0)
E();

Object.print = function(o) {
    console.log(o)
}
Object.prototype.print = function() {
    console.log(this)
}

var obj = {
    'name': 'ye'
};
log(obj.hasOwnProperty('name'))
E();

let p = Object.getPrototypeOf(obj)
log(Object.getOwnPropertyDescriptor(obj, 'name'))
log(p);
// obj.print(2);

let date = new Date();

log(date.toString())
log(date.toLocaleString())
