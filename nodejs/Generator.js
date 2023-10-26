"use strict";

const {log , log:l } = console;

function *fibs() {
  let a = 0;
  let b = 1;
  while (true) {
    yield a;
    [a, b] = [b, a + b];
  }
}


let [first, second, third, fourth, fifth, sixth, seven] = fibs();
l(first, second, third, fourth, fifth, sixth,seven);


process.on('SIGHUP' , function(){
    log('yes i am die....')
})
