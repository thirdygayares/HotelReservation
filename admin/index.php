<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Type</title>
    <link
    rel="stylesheet"
    href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

    <header class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid text-white">
          <a class="navbar-brand" href="#">
            <img src="../assets/logo.png" alt="Avi Hotel Logo" width="50" height="50">
            <span style="font-weight: 600;">Avi</span>  Admin
          </a>
        </div>
    </header>

    <div class="container-fluid">

        <div class="row">
            <div class="col-2 bg-dark vh-100 sticky-top">
              <ul class="nav flex-column mt-3">
                <li class="nav-item">
                  <a class="nav-link text-warning" href="index.php">
                    <i class="fas fa-bed p-2"></i> Room Type
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="reservation.php">
                    <i class="fas fa-calendar-alt p-2"></i> Reservation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="contact.php">
                    <i class="fas fa-address-book p-2"></i> Contacts
                  </a>
                </li>
              </ul>
            </div>

            <div class="col mt-5">
                <div class="container mt-4">
                    <h1>Room Type Table</h1>
                    <button class="btn btn-primary" onclick="location.href='add.php'">Add Room</button>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Bed Type</th>
                          <th>Start Price</th>
                        </tr>
                      </thead>
                      <tbody id="reservation-data"></tbody>
                    </table>
                  </div>
            </div>
    </div>


    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $.ajax({
          url: 'http://localhost/HotelReservation/backend/api.php',
          method: 'GET',
          dataType: 'json',
          success: function(data) {
            var roomData = '';
  
            // Loop through the retrieved data
            data.forEach(function(reservation) {
              roomData += '<tr>';
              roomData += '<td>' + '<img src="../assets/' + reservation.imageSrc+'" style="width: 200px"><img></td>';
              roomData += '<td>' + reservation.title + '</td>';
              roomData += '<td>' + reservation.typeBed + '</td>';
              roomData += '<td>' + reservation.price + '</td>';
              roomData += '</tr>';
            });
  
            // Append the reservation data to the table body
            $('#reservation-data').html(roomData);
            console.log('Success');
          },
          error: function() {
            console.log('Failed to fetch reservation data');
          }
        });
      });
    </script>
    
</body>
</html>