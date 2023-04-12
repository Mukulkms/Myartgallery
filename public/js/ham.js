document.addEventListener('DOMContentLoaded', () => {
    // Get the hamburger menu and navbar
    const hamburger = document.querySelector('.hamburger');
    const navbar = document.querySelector('.navbar');
  
    // Add a click event listener to the hamburger menu
    hamburger.addEventListener('click', () => {
      // Toggle the active class on the navbar
      navbar.classList.toggle('active');
    });
  });
  