<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    #preview-image {
      max-width: 300px;
      max-height: 300px;
      margin-top: 10px;
    }
  </style>
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
            <div class="col-2 bg-dark vh-100">
              <ul class="nav flex-column mt-3">
                <li class="nav-item">
                  <a class="nav-link text-warning" href="index.html">
                    <i class="fas fa-bed p-2"></i> Room Type
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="reservation.html">
                    <i class="fas fa-calendar-alt p-2"></i> Reservation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="contact.html">
                    <i class="fas fa-address-book p-2"></i> Contacts
                  </a>
                </li>
              </ul>
            </div>

            <div class="col mt-5">
              <div class="container">
                <h2 class="mt-4">Add Room</h2>
                <form id="image-upload-form" class="mt-4" action="../backend/upload-image.php">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                  </div>
            
                  <div class="form-group mt-4">
                    <label for="bed-type">Bed Type:</label>
                    <select id="bed-type" name="bed-type" class="form-control" required>
                      <option value="Single">Single</option>
                      <option value="Double">2 Full Beds</option>
                      <option value="Queen">1 Queen Bed</option>
                      <option value="King">1 King Bed</option>
                    </select>
                  </div>
            
                  <div class="form-group mt-4">
                    <label for="start-price">Start Price:</label>
                    <input type="number" id="start-price" name="start-price" class="form-control" required>
                  </div>
            
                  <div class="form-group mt-4">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" class="form-control-file" required>
                  </div>
            
                  <button type="submit" class="btn btn-primary mt-4">Upload</button>
                </form>
            
                <h3 class="mt-4">Preview:</h3>
                <img id="preview-image" src="#" alt="Preview" class="img-fluid">
                </div>
            </div>

    </div>

    <script>
      document.getElementById('image').addEventListener('change', function(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            document.getElementById('preview-image').setAttribute('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      });

      document.getElementById('image-upload-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
       // Assuming you have the values stored in variables
      var typeBed = document.getElementById('bed-type').value;
            var price= document.getElementById('start-price').value;
            var fileName = document.getElementById('image').value;
            var title = document.getElementById('name').value;

            var imageSrc = document.getElementById('image').files[0].name;
      
            // Create an object to hold the data
        var data = {
          typeBed: typeBed,
          price: price,
          imageSrc: imageSrc,
          title: title
        };
      // Make the AJAX request
      $.ajax({
      type: "POST",
      url: "http://localhost/HotelReservation/backend/api.php",
      data: data,
      success: function(response) {
          alert("room created successfully");
          window.location.href = 'index.html';
          console.log("Record created successfully");
      },
      error: function(xhr, status, error) {
          console.error(xhr.responseText);
          alert(xhr.responseText);
      }
      });  
      
      var formData = new FormData(this);
      formData.append('image', document.getElementById('image').files[0]);
      
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '../backend/upload-image.php', true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          //alert('Image uploaded successfully!');
          document.getElementById('image-upload-form').reset();
          document.getElementById('preview-image').setAttribute('src', '#');
        } else {
          alert('Image upload failed. Please try again later.');
        }
};
xhr.send(formData);

   
  });
    </script>

  


<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>
</html>