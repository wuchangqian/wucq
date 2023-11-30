'use strict'
const {log} = console;
function Counter(start){
    var count= start;
    return {
        inc:function(){
            count++;
        },
        get:function(){
            return count;
        }
    }
}

// File Name: /Users/wcq/wucq/nodejs/Count.js
let cnt1 = Counter(10);
let cnt2 = Counter(20);
cnt1.inc()
cnt1.inc()
cnt1.inc()
cnt1.inc()
cnt2.inc()
cnt2.inc()
cnt2.inc()
cnt2.inc()
//log(cnt1.get())
//log(cnt2.get())

for(var i = 0 ; i < 3 ; i++)
{
    (function(t){
        setTimeout(function(){
            log(t)
        }, 1000)
    })(i)
}
