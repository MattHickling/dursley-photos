<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dursley Photography</title>

    <!-- style CSS ----------------------------------------->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap ----------------------------------------->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">

    <!-- Dropzone -------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dursley <span class="photo">Photography</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>   
         <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Upload Photos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <input type="text" id="search-form" name="search" placeholder="Search for photos...">
      <button type="button" id="search-button">Search</button>
    </div>
  </div>
</nav>

    <!-- Carousel ----------------------------------->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/longdown.jpg" class="d-block w-100" alt="Whiteway Hill">
    </div>
    <div class="carousel-item">
      <img src="assets/images/stinchcombe.jpeg" class="d-block w-100" alt="stinchcombe">
    </div>
    <div class="carousel-item">
      <img src="assets/images/campeak.jpg" class="d-block w-100" alt="view">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <!-- About ------------------------------------------>  
    <section>
    <h3 class="about-title text-center">About</h3>
    <p class="about">Dursley Photography is an online platform dedicated to showcasing photographs of the town of Dursley and the surrounding areas. The website is designed to be a space for both amateur and professional photographers to share their work and connect with others who share their passion for photography. The website allows you to search for any images relating to Dursley on Flickr and view them on our platform for free.<br><br>
The community of Dursley Photography is a diverse group of individuals who share a love for photography and a desire to share their work with others. The platform provides a space for these individuals to showcase their talents and connect with other like-minded individuals. Dursley Photography is an important resource for anyone interested in photography, whether they are looking to view stunning images of the town and its surroundings or to share their own work with a wider audience.</p>
</section>


    <!-- Images ------------------------------------------->
    <div id="photos"></div>


    <!-- Upload ------------------------------------------->
    <form id="myForm" action="assets/php/photo_upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button type="submit">Upload</button>
    </form>

<div id="photos"></div>





    <!-- Footer ------------------------------------------->
    <footer class="bg-secondary text-light"></footer>



    <!-- jQuery ------------------------------------------->
    <script src="assets/jQuery/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- JavaScript --------------------------------------->
    <script src="assets/js/main.js"></script>

    <!-- Bootstrap ---------------------------------------->
    <script src="assets/bootstrap/bootstrap.min.js"></script>


    <!-- Dropzone ----------------------------------------->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

  
</body>
</html>

