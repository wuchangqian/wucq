"use strict";
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
