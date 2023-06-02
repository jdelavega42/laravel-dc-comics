<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="text-bg-dark">
    <header class="sticky-top bg-white shadow-lg">
        <nav class="container navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
              </a>

              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName()=== 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName()=== 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Comics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName()=== 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">Create</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>

</body>

</html>