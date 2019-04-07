@extends('admin.layout.master')
@section('title', 'Edit Election')
@section('content')
<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Add Category</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>						
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<li>Add Category</li>
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
							<h3><i class="icon-feather-folder-plus"></i> Edit Category Form</h3>
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

								<div class="col-xl-4">
								<form method = "post">
									@csrf
									<div class="submit-field">
										<h5>Category Title</h5>
										<input type="text" class="with-border" name ="name" value="{{$category->name}}">
									</div>
									<div class="col-xl-12">
										<input type="Submit" value="Post a Category" role = "button">
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
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
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