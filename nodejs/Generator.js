"use strict";
const c = {...console}

function* gene()
{
    yield 1;
    yield 2;
}


for(let x of gene()){
    c.log(x)
}