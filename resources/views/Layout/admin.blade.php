<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
<title>@yield('title', 'Admin - My Blog')</title>
</head>
<body>
<div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-white bg-dark">
<a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
<span class="fs-4">Admin Panel</span>
</a>
<hr />
<ul class="nav flex-column">
<li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
<li><a href="{{ route('admin.post.index') }}" class="nav-link text-white">- Admin - Posts</a></li>
<li>
<a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
</li>
</ul>
</div>
<!-- sidebar -->
<div class="col content-grey">
<nav class="p-3 shadow text-end">
<span class="profile-font">Admin</span>
<img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
</nav>
<div class="g-0 m-5">
@yield('content')
</div>
</div>
</div>
<footer class="blog-footer">
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      </a>
      <span class="text-center">&copy; 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>