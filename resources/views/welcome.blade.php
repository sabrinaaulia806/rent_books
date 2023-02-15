<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Rent Books</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="#">Rental Boks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Romance</a></li>
              <li><a class="dropdown-item" href="#">fiksi</a></li>
              <li><a class="dropdown-item" href="#">Horor</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="content">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" style="height:600px">
        <div class="carousel-item active">
          <img src="https://i.pinimg.com/564x/ea/da/ea/eadaea82d73265846a47f74bead4c8a9.jpg" class="d-block w-100" style="max-height:550px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/564x/b6/5f/e5/b65fe5177f89cc96b22201f9ab00dc62.jpg" class="d-block w-100" style="max-height:550px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/564x/72/1a/1a/721a1a97956b1d7ed84bc9d66ec20b02.jpg" class="d-block w-100" style="max-height:500px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-4">
          <h1>Sabrina</h1>
          <a href="#" type="button" class="btn btn-outline-info btn-lg">Info</a>
        </div>
        <div class="col-lg-8">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor soluta ullam dolores fuga illo at maxime doloribus quis totam placeat, ipsa, vero corrupti quibusdam? Reprehenderit exercitationem error neque? Natus, earum?

        </div>
      </div>
    </div>

    <!--Cards Books-->
    <div class="container">
      <div class="row text-center">
        <h2>Buku Terpopuler</h2>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/53/67/d3/5367d3db20b2a17248c3885fcf56e58c.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bulan</h5>
              <p class="card-text">Pada novel Bulan ini dikisahkan Ali, Seli, dan Raib yang dibawa oleh Miss Selena dan Av untuk melakukan diplomasi di Klan Matahari. Tujuannya adalah untuk membuka portal atau gerbang yang sudah ribuan tahun lamanya ditutup.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/12/a6/b1/12a6b1d00a32b87a5f6b86aada1674ea.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bintang</h5>
              <p class="card-text">Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib yang bisa menghilang, Seli yang bisa mengeluarkan petir dan Ali seorang pelajar yang sangat jenius.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/e2/15/3f/e2153fc5021364644015758f40c84418.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bumi</h5>
              <p class="card-text">Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib yang bisa menghilang, Seli yang bisa mengeluarkan petir dan Ali seorang pelajar yang sangat jenius..</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Contact-->
    <div class="container">
      <div class="row text-center">
        <h2>Contact Admin</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Messege</label>
              <textarea class="form-control" id="messege"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!--Footer-->

    <footer class="bg-secondary text-white text-center mt-5" style="height: 50px">
      <p>Create By <a href="#" class="text-white fw-bold" style="text-decoration:none" target="_blank">Sabrina Aulia</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>