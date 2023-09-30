<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	@include('admin.css')

</head>

<body>

	<div class="main-wrapper">

		@include('admin.header')
		@include('admin.sidebar')


		<div class="page-wrapper">
			<div class="content container-fluid">


				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">

								@if(session()->has('message'))
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
									{{session()->get('message')}}
								</div>
								@endif

								<h4 class="card-title float-left mt-2">Calendar</h4>
								<button type="button" class="btn btn-primary float-right veiwbutton" data-toggle="modal" data-target="#add_event1">Add Event</button>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-12 col-md-8">
					<div class="card">
						<div class="card-body">
							<div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>


			<div id="add_event1" class="modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Event</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
						</div>
						<div class="modal-body">
							<form action="{{ url('/add-event') }}" method="POST">
								@csrf
								<div class="form-group">
									<label>Event Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="eventNameInput" name="event_name">
								</div>
								<div class="form-group">
									<label>Event Date <span class="text-danger">*</span></label>
									<div class="cal-icon">
										<input class="form-control datetimepicker" type="text" id="eventDateInput" name="event_date">
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Add Event Modal -->
			<div class="modal fade none-border" id="addEventModal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Event</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">


							<form action="{{ url('/add-event') }}" method="POST">
								@csrf
								<div class="form-group">
									<label>Event Name</label>
									<input class="form-control" type="text" id="eventNameInput">
								</div>
								<div class="form-group">
									<label>Event Date</label>
									<input class="form-control" type="text" id="eventDateInput">
								</div>
							</form>


						</div>
						<div class="modal-footer justify-content-center">
							<button type="button" class="btn btn-success save-event submit-btn" id="saveEventBtn">Create event</button>
							<button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="add_new_event">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Category</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">

							<form>
								<div class="form-group">
									<label>Category Name</label>
									<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
								</div>
								<div class="form-group mb-0">
									<label>Choose Category Color</label>
									<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
										<option value="success">Success</option>
										<option value="danger">Danger</option>
										<option value="info">Info</option>
										<option value="primary">Primary</option>
										<option value="warning">Warning</option>
										<option value="inverse">Inverse</option>
									</select>
								</div>
								<div class="submit-section">
									<button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="add_event" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content modal-md">
					<div class="modal-header">
						<h4 class="modal-title">Add Event</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">


						<form action="{{ url('/add-event') }}" method="POST">
							@csrf
							<div class="form-group">
								<label>Event Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text" id="eventNameInput">
							</div>
							<div class="form-group">
								<label>Event Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text" id="eventDateInput">
								</div>
							</div>
							<div class="m-t-20 text-center">
								<button class="btn btn-primary submit-btn">Create Event</button>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>



	@include('admin.script')

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');

			var calendar = new FullCalendar.Calendar(calendarEl, {
				plugins: ['dayGrid', 'timeGrid', 'list', 'interaction'],
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
				},
				defaultDate: Date.now(),
				navLinks: true,
				editable: true,	
				eventLimit: true,
				events: [],
				dateClick: function(info) {
					// 'info' contains information about the clicked date
					var clickedDate = info.dateStr;

					// Set the clicked date in the modal
					document.getElementById('eventDateInput').value = clickedDate;

					// Show the 'Add Event' modal
					$('#addEventModal').modal('show');
				}
			});

			calendar.render();

			// Handle the "Create event" button click in the modal
			document.getElementById('saveEventBtn').addEventListener('click', function() {
				var eventName = document.getElementById('eventNameInput').value;
				var eventDate = document.getElementById('eventDateInput').value;

				// Add your logic to create the event with 'eventName' and 'eventDate'
				// You can use FullCalendar's API to add events
				calendar.addEvent({
					title: eventName,
					start: eventDate,
					allDay: true // All events are set as all-day in this example
				});

				// Log the events array
				console.log(calendar.getEvents());

				// Close the modal
				$('#addEventModal').modal('hide');
			});
		});
	</script>


</body>

</html>