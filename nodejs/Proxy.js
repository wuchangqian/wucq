'use strict'
const {log} = console

let obj = {time: 10}
let proxy = new Proxy(obj,{
  get: function (target, propKey, receiver) {
    log(target, propKey, receiver);
    return 999;
  },
  set: function(target, propKey, value, receiver) {
    console.log(`setting ${propKey}!`);
    return Reflect.set(target, propKey, value, receiver);
  }
});
log(proxy.time);//999
proxy.b = 20
log(proxy)
log(obj.b)


