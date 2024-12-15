<!DOCTYPE html>
<html lang="id">

<head>
  <title>User | Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/177edb1edd.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  @yield('style')
</head>

<body class="bg-light ">
  <header>
    <nav class="navbar navbar-expand-sm bg-dark shadow" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#"> EM </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link @yield('dashboard')" href="@yield('routeDashboard')" aria-current="page">
                Beranda
              </a>
            </li>
            @yield('nav')
            <li class="nav-item">
              <a class="nav-link @yield('settings')" href="@yield('routeSettings')" aria-current="page">
                Pengaturan
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="pt-3">
    <h1 class="mx-4">@yield('page')</h1>
    <div class="mx-4">
      <div class="mt-3 d-flex justify-content-evenly border-bottom border-warning pb-2">
        @yield('buttons')
      </div>
    </div>
    <div>
      @yield('content')
    </div>
    <div
      class="sidebar h-100 position-fixed top-0 bg-light overflow-x-hidden p-4 d-flex flex-column justify-content-between"
      style="width: 300px; right: -300px; transition: 0.3s; z-index: 1000">
      <div>
        <table>
          <tr>
            <td class="d-flex justify-content-center">
              <img src="{{asset('images/profiles/' . Auth::user()->picture)}}" class="w-50"
                style="border-radius: 100%" />
            </td>
          </tr>
          <tr>
            <td class="d-flex justify-content-center">
              <h3>{{ Auth::user()->username}}</h3>
            </td>
          </tr>
        </table>
        <table class="mb-5 w-100">
          <tr>
            <td>Jumlah target terbuat:</td>
            <td class="upTotalTarget text-end">{{ Auth::user()->all_targets}}</td>
          </tr>
          <tr>
            <td>Jumlah target saat ini:</td>
            <td class="upTarget text-end">{{ Auth::user()->current_targets}}</td>
          </tr>
          <tr>
            <td>Jumlah menyukai postingan:</td>
            <td class="upNgelike text-end">{{ Auth::user()->likes}}</td>
          </tr>
          <tr>
            <td>Jumlah postingan:</td>
            <td class="upPost text-end">{{ Auth::user()->posts}}</td>
          </tr>
          <tr>
            <td>Jumlah postingan disukai:</td>
            <td class="upDilike text-end">{{ Auth::user()->post_liked}}</td>
          </tr>
        </table>
      </div>
      <div>
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button class="logout btn btn-danger w-100 shadow">Logout</button>
        </form>
      </div>
    </div>
    <div
      class="toggleSidebar d-flex position-fixed top-50 translate-middle bg-warning rounded-5 text-dark justify-content-center align-items-center"
      style="
        width: 40px;
        height: 40px;
        right: -40px;
        cursor: pointer;
        transition: 0.3s;
        z-index: 1001;
      "></div>
    <div id="overlay" style="
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
      "></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        /*sidebar*/
        $(".toggleSidebar").text("<<<");
        $(".toggleSidebar").click(function () {
          var sidebar = $(".sidebar");
          var toggleBtn = $(".toggleSidebar");

          if (sidebar.css("right") === "-300px") {
            sidebar.css("right", "0");
            toggleBtn.css("right", "260px").text(">>>");
            $("#overlay").fadeIn(300);
          } else {
            sidebar.css("right", "-300px");
            toggleBtn.css("right", "-40px").text("<<<");
            $("#overlay").fadeOut(300);
          }
        });

      });
    </script>
    @yield('script')
</body>

</html>