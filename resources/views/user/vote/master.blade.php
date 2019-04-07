<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <!--favicon icon-->
    <link rel="icon" href="">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('app/css/font-awesome.min.css')}}">

    <!-- iconmind icon css -->
    <link rel="stylesheet" href="{{asset('app/css/iconmind-line.css')}}">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--owl carousel css-->
    <link rel="stylesheet" href="{{asset('app/css/owl.carousel.min.css')}}">

    <!--nice-select css-->
    <link rel="stylesheet" href="{{asset('app/css/nice-select.css')}}">

    <!-- global style css -->
    <link rel="stylesheet" href="{{asset('app/css/global-style.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/assets/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/assets/input.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/assets/team.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/assets/input.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/assets/faq.css')}}">
</head>

<body>

<div>
        @include('user.vote.navbar')
        @yield('content')
        </div>
      <!-- code for linking footer -->
        @include('user.vote.footer')


        <!-- ======================================= 
        ==Start scroll top==  
    =======================================-->
    <div class="scroll_top not_visible"><i class="fa fa-angle-up"></i></div>
    <!-- =======================================
        ==End scroll top==  
    =======================================-->

    <!-- jQuary library -->
    <script type="text/javascript" src="{{asset('app/js/jquery.min.js')}}"></script>

    <!--bootstrap js-->
    <script type="text/javascript" src="{{asset('app/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('app/js/bootstrap.min.js')}}"></script>

    <!--owl carousel js-->
    <script type="text/javascript" src="{{asset('app/js/owl.carousel.min.js')}}"></script>

    <!--nice-select js-->
    <script type="text/javascript" src="{{asset('app/js/jquery.nice-select.min.js')}}"></script>

    <!-- all jQuery activation code here and always it will be bottom of all script tag -->
    <script type="text/javascript" src="{{asset('app/js/main.js')}}"></script>
</body>

</html>

   
