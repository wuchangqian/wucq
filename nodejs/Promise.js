"use strict";
const {
    log
} = console;
const https = require('https');
const {
    exit: E
} = process;

const {
    random
} = Math;


function fc(url){
    return new Promise(function(resolve , reject){
        https.get(url , (response) => {
            let content = '';
            response.on('data' , (c) => {
                log('data')
                content += c;
            });
            response.on('end' , (c) => {
                log('end')
                log(content)
            }) 

        }).on('error' , (e) => {
            log('error')
            reject(new Error(e.message))
        }).on('timeout' , (e) => {
            log('timeout')
        })
    })
}

fc('https://172.16.0.1/i3p').then(e=>log(e) , e=>log(e))

// function 

function getUrl(url) {
    return new Promise(function(resolve, reject) {
        https.get(url, (response) => {
            let resp = '';
            // called when a data chunk is received.
            response.on('data', (chunk) => {
                // console.log(`received chunk => [ ${chunk} ]`)
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
// E(200)

const url = 'https://www.zjdelun.com/ip';

getUrl(url).then(function(ret) {
    // console.log(`resolve : ${ret}`)
}, function(error) {
    // console.log(`reject : ${error}`)
}).catch(function(error) {
    // console.log(`error : ${error}`)
});


let p1 = new Promise(function(resolve, reject) {
    let i = random(1, 3)
    setTimeout(function() {
        // console.log("p1 i: %d ", i)
        resolve(`1: > ${i}`)
    }, i * 1000)
});
let p2 = new Promise(function(resolve, reject) {
    let i = random(1, 3)
    setTimeout(function() {
        // console.log("p2: i: %d ", i)
        //reject(new Error('333lll'))
        resolve(`2: > ${i}`)

    }, i * 1000)
});
let p3 = new Promise(function(resolve, reject) {
    let i = random(1, 3)
    setTimeout(function() {
        // console.log("p3: i: %d ", i)
        resolve(`3: > ${i}`)
    }, i * 1000)
});

p1.then(p2).then(p3).catch(function(e) {
    console.log(e)
});


// Promise.race([p1, p2, p3]).then(function (value) {
//     console.log(value);  // 1
// });