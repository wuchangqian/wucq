"use strict";
console.log(require.main)
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
    }
})()

// console.log(exports)