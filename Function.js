//Function by passing parameter,value
const cube = function(x) {
    return x * x * x;
};  
console.log(cube(5));//125

//Arrow function
const power = (base, exponent) => {
    let result = 1;
    for (let count = 0; count < exponent; count++) {
      result *= base;
    }
    return result;
};

const name = function(a){
    console.log(a+3);
};

const value = function(x,y){
    return x * y + 15 ;
};
console.log("The value is "+ value(2,3));
