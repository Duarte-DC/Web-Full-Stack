let array = [1, 2, 3, 4, [5, 6, 7, 8], 10, [11, 12, [13, 14, [15, 16, [17]]]]]

let array1 = array.flat (1)    //   1 subnivel
let array2 = array.flat (4)    //   4 subniveis

console.log (array1)
console.log ('\n')
console.log (array2)