    const colors = ['Red', 'Green', 'Blue'];

    const newColor = prompt('Enter a new color:');

    if (!colors.includes(newColor)) {
        colors.push(newColor);
        console.log(`Added ${newColor} to the array.`);
    } else {
        console.log(`${newColor} is already in the array.`);
    }

    console.log('Updated colors array:', colors);
    // window.alert('Updated colors array:', colors);