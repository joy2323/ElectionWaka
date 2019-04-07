<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="{{url('/admin/index')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Candidates</a>
								<ul>
									<li><a href="{{url('/admin/addcandidate')}}">Add Candidate </a></li>
									<li><a href="{{url('/admin/viewcandidates')}}">View Candidates<span class="nav-tag">3</span></a></li>
									
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Categories</a>
								<ul>
									<li><a href="{{url('/admin/addcategory')}}">Add Category</a></li>
									<li><a href="{{url('/admin/viewcategories')}}">View Categories</a></li>									
								</ul>	
							</li>
                            <li><a href="#"><i class="icon-material-outline-assignment"></i> Questions</a>
								<ul>
									<li><a href="{{url('/admin/addquestion')}}">Add Question<span class="nav-tag">2</span></a></li>
									<li><a href="{{url('/admin/viewquestions')}}">View Questions</a></li>									
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Answers</a>
								<ul>
									<li><a href="{{url('/admin/addanswer')}}">Add Answer</a></li>
									<li><a href="{{url('/admin/viewanswers')}}">View Answers</a></li>									
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Admin Users</a>
								<ul>
									<li><a href="{{url('/admin/viewusers')}}">View Users</a></li>
									
								</ul>	
							</li>
                            
						</ul>

						<ul data-submenu-title="Account">
							<!--<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>-->
							<li><a href="{{url('/logout')}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->