@extends('admin.layout.master')
@section('title', 'Election|| View All Categories')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>All Categories</h3>			

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<li>All Categories</li>
					</ul>
				</nav>
			</div>
	
		<table class="table table-hover table-sm">
    		<thead>
        		<tr>
            		<th width = "100px"><b>No.</b></th> 
            		<th width = "200px">Categories</th> 
					<th width = "300px">Date Created</th>
        		</tr>
    		</thead>
    		<tbody>
        	@foreach($category as $category)
       			 <tr>
            		<td><b>{{$loop->index+1}}</b></td>
            		<td>{{$category->name}}</td>
           	 		<td>{{$category->created_at}}</td>
					<td width = "170px">
						<a class = "button ripple-effect-warning big margin-top-30" href = "{{route('delcat', $category->id)}}" role = "button">Delete</a>
					</td>
					<td width = "100px">	
						<a class = "button ripple-effect big margin-top-30"  href = "{{route('editcat', $category->id)}}" role = "button">Edit</a>		
					</td>
        		</tr>
       		 @endforeach
    		</tbody>
		</table>

			
			
			
			
			<!-- Row -->
			<!-- <div class="row"> -->

				<!-- Dashboard Box -->
				<!-- <div class="col-xl-12">
					<div class="dashboard-box margin-top-0"> -->

						<!-- Headline -->
						<!-- <div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i> 3 Categories</h3>
						</div> -->

						<!-- <div class="content">
							<ul class="dashboard-box-list">
								<li> -->
									<!-- Overview -->
									<!-- <div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner"> -->

											<!-- Avatar -->
											<!-- <div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="{{asset('images/user-avatar-big-03.jpg')}}" alt=""></a>
											</div> -->

											<!-- Name -->
											<!-- <div class="freelancer-name">
												<h4><a href="#">Sindy Forest <img class="flag" src="{{asset('images/flags/au.svg')}}" alt="" title="Australia" data-tippy-placement="top"></a></h4> -->

												<!-- Details -->
												<!-- <span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> sindy@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+61) 123-456-789</span> -->

												<!-- Rating -->
												<!-- <div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"></div>
												</div> -->

												<!-- Buttons -->
												<!-- <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i>Edit</a>
													<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i>Delete</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li> -->
									<!-- Overview -->
									<!-- <div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner"> -->

											<!-- Avatar -->
											<!-- <div class="freelancer-avatar">
												<a href="#"><img src="{{asset('images/user-avatar-placeholder.png')}}" alt=""></a>
											</div> -->

											<!-- Name -->
											<!-- <div class="freelancer-name">
												<h4><a href="#">Sebastiano Piccio <img class="flag" src="{{asset('images/flags/it.svg')}}" alt="" title="Italy" data-tippy-placement="top"></a></h4> -->
											

												<!-- Details -->
												<!-- <span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> sebastiano@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+39) 123-456-789</span> -->

												<!-- Rating -->
												<!-- <br>
												<span class="company-not-rated">Minimum of 3 votes required</span> -->

												<!-- Buttons -->
												<!-- <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Edit</a>
													<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i>Delete</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li> -->
									<!-- Overview -->
									<!-- <div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner"> -->

											<!-- Avatar -->
											<!-- <div class="freelancer-avatar">
												<a href="#"><img src="{{asset('images/user-avatar-placeholder.png')}}" alt=""></a>
											</div> -->

											<!-- Name -->
											<!-- <div class="freelancer-name">
												<h4><a href="#">Nikolay Azarov <img class="flag" src="{{asset('images/flags/ru.svg')}}" alt="" title="Russia" data-tippy-placement="top"></a></h4> -->

												<!-- Details -->
												<!-- <span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> nikolay@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+7) 123-456-789</span> -->

												<!-- Rating -->
												<!-- <br>
												<span class="company-not-rated">Minimum of 3 votes required</span> -->

												<!-- Buttons -->
												<!-- <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i>Edit</a>
													<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i>Delete</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

			</div> -->
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Election</strong>. All Rights Reserved.
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
	<!-- Dashboard Content / End -->
@endsection