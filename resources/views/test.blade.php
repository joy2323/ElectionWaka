@extends('layouts.app')
@section('content')
<center>
<a href="/login/facebook"><div class="btn btn-md btn-primary"><i class="fa fa-facebook"></i>Login with Facebook</a>
<a href="/login/google"><div class="btn btn-md btn-primary"><i class="fa fa-google"></i>Login with Google</a>
<a href="/login/twitter"><div class="btn btn-md btn-primary"><i class="fa fa-twitter"></i>Login with Twitter</a>
</center>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="{{asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
@endsection