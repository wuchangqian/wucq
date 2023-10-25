"use strict" ; /**************************************
 * "use strict" 指令只允许出现在脚本或函数的开头。
 * https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Strict_mode
 *
 *****************************************************
 * "use strict" 指令在 JavaScript 1.8.5 (ECMAScript5) 中新增。
 * 1.不允许使用未声明的变量：
 * 2.不允许删除变量或对象。
 * 3.不允许删除函数。
 * 4.不允许变量重名
 * 5.不允许使用八进制.
 * 6.不允许使用转义字符:
 * 7.不允许对只读属性赋值:正常模式对一个对象的只读属性进行赋值，只会默默失败。严格模式将报错
 * 8.不允许对一个使用getter方法读取的属性进行赋值
 * 9.不允许删除一个不允许删除的属性：
 * 10.变量名不能使用 "eval" 字符串:
 * 11.变量名不能使用 "arguments" 字符串:
 * 12.下禁止使用with语句: with (Math){x = cos(2)}; // 报错
 * 13.由于一些安全原因，在作用域 eval() 创建的变量不能被调用：
 * 14.禁止this关键字指向全局对象。
 * 15.为了向新版本过渡,新增一些保留关键字[implements interface let package private protected public static yield]
 ***************************************************/

let q1 = `
ES6 声明变量的六种方法: 
ES5 只有两种声明变量的方法：var命令和function命令。
ES6 除了添加let和const命令，后面章节还会提到，另外两种声明变量的方法：
import命令和class命令。所以，ES6 一共有 6 种声明变量的方法。
`