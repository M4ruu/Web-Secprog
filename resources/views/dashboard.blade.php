<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ushoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color:  rgb(151, 222, 206);">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="">Navbar</a> --}}
          <img src="/images/logofinal.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create">Kritik Dan Saran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Caraousel  --}}
      
      <div class="slider">
        <div class="textop">
          <h3>Top 10 Sneakers in December 2022</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="text-center">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/yeezy2.png" class="d-block w-50 mx-auto" alt="..." class="text-center">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Air Jordan 1 High OG Lost and Found</h5>
                        <p>Release Date: 19 November 2022.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/yeezy2.png" class="d-block w-50 h-10 mx-auto" alt="..." class="text-center">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Nike Dunk Low White Black 2021</h5>
                        <p>Release Date: 14 January 2021.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/travis2.png" class="d-block w-50 mx-auto" alt="..." class="text-center">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Jordan 1 Low Fragment x Travis Scott</h5>
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
                      <span class="visually-hidden">
            </div>
      </div>
    </div>
    </body>
    <footer>
      <div class="leftfooter">
        {{-- <img src="/images/logofinal.png" alt="" id="gambar1"> --}}
        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo odit suscipit reprehenderit minima non laborum unde nemo dolore dignissimos aut, voluptatibus dolorem exercitationem incidunt, provident ipsam accusantium totam quidem consequatur?</h5>
        <p>&copy;Copyright Ushoes</p>
      </div>

      <div class="rightfooter">
        <a href="https://www.instagram.com/ushoes__/"><img src="/images/ig.png" alt="" ></a>
        <a href="https://www.facebook.com/ushoes.id/"><img src="/images/fb.png" alt="" ></a>
    </div>
    
    </footer>
</html>