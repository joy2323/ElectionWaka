@extends('admin.layout.master')
@section('title', 'Election|| View Manifesto')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>All Manifesto</h3>			

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<!-- <li>All Questions</li> -->
					</ul>
				</nav>
			</div>
			
			<table class="table table-hover table-sm">
    			<thead>
        			<tr>
            			<th width = "120px"><b>No.</b></th>
						<th width = "250px">Manifesto</th>  
						<th width = "200px">Date Created</th>
        			</tr>
    			</thead>
    			<tbody>
        	@foreach($manifesto as $manifest)
			<!--  -->
       			 	<tr>
            			<td><b>{{$loop->index+1}}</b></td>
            			<td>{{$manifest->manifesto}}</td>
           	 			<td>{{$manifest->created_at}}</td>
						<td width = "100px">
							<a class = "button ripple-effect-warning big margin-top-30" href = "{{route('delman', $manifest->id)}}" role = "button">Delete</a>
						</td>
						<td width = "100px">	
							<a class = "button ripple-effect big margin-top-30"  href = "{{route('editman', $manifest->id)}}" role = "button">Edit</a>		
						</td>
        			</tr>
       		 @endforeach
    			</tbody>
			</table>
			

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Innovation Growth Hub</strong>. All Rights Reserved.
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