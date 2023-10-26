"use strict";
const {log} = console;
const https = require('https');

function getUrl(url){
    return new Promise(function(resolve,reject){
        https.get(url, (response) => {
            let resp = '';
            // called when a data chunk is received.
            response.on('data', (chunk) => {
                console.log(`received chunk => [ ${chunk} ]`)
                resp += chunk;
            });

            // called when the complete response is received.
            response.on('end', () => {
                resolve(resp)
            });
        }).on("error", (error) => {
            reject(new Error(error.message))
        });
    });
}

const url = 'https://www.zjdelun.com/ip';

getUrl(url).then(function(ret){
    console.log(`resolve : ${ret}`)
} , function(error){
     console.log(`reject : ${error}`)
}).catch(function(error){
    console.log(`error : ${error}`)
});


var p1 = new Promise(function(resolve,reject){
    let i = Math.random(1,3)
    setTimeout(function(){
    console.log("p1 i: %d " , i)
        resolve(`1: > ${i}`)
    } , i*1000)
}),
p2 = new Promise(function(resolve,reject){
    let i = Math.random(1,3)
    setTimeout(function(){
    console.log("p2: i: %d " , i)
        //reject(new Error('333lll'))
        resolve(`2: > ${i}`)

    } , i*1000)
}),
p3 = new Promise(function(resolve,reject){
    let i = Math.random(1,3)
    setTimeout(function(){
    console.log("p3: i: %d " , i)
        resolve(`3: > ${i}`)
    } , i*1000)
});
p1.then(p2).then(p3).catch(function(e){
    console.log(e)
});

/*
Promise.race([p1, p2, p3]).then(function (value) {
    console.log(value);  // 1
});
*/