//scoping
var tester ="hey hi";
function newFunction(){
    var hello = "hello";
}
console.log(hello);//hello not defined

//hoisting
console.log(greeter);
var greeter = "say hello";

//hoisting interpreted as
var greeter;
console.log(greeter);
greeter = "say hello";