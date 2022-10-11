<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>
        @yield('title')
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/blog.css') }}" rel="stylesheet" />
  </head>
  <body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">

      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a  href="{{ route('home.index') }}"class="nav-link px-2 link-secondary">Articles</a></li>
        <li><a href="{{route('home.gallery') }}" class="nav-link px-2 link-dark">Gallery</a></li>
        <li><a  href="{{ route('home.about') }}" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
      @guest
        <a href="{{ route('login') }}" class="btn btn-xs btn-info pull-right">Login</a>
        <a href="{{ route('register') }}" class="btn btn-xs btn-info pull-right">Sign Up</a>
        @else
        <form id="logout" action="{{ route('logout') }}" method="POST">
        <a role="button" class="nav-link active"
        onclick="document.getElementById('logout').submit();">Logout</a>
       @csrf
       </form>
      @endguest

      </div>
    </header>
  </div>

  <div>
    @yield('content')
</div>

<footer>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      </a>
      <div class="text-center">&copy; 2022 Company, Inc</div>
    </div>
  </footer>
</div>
 <div class="text-center"> <p>
    <a href="#">Back to top</a>
  </p>
    </div>
</footer>


    
  </body>
</html>


