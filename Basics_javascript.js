console.log(total); //55

console.log(1-2+1); //0

//using prompt function
let theNumber = Number(prompt("Pick a number"));
console.log("Your number is the square root of " + theNumber * theNumber);

//if statement
let theNum = Number(prompt("Pick a number"));
if (!Number.isNaN(theNum)) {
  console.log("Your number is the square root of " + theNum * theNum);
}

//Nesting two if statements
if (false != true) {
    console.log("That makes sense.");
    if (1 < 2) {
      console.log("No surprise there.");
    }
}

//for loop
for (let number = 0; number <= 12; number = number + 2) {
    console.log(number);
}

//while loop
let total = 0, count = 1;
while (count <= 10) {
  total += count;
  count += 1;
}

//do loop
let yourName;
do {
  yourName = prompt("Who are you?");
} while (!yourName);
console.log(yourName);

//switch
switch (prompt("What is the weather like?")) {
    case "rainy":
      console.log("Remember to bring an umbrella.");
      break;
    case "sunny":
      console.log("Dress lightly.");
    case "cloudy":
      console.log("Go outside.");
      break;
    default:
      console.log("Unknown weather type!");
      break;
}
