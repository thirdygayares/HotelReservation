<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <style>
    
        .section {
          margin-bottom: 80px;
        }
    
        .section-title {
          font-size: 32px;
          font-weight: bold;
        }
    
        .section-content {
          font-size: 18px;
          margin-top: 20px;
        }
    
        .section-image {
          max-width: 50%;
          height: auto;
          margin-bottom: 20px;
        }

        </style>
</head>
<body>

          <!-- header -->
  <header class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/logo.png" alt="Avi Hotel Logo" width="50" height="50">
        <span style="font-weight: 600;">Avi</span> 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.html" id="home-button">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profile.html" id="profile-button">Company Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservation.html" id="reservation-button">Reservation</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.html" id="contact-button">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</header>


    <div class="container">
        <div class="section">
        <h2 class="section-title mt-5 mb-3">Welcome to Thirty Hotel</h2>
        <img class="section-image" src="assets/hotel2.jpg" alt="Hotel Image">
        <p class="section-content">Where sophistication and comfort intertwine to redefine your hotel experience. Nestled in the heart of Makati City's vibrant neighborhood, Thirty Hotel is a sanctuary of luxury and tranquility, designed to cater to the discerning traveler seeking an exceptional stay.</p>
        </div>

        <div class="section">
        <h2 class="section-title">Company Profile</h2>
        <img class="section-image" src="assets/hotel1.jpg" alt="Company Profile Image">
        <p class="section-content">Thirty Hotel is a premier destination for those who appreciate the finer things in life. With a strong focus on personalized service, attention to detail, and a commitment to excellence, we strive to create an atmosphere that surpasses expectations and leaves a lasting impression on every guest.</p>
        </div>

        <div class="section">
            <h2 class="section-title">Details</h2>
            <p class="section-content">Located at 84 St West Rembo, Makati City, our prime address places us within reach of the city's business, shopping, and entertainment districts, making Thirty Hotel the perfect choice for both business and leisure travelers alike.</p>
          </div>
      
          <div class="section">
            <h2 class="section-title">Mission</h2>
            <p class="section-content">Our mission is to provide an oasis of comfort and sophistication, where guests can unwind, rejuvenate, and experience unparalleled hospitality. We aim to exceed expectations by delivering personalized service, anticipating individual needs, and creating a warm and inviting atmosphere that feels like a home away from home.</p>
          </div>
      
          <div class="section">
            <h2 class="section-title">Vision</h2>
            <p class="section-content">Our vision is to become the premier luxury hotel destination, renowned for our impeccable service, exceptional amenities, and commitment to creating memorable experiences for our guests. We aspire to be recognized as a symbol of elegance, sophistication, and unwavering quality in the hospitality industry.</p>
          </div>
      
          <div class="section">
            <h2 class="section-title">Goal</h2>
            <p class="section-content">At Thirty Hotel, our goal is to consistently surpass guest expectations by setting new standards of excellence in the realm of luxury accommodation. We aim to create an environment where every aspect of your stay is meticulously curated, ensuring that your time with us is truly extraordinary.</p>
          </div>
      

    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      // Scroll animation code
      $(window).scroll(function() {
        $('.section-content').each(function() {
          var top_of_element = $(this).offset().top;
          var bottom_of_element = top_of_element + $(this).outerHeight();
          var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  
          if (bottom_of_screen > top_of_element) {
            $(this).addClass('animate');
          }
        });
      });
    </script>
</body>
</html>