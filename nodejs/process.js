"use scrict";

const process = require('process');

process.on('beforeExit', (code) => {
  console.log('Process beforeExit event with code: ', code);
});
process.on('exit', (code) => {
  console.log('Process exit event with code: ', code);
});

// console.log('This message is displayed first.');

// console.error(new Error('Whoops, something bad happened'));

const config = process.config;

console.log(process.env.PATH)

// console.log(config)


// process.exit();