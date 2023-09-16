<div class="header">
	<div class="header-left">
		<a href="index.html" class="logo">
			<img src="{{ URL::to('admin/assets/img/logo-hotel.png')}}" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span>
		</a>
		<!-- when hamburger is closed only image is shown -->
		<a href="index.html" class="logo logo-small">
			<img src="{{ URL::to('admin/assets/img/logo-hotel.png')}} " alt="Logo" width="30" height="30">
		</a>
	</div>
	<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
	<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
	<ul class="nav user-menu">
		<!-- <li class="nav-item dropdown noti-dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">4</span> </a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="#">
								<div class="media"> <span class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('admin/assets/img/profiles/avatar-06.jpg')}}">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Supriya Giri</span> has booked <span class="noti-title">room no 21.</span></p>
										<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="media"> <span class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('admin/assets/img/profiles/avatar-11.jpg')}}">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Aditi Regmi</span> has checked-out <span class="noti-title">room no 18.</span></p>
										<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="media"> <span class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('admin/assets/img/profiles/avatar-17.jpg')}}">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">for his booking</span></p>
										<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="media">
									<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('assets/img/profiles/avatar-13.jpg')}} ">
											</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">* Room no 101</span> is unavailiable
											<span class="noti-title">due to maintainance</span>
										</p>
										<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
			</div>
		</li> -->
		<li class="nav-item dropdown has-arrow">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src=" {{ URL::to('admin/assets/img/logo-hotel.png')}}" width="31" alt="Hotel XYZ"></span> </a>
			<div class="dropdown-menu">
				<div class="user-header">
					<div class="avatar avatar-sm"> <img src="{{ URL::to('admin/assets/img/logo-hotel.png')}} " alt="User Image" class="avatar-img rounded-circle"> </div>
					<div class="user-text">
						<h6>Hotel XYZ</h6>
						<p class="text-muted mb-0">Administrator</p>
					</div>
				</div>

				<a class="dropdown-item" href="{{ url('view_profile') }}">My Profile</a>
				<!-- <a class="dropdown-item" href="settings.html">Account Settings</a> -->
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<button type="submit" class="dropdown-item">Logout</button>
				</form>

			</div>
		</li>
	</ul>
	<div class="top-nav-search">
		<form action="">
			<input type="search" name="search" class="form-control form-control-sm" placeholder="Search here">
			<button class="btn" type="submit"><i class="fas fa-search"></i></button>
		</form>
	</div>
</div>