
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
  <a class="navbar-brand" href="/"><i class="nav-icon fas fa-th"></i></i>NEED-A-CAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Homepage</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('registrasi') }}">Register</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('about') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>