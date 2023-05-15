// Select the home and about buttons
const homeButton = document.getElementById('home-button');
const profileButton = document.getElementById('profile-button');
const reservationButton = document.getElementById('reservation-button');
const contactButton = document.getElementById('contact-button');

// Add click event listeners to the buttons
homeButton.addEventListener('click', function(event) {
  event.preventDefault(); // prevent the default link behavior
  $('body').fadeOut(500, function() { // fade out the body
    window.location.href = 'index.html'; // go to the home page
  });
});

aboutButton.addEventListener('click', function(event) {
  event.preventDefault(); // prevent the default link behavior
  $('body').fadeOut(500, function() { // fade out the body
    window.location.href = 'about.html'; // go to the about page
  });
});


