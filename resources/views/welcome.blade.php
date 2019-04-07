@extends('user.layout.master')
@section('title', 'Whotovote||Welcome')
@section('content')

  <!-- header -->
  <header class="hero-section container-fluid text-md-center">
    <div class="jumbotron bg-transparent p-0 hero-section__content">
      <h1 class="mt-5 mt-sm-0 hero-section__title" style="font-weight: 300px;font-size: 2em;">KNOW WHO-TO-VOTE</h1>
      <p class="mt-5 mt-sm-0 hero-section__subtitle">Read about what the Nigerian 2019 presidential candidates have to say</p>
      <div class="btn-group mb-4 mt-3">
        <a class="btn btn-warning text-light mr-1 p-3 mb-5 mb-md-0" href="social.html" role="button">View manifesto
        </a>
        <a class="btn btn-light text-success p-3 mb-5 mb-md-0" href="social.html" role="button">
            Take poll
        </a>
      </div>
      <h1 style="margin-top: 40px;">Countdown to 2019 presidential election date.</h1>
      <h1 id="timer" style="font-size: 60px; font-weight: 
      200px;"></h1>
    </div>
  </header>

   

  <div class="container-fluid p-5 text-center brand-bg making-governance-work text-light">
    <p>&copy; whotovote.ng 2019 | made with &hearts; at Innovation Growth Hub Africa</p>
  </div>
  
@endsection