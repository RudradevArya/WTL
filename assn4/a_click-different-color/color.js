const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
let currentColorIndex = 0;

const images = ['flower-1.jpg', 'flower-2.jpg', 'flower-3.jpg', 'flower-4.jpg'];
let currentImageIndex = 0;

document.getElementById('colorButton').addEventListener('click', function() {
    document.getElementById('colorSection').style.backgroundColor = colors[currentColorIndex];
    currentColorIndex = (currentColorIndex + 1) % colors.length;
});

document.getElementById('imageButton').addEventListener('click', function() {
    document.getElementById('imageSection').style.backgroundImage = `url(${images[currentImageIndex]})`;
    currentImageIndex = (currentImageIndex + 1) % images.length;
});