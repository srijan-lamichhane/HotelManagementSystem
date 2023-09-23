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

				<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="{{url ('employee/list')}}">Employees List </a></li>
						<li><a href="{{url ('form/addemployee')}}">Add Employee </a></li>
					</ul>
				</li>

				<li> <a href="{{url ('/calander')}}"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>



				<li> <a href="{{url ('/check')}}"><i class="fas fa-file-alt"></i> <span> Attendence sheet </span></a></li>
				<li> <a href="{{url ('/sheet-report')}}"><i class="fas fa-file-excel"></i> <span> Sheet Report </span></a></li>


				<li> <a href="{{url ('/billing')}}"><i class="	fas fa-money-bill-alt"></i> <span> Billing </span></a>
				<li> <a href="{{url ('/billing_report')}}"><i class="fe fe-table"></i> <span> Bill Info </span></a>
				</li>

			</ul>
		</div>
	</div>
</div>