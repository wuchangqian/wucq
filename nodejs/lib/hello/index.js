"use strict";
const {log} = console
let x = 1;
let a = [];
// a?.[++x];
log(x)


const {log:l} = console
// console.log(require.main)
// console.log(exports)
module.exports= (function(){
    let cnt = 0;
    return {
        add() {
            return cnt++;
        },
        dec() {
            return cnt++;
        },
        reset(){
            cnt = 0;
            return cnt;
        },
        show(){
          l(`cnt is : ${cnt}`)
        }
    }
})()
