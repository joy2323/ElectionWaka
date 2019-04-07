@extends('admin.layout.master')
@section('title', 'Election')
@section('content')
<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Add Candidate</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<li>Add Candidate</li>
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
							<h3><i class="icon-feather-folder-plus"></i> Candidate Submission Form</h3>
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

								<div class="col-xl-10">
									<form method= "POST" action="{{route ('candi')}}" enctype="multipart/form-data">
										@csrf
										<div class="submit-field">
											<h5>Name </h5>
											<input type="text" class="with-border" name= "name" value="{{$candidate->name}}">
										</div>
										<div class="submit-field">
											<h5>State of Origin</h5>
											<input type="text" class="with-border" name= "state" value="{{$candidate->state}}">
										</div>
										<div class="submit-field">
											<h5>Party Name</h5>
											<input type="text" class="with-border" name= "party_name" value="{{$candidate->party_name}}">
										</div>
										<div class="submit-field">
											<h5>Date of Birth </h5>
											<input type="text" class="with-border" name= "dob" value="{{$candidate->dob}}">
										</div>
										<div class= "submit-field">
											<h5>Manifesto</h5>
											<textarea cols="10" rows="5" class="with-border" name= "manifesto" value="{{$candidate->manifesto}}"></textarea>
										</div>
										
										<div class="row ">
                                            <div class="col-md-5">
                                                    <label class="control-label">Upload Profile Picture</label>
                                            </div>
                                            <div class="col-md-7">
                                                    <input type="file" class="filestyle upload" name="profile_picture" data-icon="false" value="{{$candidate->profile_picture}}">
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                                <div class="col-md-5">
                                                        <label class="control-label">Upload Party Picture</label>
                                                </div>
                                                <div class="col-md-7">
                                                        <input type="file" class="filestyle upload" name="party_picture"data-icon="false" value="{{$candidate->party_picture}}">
                                                </div>
                                                
										</div><br/><br/>
										
										<div class="col-xl-12">
											<input type="Submit" value="Post a Candidate" role = "button">
										</div>
																
								
									</form>
									
								
								</div>
								
								<!-- <div class="col-xl-12">
									<div class="submit-field">
										<h5>Job Description</h5>
										<textarea cols="30" rows="5" class="with-border"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
										</div>
									</div>
								</div> -->

							</div>
						</div>
					</div>
				</div><br/>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© Ighub 2019 <strong>Election</strong>. All Rights Reserved.
				</div>
				<!-- <ul class="footer-social-links">
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
				</ul> -->
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	@endsection