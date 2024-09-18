import {saudacao, getEnderecoByCEP} from './lib.mjs'

console.log (saudacao ())

getEnderecoByCEP ('25520171')
    .then (dados => console.log (dados))