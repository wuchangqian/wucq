"use strict";
const {
	log,
	table
} = console
const os = require("os")

log(os.version())
log(os.arch())
table(os.userInfo())
log(os.hostname())
log(os.constants)