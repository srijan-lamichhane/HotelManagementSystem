<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">{{ \App\Greeting\Greetings::getNepaliGreeting(Auth::user()->name) }}! </h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card board1 fill">
						<div class="card-body">
							<div class="dash-widget-header">
								<div>
									<h3 class="card_widget_header">{{ sprintf('%03d', $lastBookingId) }}</h3>
									<h6 class="text-muted">Total Booking</h6>
								</div>
								<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
											<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
											<circle cx="8.5" cy="7" r="4"></circle>
											<line x1="20" y1="8" x2="20" y2="14"></line>
											<line x1="23" y1="11" x2="17" y2="11"></line>
										</svg></span> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card board1 fill">
						<div class="card-body">
							<div class="dash-widget-header">
								<div>
									<h3 class="card_widget_header">{{ sprintf('%03d', $lastRoomId) }}</h3>
									<h6 class="text-muted">Available Rooms</h6>
								</div>
								<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg></span> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card board1 fill">
						<div class="card-body">
							<div class="dash-widget-header">
								<div>
									<h3 class="card_widget_header">{{ sprintf('%02d', $lastEmpId) }}</h3>
									<h6 class="text-muted">Total Employees</h6>
								</div>
								<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
											</path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="12" y1="18" x2="12" y2="12"></line>
											<line x1="9" y1="15" x2="15" y2="15"></line>
										</svg></span> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card board1 fill">
						<div class="card-body">
							<div class="dash-widget-header">
								<div>
									<h3 class="card_widget_header">364</h3>
									<h6 class="text-muted">Collections</h6>
								</div>
								<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
											<circle cx="12" cy="12" r="10"></circle>
											<line x1="2" y1="12" x2="22" y2="12"></line>
											<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
											</path>
										</svg></span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">VISITORS</h4>
						</div>
						<div class="card-body">
							<div id="line-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">ROOMS BOOKED</h4>
						</div>
						<div class="card-body">
							<div id="donut-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 d-flex">
					<div class="card card-table flex-fill">
						<div class="card-header">
							<h4 class="card-title float-left mt-2">Booking</h4>
							<a href="{{ url('form/allbooking') }}" class="btn btn-primary float-right veiwbutton">View All</a>
						</div>



						<div class="row">
							<div class="col-sm-12">
								<div class="card card-table">
									<div class="card-body booking_card">
										<div class="table-responsive">
											<table class="datatable table table-stripped table table-hover table-center mb-0">
												<thead>
													<tr>
														<th class="datatable sortable" data-column="id">Booking ID</th>
														<th>Name</th>
														<th>Status</th>
														<th>Room Type</th>
														<th>Room Number</th>
														<th>Email ID</th>
														<th>Ph.Number</th>
													</tr>
												</thead>
												<tbody>

													@foreach($data as $key => $booking)
													@if($key < 5) <!-- Display only the first five records -->
														<tr>
															<td>BKG-{{ sprintf('%03d', $booking->id) }}</td>
															<td>{{ $booking->name }}</td>
															<td>
																<div class="actions">
																	<form action="{{ route('update-status', $booking->id) }}" method="post" class="status-form">
																		@csrf
																		<input type="hidden" name="status" value="{{ $booking->status ? 0 : 1 }}">
																		<button type="submit" class="btn btn-sm mr-2 @if($booking->status) bg-success-light @else bg-danger-light @endif">
																			@if($booking->status)
																			<i class="fa fa-check"></i> Active
																			@else
																			<i class="fa fa-times"></i> Inactive
																			@endif
																		</button>
																	</form>
																</div>
															</td>
															<td>{{ $booking->room_type }}</td>
															<td>{{ $booking->room_number }}</td>
															<td>{{ $booking->email_id }}</td>
															<td>{{ $booking->ph_number }}</td>
														</tr>
														@endif
														@endforeach

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

	</div>