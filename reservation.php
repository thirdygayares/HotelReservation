<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
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
        <span style="font-weight: 600;">Avi</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.php" id="home-button">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="profile.php" id="profile-button">Company Profile</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="reservation.php" id="reservation-button">Reservation</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.php" id="contact-button">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</header>


<div class="container">
    <h1 class="mt-4">Reservation</h1>

    <form id="reservationForm">
        <div class="form-group mt-3">
            <label for="roomType">Room Type:</label>
            <select class="form-control" id="roomType" name="roomType"></select>
          </div>

      <div class="form-group mt-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group mt-3">
        <label for="contactNumber">Contact Number:</label>
        <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required>
      </div>

      <div class="form-group mt-3">
        <label for="checkInDate">Date of Check-in:</label>
        <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
      </div>

      <div class="form-group mt-3">
        <label for="checkInTime">Time of Check-in:</label>
        <input type="time" class="form-control" id="checkInTime" name="checkInTime" required>
      </div>

      <button type="submit" class="btn btn-primary mt-5">Reserve</button>
    </form>
  </div>


  <script>
    document.getElementById('reservationForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
            // Assuming you have the values stored in variables
            var roomType = document.getElementById('roomType').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var contactNumber = document.getElementById('contactNumber').value;
            var checkInDate = document.getElementById('checkInDate').value;
            var checkInTime = document.getElementById('checkInTime').value;
      
            // Create an object to hold the data
        var data = {
            roomType: roomType,
            name: name,
            email: email,
            contactNumber: contactNumber,
            date: checkInDate,
            time: checkInTime
        };
        // Make the AJAX request
        $.ajax({
        type: "POST",
        url: "http://localhost/HotelReservation/backend/reservation.php",
        data: data,
        success: function(response) {
            alert("Record created successfully");
            window.location.href = 'index.php';
            console.log("Record created successfully");
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert(xhr.responseText);
        }
        });   
    });

    fetch('http://localhost/HotelReservation/backend/api.php')
      .then(response => response.json())
      .then(data => {
        const roomTypeSelect = document.getElementById('roomType');
  
        data.forEach(room => {
          const option = document.createElement('option');
          option.value = room.title;
          option.textContent = room.title;
          roomTypeSelect.appendChild(option);
        });
      });
  </script>
</body>
</html>