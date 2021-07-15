//objects
var person = {
    name: 'abc',
    age: 33
};
console.log(person.age); // prints the value of age property
person.hobbies = ['hiking', 'travel', 'reading'];//adding a new property
console.log(person);
delete person.age;// delete age property

//arrays
var vacationSpots = ['Tokyo', 'Dubai', 'Mexico', 'India'];
vacationSpots[2]; //Mexico
vacationSpots.push('Miami'); //Add item to the end of an array
vacationSpots.pop(); // Remove the last item from an array
vacationSpots.unshift('Cape Town', 'Moscow'); //Ad item to the beginning of an array
vacationSpots.shift();//Removes the first item from an array

//filter
array = [20,30,40,30];
function filterFunction(x) {
    return x == 30;
}
array.filter(filterFunction);

//closure
function init() {
    var name = 'Mozilla'; // name is a local variable created by init
    function displayName() { // displayName() is the inner function, a closure
      alert(name); // use variable declared in the parent function
    }
    displayName();
}
init();

//normal function
function demo (a){
    return a + 100;
}
demo();

//arrow function
(a) => {
    return a +100;
}
//arrow function
(a)=> a+100;
//arrow function
a => a+100;