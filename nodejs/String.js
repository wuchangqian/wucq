"use strict";
const {log , info , assert , table , error} = console

let str = `
${'abc'.replace('a' , 'd')}
`;
for(let x of str ){
    log(x)
}

log(str)