<!DOCTYPE html>
<html>
<title>@yield ('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://www.w3schools.com/w3css/4/w3.css')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Raleway')}}">
<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
 <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js')}}"></script>
<script
  src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-white">
    
    <!-- code for linking sidebar and footer -->
    <div>
        @include('user.vote.sidebar')
       @yield('content')
     
    </div>
    @include('user.layout.footer')
    
<!-- Top container -->
<div class="w3-bar  w3-top w3-large" style="z-index:4;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button>
  <span class="w3-bar-item w3-left"><img class="logo" src="{{asset('public/images/WHO%20TO%20VOTE%20png%201.png')}}" style="width: 150px;"></span>
  <span class="icon w3-bar-item w3-right"><a href="#"><i class="fa fa-user-circle"></i></a>Hi @if(Auth::check())
  {{Auth::user()->name}} ! 
  @endif</span>
  <span class="icon w3-bar-item w3-right"><a href="#"><i class="fa fa-signal"></i></a>Overall</span>
</div>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

   

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
    </body>
</html>