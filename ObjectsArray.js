//methods
let doh = "Doh";
console.log(typeof doh.toUpperCase);
console.log(doh.toUpperCase());

//push and pop
let sequence = [1, 7, 3];
sequence.push(4);
sequence.push(5);
console.log(sequence); // → [1, 2, 7, 4, 5]
console.log(sequence.pop()); // → 5
console.log(sequence); // → [1, 2, 7, 4]

//objects
let day1 = {
    squirrel: false,
    events: ["work", "touched tree", "pizza", "running"]
  };
  console.log(day1.squirrel); // → false
  console.log(day1.wolf); // → undefined
  day1.wolf = false;
  console.log(day1.wolf); // → false