<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
  <link rel="stylesheet" href="{{asset('/')}}assets/css/aos.css">
  <link rel="stylesheet" href="{{asset('/')}}assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

  <!-- NAVBAR  Start -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
      <a class="navbar-brand mx-lg-auto" href="#home">
        <span class="d-block d-lg-none"><b class="h3 fw-bold">Juicy</b>Codes</span>
        <img src="assets/images/myPic.jpg" alt="" class="d-none d-lg-block rounded-circle">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto flex-lg-column text-lg-center mt-3">
          <a class="nav-link" href="#home">Home</a>
          <a class="nav-link" href="#services">Services</a>
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#work">Work</a>
          <a class="nav-link" href="#contact">Contact</a>
          {{-- <a class="nav-link" href="{{route('login')}}">Login</a>
          <a class="nav-link" href="{{route('register')}}">Register</a> --}}
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR  End -->


  <!-- CONTENT Start -->
  <div id="content-wrapper">
