
<!DOCTYPE html>
<html>
<title>Questions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://www.w3schools.com/w3css/4/w3.css')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Raleway')}}">
<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
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

<!-- Top container -->
<div class="w3-bar  w3-top w3-large" style="z-index:4;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button>
  <span class="w3-bar-item w3-left"><img class="logo" src="{{asset('images/opavote-online-voting-203x56.png')}}" style="width: 150px;"></span>
  <span class="icon w3-bar-item w3-right"><a href="#"><i class="fa fa-user-circle"></i></a>Hi Josh!</span>
  <span class="icon w3-bar-item w3-right"><a href="#"><i class="fa fa-signal"></i></a>Overall</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar"><br>
  <div class="w3-bar-block">
    <a href="{{url('user/index')}}" class="w3-bar-item w3-button w3-padding"> Dashboard</a><br><br>
    <a href="{{url('user/dashboard')}}" class="second w3-bar-item w3-button w3-padding" > Overview</a>
    <a href="{{url('user/questions')}}" class="w3-bar-item w3-button w3-padding"> Questions</a>
    <a href="{{url('user/result')}}" class="w3-bar-item w3-button w3-padding" style="border-bottom: 2px solid #99ca49;"> Your poll result</a>
    <a href="{{url('user/overall')}}" class="w3-bar-item w3-button w3-padding" >Overall poll result</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <div class="poll">
    <h5><b>Questions</b></h5>
  </div><br><br>


 
  <form class="questions">
    <div class="form-group">
    <label for="exampleFormControlTextarea1" class="first">1</label>
    <h6>
      When I Think of Nigeria,I See a Better Ground For bla bla bla Shit And the people doing some Amazing Bla Bla Bla shit.What do you have to say?
    </h6>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button class="btn"><a href="#">NEXT</a></button>
  </form><br><br><br>
</div>



    <div class="footer row">
            <div class="col-md-4">
              <img class="img-fluid" src="{{asset('images/opavote-online-voting-203x56.png')}}"><br>
              <p>Copyright 2018 toxin UI Kit.</p>
              <p>All rights reserved.</p>
            </div>
            <div class="col-md-2">
              <h6>NAVIGATION</h6>
              <a href="#">About Us</a><br>
              <a href="#">News</a><br>
              <a href="#">Support</a><br>
              <a href="#">Products</a>
            </div>
            <div class="col-md-2">
              <h6>ABOUT US</h6>
              <a href="#">Who we are</a><br>
              <a href="#">Our Team</a><br>
              <a href="#">Careers</a><br>
              <a href="#">Investors</a>
            </div>
            <div class="col-md-2">
              <h6>SUPPORT</h6>
              <a href="#">Documentation</a><br>
              <a href="#">Community</a><br>
              <a href="#">Get in touch</a>
            </div>
            <div class="col-md-2">
              <h6>SOCIAL</h6>
              <a href="#"><i class="fab fa-twitter"></i>Twitter</a><br>
              <a href="#"><i class="fab fa-facebook"></i>Facebook</a><br>
              <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
          
  <!-- End page content -->


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