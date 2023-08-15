document.addEventListener('DOMContentLoaded', function () {
    // Add interactivity to a button
    var button = document.getElementById('my-button');
    if (button) {
        button.addEventListener('click', function () {
            alert('Button clicked! You can add your own functionality here.');
        });
    }

    // Example: Toggle a class on navigation menu for mobile
    var navToggle = document.querySelector('.nav-toggle');
    var navMenu = document.querySelector('.nav-menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function () {
            navMenu.classList.toggle('show');
        });
    }
});
