@extends('user.layout.master')
@section('title', 'Whotovote||Social')
@section('content')

<section class="Social-page">
		<div class="form-box">
			<div class="form-title text-center">
				<h1>Login to  WHO-TO-VOTE.</h1>
			</div>
			<button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Facebook</button>
			<button type="button" class="btn google-btn btn-lg btn-block"><img src="{{asset('images/gle.svg')}}" class="icns"> Google</button>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" style="margin: 0 auto; padding: 0;">
					<button class="btn btn-primary" style="background-color: #ffc107;border:none!important;">Back to home</button>
				</div>
			</div>
		</div>

		<div class="login-footer text-center">
			<p>&copy; whotovote.ng | made with love at Innovation Growth Hub Africa.</p>
		</div>
	</section>
</body>
</html>



@endsection