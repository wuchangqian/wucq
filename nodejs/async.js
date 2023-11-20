'use strict'
const {log} = console

function timeout(ms) {
  return new Promise((resolve) => {
    setTimeout(resolve, ms);
  } , (reject) => {
    seetTimeout(reject , ms)
  });
}
async function asyncPrint(value, ms) {
  await timeout(ms);
  log(value);
  return ms;
}
let as = asyncPrint('hello world', 1500);
log(as)

