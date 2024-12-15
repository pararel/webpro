<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Energy Monitoring | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/177edb1edd.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <style>
    footer div a,
    footer div a:visited {
      text-decoration: none;
      color: inherit;
    }

    footer {
      font-weight: 500;
      display: flex;
    }
  </style>
</head>

<body class="bg-light">
  <header>
    <nav class="navbar navbar-expand-sm bg-dark fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#"> Energy Monitoring </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('welcome')}}" aria-current="page">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('signup')}}"> Sign Up </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}"> Login </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class=" mx-5">
    <div class="d-flex align-items-end" style="height: 400px">
      <img src="{{ asset('images/electricity-bg.jpg')}}" class="img-fluid" style="
            z-index: 1;
            height: fit-content;
            filter: brightness(50%);
            width: 100%;
          " />
      <div class="position-absolute bottom-20 ms-3" style="z-index: 2">
        <h1>
          <span class="text-warning fw-bold mt-6"> Switch Off, </span>
          <br />
          <span class="text-white fw-bold"> Save On! </span>
        </h1>
        <p class="text-white">
          Kelola penggunaan energi anda
          <br />
          sekarang juga!
        </p>
      </div>
    </div>
    <div class="d-flex mt-5">
      <div class="row">
        <div class="col-sm-6 d-flex justify-content-end">
          <img src="images/hoki.jpg" class="img-fluid" style="width: 500px; z-index: 1" />
        </div>
        <div class="col-sm-6 pt-2">
          <h1>Tentang Kami</h1>
          <hr class="bg-warning" style="height: 2px" />
          <div class="mt-5">
            <p>
              kami adalah kumpulan mahasiswa universitas telkom yang gabut
              kepikiran buat website mengenai monitoring energi. ini relate
              kami ya ges karena kadang kami juga kesusahan dalam mengelola
              pemakaian energi
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-5 bg-dark">
      <h1 class="text-white text-center py-5">Layanan Kami</h1>
      <div class="row justify-content-evenly text-center pb-5 px-2">
        <div class="col-sm-3 bg-white mb-2">
          <i class="far fa-thumbs-up mt-2" style="font-size: 70px"></i>
          <h3 class="mt-2">Forum Diskusi</h3>
          <p class="mt-2 text-start">
            Kami menyediakan fasilitas ini agar para pengguna bisa saling sharing
          </p>
        </div>
        <div class="col-sm-3 bg-white mb-2">
          <i class="far fa-clock mt-2" style="font-size: 70px"></i>
          <h3 class="mt-2">Kelola Pemakaian</h3>
          <p class="mt-2 text-start">
            Pengguna dapat membatasi
            pemakaian menurut daya suatu alat elektronik yang digunakan
          </p>
        </div>
        <div class="col-sm-3 bg-white mb-2">
          <i class="far fa-newspaper mt-2" style="font-size: 70px"></i>
          <h3 class="mt-2">Berita</h3>
          <p class="mt-2 text-start">
            Berita memungkinkan penambahan wawasan atau pengetahuan yang relevan kepada pengguna
          </p>
        </div>
      </div>
    </div>
  </main>
  <footer class="mt-5 container-fluid bg-dark">
    <div class="row d-flex justify-content-between mx-5 text-white py-5">
      <div class="col-sm-3">
        <h5 class="fw-bold">Energy Monitoring</h5>
      </div>
      <div class="col-sm-3">
        <h5 class="fw-bold mb-4">Alamat</h5>
        <p>
          Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom
          University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa
          Barat 40257
        </p>
      </div>
      <div class="col-sm-3">
        <h5 class="fw-bold mb-4">Media Sosial</h5>
        <a href="https://instagram.com" class="me-3">
          <i class="fab fa-instagram fs-2" href=""></i>
        </a>
        <a href="https://facebook.com" class="me-3">
          <i class="fab fa-facebook-f fs-2" href=""></i>
        </a>
        <a href="https://tiktok.com" class="me-3">
          <i class="fab fa-tiktok fs-2" href=""></i>
        </a>
        <a href="https://linkedin.com" class="me-3">
          <i class="fab fa-linkedin fs-2" href=""></i>
        </a>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>