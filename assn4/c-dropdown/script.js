function applyColors() {
    // Get the selected font color and background color from the dropdowns
    let fontColor = document.getElementById("fontColor").value;
    let backgroundColor = document.getElementById("backgroundColor").value;
  
    // Get the heading element
    let heading = document.getElementById("heading");
  
    // Check if the font color and background color are not the same
    if (fontColor !== backgroundColor) {
      // Apply the selected font color and background color to the heading
      heading.style.color = fontColor;
      heading.style.backgroundColor = backgroundColor;
    }
  }
  