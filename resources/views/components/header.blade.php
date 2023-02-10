<nav class="navbar navbar-expand-lg bg-dark text-white fixed-top">
  <div class="container d-flex">
    <a class="navbar-brand text-white" href="{{ route('home') }}">Dave's Dog Training</a>
    <button
      class="navbar-toggler text-white"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse text-center justify-content-end" id="navbarText">
      <div class="navbar-nav">
        <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
        <a class="nav-link text-white" href="{{ route('about') }}">About</a>
        <a style="background-color: #E6D8F8;" href="{{ route('contact') }}" class="nav-link text-dark rounded-3">Contact Us</a>
      </div>
    </div>
  </div>
</nav>