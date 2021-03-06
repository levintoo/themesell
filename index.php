<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ThemeSell</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-dark fs-4 p-3  " href="#">ThemeSell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Link</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="hero py-5 d-flex align-items-center">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h1 class="fs-2 text-white">Themesell - The Best Themes</h1>

      </div>
    </div>
  </section>
  <main class="content bg-light container py-4">
    <section class="row">
    <?php

      require_once("./php/getPost.php");
      getMainPosts();

    ?>
    </section>
    <div class="d-flex justify-content-center">
      <button class="btn btn-success btn-md my-4">Load More</button>

    </div>
  </main>
  <section class="hero p-2 text-center ">
    <div class="d-flex py-5 container justify-content-center  flex-wrap">
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap</a>
      <a href="" class="badge bg-dark fs-5 m-2">Web development</a>
      <a href="" class="badge bg-dark fs-5 m-2">Themes</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap 5</a>
      <a href="" class="badge bg-dark fs-5 m-2">2020</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap themes</a>
      <a href="" class="badge bg-dark fs-5 m-2">HTML themes</a>
      <a href="" class="badge bg-dark fs-5 m-2">HTML &amp; CSS</a>
      <a href="" class="badge bg-dark fs-5 m-2">HTML CSS theme</a>
      <a href="" class="badge bg-dark fs-5 m-2">HTML CSS 2021</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap template</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap web template</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap theme 2021</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap themes</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap theme 2021</a>
      <a href="" class="badge bg-dark fs-5 m-2">Bootstrap 5 themes</a>
    </div>
  </section>
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <h2 class="font-bold">Themesell</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo quia dolorem consequatur corporis quo ab nobis aspernatur quidem temporibus. Placeat porro enim sit beatae nemo cupiditate provident, suscipit accusamus molestiae ad eum earum eius, doloribus impedit dicta! Illum deserunt ullam corrupti nulla, ex, odio, laborum perferendis voluptatibus qui nihil earum!</p>
      <div class="d-flex flex-wrap justify-content-center">
          <a href="" class="badge bg-success fs-6 p-2 m-1">Privacy policy</a>
          <a href="" class="badge bg-success fs-6 p-2 m-1">Terms of service</a>
          <a href="" class="badge bg-success fs-6 p-2 m-1">Contact us</a>
          <a href="" class="badge bg-success fs-6 p-2 m-1">About us</a>
          <a href="" class="badge bg-success fs-6 p-2 m-1">Home</a>
      </div>
    </div>
    <div class="credits text-center py-4">
      <p>Made by Levin &copy; 2021. All rights reserved.</p>
  </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>