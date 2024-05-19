<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- begin::navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
           
            </ul>
            <a href="{{ route('register') }}" class="btn btn-brand ms-lg-4">Register</a>
          </div>
        </div>
      </nav>
    <!-- end::navbar -->
   
    @yield('content')

    <!-- begin::footer -->
    <footer class="py-4 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center text-light">
                        &copy; 2024 Kelompok XX - Dadan & Agus
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::footer -->
</body>
</html>