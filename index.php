<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  
    <title>Homepage</title>



    <style>

      footer{
        margin-top: 50px;
      }
      
      .comment-container{
        margin-bottom: 20px;
      }

      .comment-card {
        display: inline-block;
        width: 300px;
        height: 200px;
        margin-right: 10px;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        word-wrap: break-word; /* Added property */
        overflow-wrap: break-word; /* Added property */
      }
      .comment-card p {
        word-wrap: break-word; /* Added property */
        overflow-wrap: break-word; /* Added property */
      }
    </style>

  </head>
  <body>

    <!-- header -->
    <header class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="assets/logo.png"
            alt="Avi Hotel Logo"
            width="50"
            height="50"
          />
          <span style="font-weight: 600">Avi</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php" id="home-button"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php" id="profile-button"
                >Company Profile</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="reservation.php"
                id="reservation-button"
                >Reservation</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" id="contact-button"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="assets/banner1.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" alt="">
        </div>
        <div class="carousel-item active">
          <img src="assets/banner2.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" alt="">
        </div>
        <div class="carousel-item">
          <img src="assets/banner3.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" alt="">
        
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">
      <h3 class="text-white p-2 bg-primary mt-4">Room Type</h3>
    </div>

    <div class="container">

      <div class="row" id="room-container" >
  
      </div>
    </div>



    <div class="container">
      <h1 class="mt-5 mb-3">Customer Comments</h1>
      <div class="comment-container">
        <div class="comment-card">
          <h3>John</h3>
          <p>I was blown away by the hotel's attention to detail, from the beautifully decorated rooms to the personalized service.</p>
          <p>Rating: 4/5</p>
        </div>
        <div class="comment-card">
          <h3>Sarah</h3>
          <p>Staying at this hotel was like stepping into a dream - the staff went above and beyond to make me feel like a VIP</p>
          <p>Rating: 5/5</p>
        </div>
        <div class="comment-card">
          <h3>David</h3>
          <p>I can't say enough about the amazing facilities and stunning architecture of this hotel, not to mention the top-notch spa.</p>
          <p>Rating: 3/5</p>
        </div>
        <div class="comment-card">
          <h3>Emily</h3>
          <p>From the moment I arrived, I was greeted with warm smiles and exceptional hospitality - the hotel staff truly made me feel like family</p>
          <p>Rating: 4.5/5</p>
        </div>
        <div class="comment-card">
          <h3>Jessica</h3>
          <p>The hotel's location was unbeatable, with breathtaking views from my room and easy access to all the attractions </p>
          <p>Rating: 4.8/5</p>
        </div>
      </div>
    </div>
  


    <footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <p class="mb-0">Location: 87 St, West Rembo, Makati City</p>
        <p class="mb-0">Thirdy &copy; 2023</p>
      </div>
    </footer>
    


    <script>
      // insert the JavaScript code here
      fetch('http://localhost/HotelReservation/backend/api.php')
      .then(response => response.json())
      .then(data => {
        // loop through the retrieved data
        data.forEach(room => {
            // create HTML elements
            const colDiv = document.createElement('div');
            colDiv.classList.add('col', 'mt-3');
  
            const cardDiv = document.createElement('div');
            cardDiv.classList.add('card');
            cardDiv.style.width = '18rem';
  
            const imgElement = document.createElement('img');
            imgElement.src = "assets/" + room.imageSrc;
            imgElement.classList.add('card-img-top', 'p-2');
            imgElement.alt = '...';
  
            const cardBodyDiv = document.createElement('div');
            cardBodyDiv.classList.add('card-body');
  
            const nameH5 = document.createElement('h5');
            nameH5.classList.add('card-text', 'text-black', 'font-weight-bold', 'mb-0');
            nameH5.textContent = room.title;
  
            const bedsP1 = document.createElement('p');
            bedsP1.classList.add('mb-0');
            bedsP1.textContent = room.typeBed;
  
            const priceP1 = document.createElement('p');
            priceP1.classList.add('fs-6', 'mb-0');
            priceP1.textContent = 'Starts at';
  
            const priceP2 = document.createElement('p');
            priceP2.classList.add('mb-0');
            priceP2.textContent = `Php ${room.price}`;
  
            // append HTML elements to the page
            cardBodyDiv.appendChild(nameH5);
            cardBodyDiv.appendChild(bedsP1);
            cardBodyDiv.appendChild(priceP1);
            cardBodyDiv.appendChild(priceP2);
  
            cardDiv.appendChild(imgElement);
            cardDiv.appendChild(cardBodyDiv);
  
            colDiv.appendChild(cardDiv);
  
            document.getElementById('room-container').appendChild(colDiv);
          });
        });
    </script>

   
    <!-- scripts -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
