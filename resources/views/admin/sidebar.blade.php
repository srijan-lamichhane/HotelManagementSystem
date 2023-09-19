<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="active"> <a href="{{url('redirect')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
				<li class="list-divider"></li>
				<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{url ('form/allbooking')}}"> All Booking </a></li>

						<li><a href="{{url ('form/addbooking')}}"> Add Booking </a></li>
					</ul>
				</li>
				<li class="menu"> <a href="{{url ('form/customers')}}"><i class="fas fa-user"></i> <span> Customers </span> </a>

				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{url ('/all_rooms')}}">All Rooms </a></li>
						<li><a href="{{url ('/add_rooms')}}"> Add Rooms </a></li>
					</ul>
				</li>
				<!-- <li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
								<li class="submenu"> <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										<li><a href="voice-call.html"> Voice Call </a></li>
										<li><a href="video-call.html"> Video Call </a></li>
										<li><a href="incoming-call.html"> Incoming Call </a></li>
									</ul>
								</li>
								<li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
									<ul class="submenu_class" style="display: none;">
										<li><a href="compose.html">Compose Mail </a></li>
										<li><a href="inbox.html"> Inbox </a></li>
										<li><a href="mail-veiw.html"> Mail Veiw </a></li>
									</ul>
								</li>
							</ul>
						</li> -->
				<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{url ('employee/list')}}">Employees List </a></li>
						<li><a href="{{url ('form/addemployee')}}">Add Employee </a></li>
						<li><a href="{{url ('employee/leave')}}">Leaves </a></li>
						<li><a href="{{url ('form/addleave')}}">AddLeave</a></li>

					</ul>
				</li>
				<!-- <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.html">Invoices </a></li>
								<li><a href="payments.html">Payments </a></li>
								<li><a href="expenses.html">Expenses </a></li>
								<li><a href="taxes.html">Taxes </a></li>
								<li><a href="provident-fund.html">Provident Fund </a></li>
							</ul>
						</li> -->
				<!-- <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="salary.html">Employee Salary </a></li>
								<li><a href="salary-veiw.html">Payslip </a></li>
							</ul>
						</li> -->
				<li> <a href="{{url ('/calander')}}"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
				<!-- <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="blog.html">Blog </a></li>
								<li><a href="blog-details.html">Blog Veiw </a></li>
								<li><a href="add-blog.html">Add Blog </a></li>
								<li><a href="edit-blog.html">Edit Blog </a></li>
							</ul>
						</li> -->
				<!-- <li> <a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a> </li> -->
				<!-- <li> <a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a> </li> -->



				<li> <a href="{{url ('/check')}}"><i class="bi bi-file-earmark-spreadsheet"></i> <span> Attendence sheet </span></a></li>
				<li> <a href="{{url ('/sheet-report')}}"><i class="fas fa-file"></i> <span> Sheet Report </span></a></li>
				

				<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Billing </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="expense-reports.html">Expense Report </a></li>
						<li><a href="invoice-reports.html">Invoice Report </a></li>
					</ul>
				</li>
				<!-- <li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
						<li class="list-divider"></li>
						<li class="menu-title mt-3"> <span>UI ELEMENTS</span> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="uikit.html">UI Kit </a></li>
								<li><a href="typography.html">Typography </a></li>
								<li><a href="tabs.html">Tabs </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="form-basic-inputs.html">Basic Input </a></li>
								<li><a href="form-input-groups.html">Input Groups </a></li>
								<li><a href="form-horizontal.html">Horizontal Form </a></li>
								<li><a href="form-vertical.html">Vertical Form </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="tables-basic.html">Basic Table </a></li>
								<li><a href="tables-datatables.html">Data Table </a></li>
							</ul>
						</li>
						<li class="list-divider"></li>
						<li class="menu-title mt-3"> <span>EXTRAS</span> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="login.html">Login </a></li>
								<li><a href="register.html">Register </a></li>
								<li><a href="forgot-password.html">Forgot Password </a></li>
								<li><a href="change-password.html">Change Password </a></li>
								<li><a href="lock-screen.html">Lockscreen </a></li>
								<li><a href="profile.html">Profile </a></li>
								<li><a href="gallery.html">Gallery </a></li>
								<li><a href="error-404.html">404 Error </a></li>
								<li><a href="error-500.html">500 Error </a></li>
								<li><a href="blank-page.html">Blank Page </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="">Level 1 </a></li>
								<li><a href="">Level 2 </a></li>
							</ul>
						</li> -->
			</ul>
		</div>
	</div>
</div>