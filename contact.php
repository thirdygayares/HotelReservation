<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

      <!-- header -->
  <header class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/logo.png" alt="Avi Hotel Logo" width="50" height="50">
        <span style="font-weight: 600;">Avi</span> Hotel
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.php" id="home-button">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php" id="profile-button">Company Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservation.php" id="reservation-button">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php" id="contact-button">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</header>


    <h1></h1>

    <div class="container">

        <main>
            <section>
              <div class="container">
                <h1>Contact Us</h1>
                <br>
                <p>We would love to hear from you. Please fill out the form below to get in touch with us.</p>
        
                <form id="contactForm" action="/contact" method="POST">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
        
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
        
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                  </div>
        
                  <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                  </div>
        
                  <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
              </div>
            </section>
          </main>

    </div>
  


    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent form submission
                // Assuming you have the values stored in variables
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                var message = document.getElementById('message').value;
         
          
                // Create an object to hold the data
            var data = {
                name: name,
                email: email,
                phone: phone,
                message: message
            };
            // Make the AJAX request
            $.ajax({
            type: "POST",
            url: "http://localhost/HotelReservation/backend/contact.php",
            data: data,
            success: function(response) {
                alert("Contact successfully");
                window.location.href = 'index.html';
                console.log("Record created successfully");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert(xhr.responseText);
            }
            });   
        });

        </script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>