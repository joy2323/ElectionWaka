@extends('admin.layout.master')
@section('title', 'Election')
@section('content')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>All Answers</h3>			

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						
						<li><a href="{{url('admin/index')}}">Dashboard</a></li>
						<li>All Answers</li>
					</ul>
				</nav>
			</div>
			
			<table class="table table-hover table-sm">
    			<thead>
        			<tr>
            			<th width = "100px"><b>No.</b></th>
						<th width = "250px">Answers</th>  
						<th width = "200px">Date Created</th>
        			</tr>
    			</thead>
    			<tbody>
        	@foreach($answers as $answer)
       			 	<tr>
            			<td><b>{{$loop->index+1}}</b></td>
            			<td>{{$answer->answer}}</td>
           	 			<td>{{$answer->created_at}}</td>
        			</tr>
       		 @endforeach
    			</tbody>
			</table>

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
	<!-- Dashboard Content / End -->
@endsection