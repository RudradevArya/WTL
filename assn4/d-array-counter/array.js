// Prompt the user to enter the array elements as a comma-separated string
let arrString = prompt("Enter the array elements separated by commas:");

// Split the string into an array
let arr = arrString.split(",");

// Prompt the user to enter the character to count
let charToCount = prompt("Enter the character to count:");

// Count the occurrences of the character in the array
let count = 0;
for (let i = 0; i < arr.length; i++) {
  if (arr[i] === charToCount) {
    count++;
  }
}

// Display the result
alert(`Occurrences of ${charToCount} is ${count}`);
