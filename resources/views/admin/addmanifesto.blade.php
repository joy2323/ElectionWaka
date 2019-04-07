@extends('admin.layout.master')
@section('title', 'Election||Add Manifesto')
@section('content')

<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Add Manifesto</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>						
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<!-- <li>Add Manifesto</li> -->
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Manifesto Addition Form</h3>
						</div>
						<div>
							@if(count($errors->all()) >=1)
								@foreach($errors->all() as $error)
								<div class="alert alert-danger">
									{{$error}}</div>
								@endforeach
							@endif
						<!-- code for ensuring that success token is displayed -->
								@if(session('status'))
									<div class="alert alert-success">
										{{session('status')}}
									</div>
								@endif
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-8">
								<form method = "post">
									@csrf
									<div class="submit-field">
										<h5> Manifesto</h5>
										<input type="text" class="with-border" name ="manifesto">
									</div>
                                    <div class="submit-field">
										<h5> Candidate</h5>
										<input type="text" class="with-border" name="candidate_id" placeholder="Fela Durotoye">
									</div>
                                    <div class="submit-field">
										<h5> Category</h5>
										<input type="text" class="with-border" name="category_id" placeholder="Education">
									</div>
									<div class="col-xl-12">
										<input type="Submit" value="Post a Manifesto" role = "button">
									</div>

								</form>
								</div>


							</div>
						</div>
					</div>
				</div>

				
			</div>
		
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© IGHUB 2019 <strong> Election</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>







@endsection