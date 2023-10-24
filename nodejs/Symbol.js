'use strict';
const {log , assert , table , error} = console
const {exit:E} = process // E() = process.exit();

log(this);

E();

let c = Array.prototype[Symbol.unscopables]
/**************************
 * 
 * 内置的 Symbol 值
 * Symbol.hasInstance 指向一个内部方法。当其他对象使用instanceof运算符，判断是否为该对象的实例时，会调用这个方法。
 * Symbol.isConcatSpreadable 一个布尔值，表示该对象用于Array.prototype.concat()时，是否可以展开。
 * Symbol.species 指向一个构造函数。创建衍生对象时，会使用该属性。
 * Symbol.match 指向一个函数。当执行str.match(myObject)时，如果该属性存在，会调用它，返回该方法的返回值。
 * Symbol.replace 指向一个方法，当该对象被String.prototype.replace方法调用时，会返回该方法的返回值。
 * Symbol.search 指向一个方法，当该对象被String.prototype.search方法调用时，会返回该方法的返回值。
 * Symbol.split 指向一个方法，当该对象被String.prototype.split方法调用时，会返回该方法的返回值。
 * Symbol.iterator 指向该对象的默认遍历器方法。
 * Symbol.toPrimitive 指向一个方法。该对象被转为原始类型的值时，会调用这个方法，返回该对象对应的原始类型值。
 * Symbol.toStringTag 这个属性可以用来定制[object Object]或[object Array]中object后面的那个大写字符串。
 * Symbol.unscopables 指向一个对象。该对象指定了使用with关键字时，哪些属性会被with环境排除。
************************ */

let symbolAddress = Symbol.for('address');
let symbolIdcard = Symbol('idcard')

// log(Symbol.keyFor(symbolAddress) , Symbol.keyFor(symbolIdcard) ) // address , undefined
//process.exit();

const Me = {
    'name' : 'wcq',
    'age' : 18,
    'sex' : 'male',
    [symbolAddress]: 'hangzhou',
    [symbolIdcard]: '331181201401016785',
}

let allKeys = Reflect.ownKeys(Me) // 能获取所有的key(包括symbol)

for(let p of allKeys){
    log(p)
}

for(let p in Me){
    log(`p : ${p} => ${Me[p]}`)
}

let vl = Object.getOwnPropertySymbols(Me)
for(let x in vl){
    log('symbol: ' , vl[x])
}

process.exit();

const mySymbol4 = Symbol();
const abj = {};

abj.mySymbol4 = 'Hello!!';
log(abj[mySymbol4]) // undefined
log(abj['mySymbol4']) // "Hello!!"
log(abj.mySymbol4)


// 作为属性名的 Symbol
let mySymbol = Symbol()
// 第一种写法
let symObject = {};
symObject[mySymbol] = 'Hello!';

// 第二种写法
let symObject2 = {
  [mySymbol]: 'Hello!'
};

// 第三种写法
let symObject3 = {};
Object.defineProperty(symObject3, mySymbol, { value: 'Hello!' });

/**
 * s1 != s2 不相等 
 * Symbol()函数的参数只是表示对当前 Symbol 值的描述，因此相同参数的Symbol函数的返回值是不相等的。
 * Symbol()函数前不能使用new命令，否则会报错
 */
let s1 = Symbol('name for symbol')
let s2 = Symbol('name for symbol')

log(String(s1)) // Symbol(name for symbol)
log(s1.toString()) // Symbol(name for symbol)
log(s1.description) // name for symbol

/**
 * 它们两个相等，
 * 使用Symbol.for('str') , 会在全局登记。不管在函数内部还是哪里都返回同一个Symbol
 * Symbol.for()不会每次调用就返回一个新的 Symbol 类型的值，
 * 而是会先检查给定的key是否已经存在，如果不存在才会新建一个值。
 * 比如，如果你调用Symbol.for("cat")30 次，每次都会返回同一个 Symbol 值，
 * 但是调用Symbol("cat")30 次，会返回 30 个不同的 Symbol 值。
 */
let sfor1 = Symbol.for('my')
let sfor2 = Symbol.for('my')

log(typeof s1 , typeof sfor1)

assert(s1 == s2 , 's1 == s2')
assert(sfor1 == sfor2 , 'sfor1 == sfor2')

log(s1 , s2)

const obj = {
  toString() {
    return 'abc';
  }
};
/**
 * 如果 Symbol 的参数是一个对象，就会调用该对象的toString()方法，将其转为字符串，然后才生成一个 Symbol 值。
 */
const sym = Symbol(obj);
log(sym) // Symbol(abc)


/**
 * Symbol 值不能与其他类型的值进行运算，会报错。
*/
let syms = Symbol('My symbol');

// "your symbol is " + syms
// TypeError: can't convert symbol to string
// `your symbol is ${syms}`
// TypeError: can't convert symbol to string


/**
 * Symbol 值也可以转为布尔值，但是不能转为数值。
 */
let sym1 = Symbol();
Boolean(sym1) // true
// !sym1  // false

if (sym1) {
  // ...
}

// Number(sym1) // TypeError
// sym1 + 2 // TypeError
