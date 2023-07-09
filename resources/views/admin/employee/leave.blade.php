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
								<h4 class="card-title float-left mt-2">Leave Request</h4>
								<a href="add-leave.html" class="btn btn-primary float-right veiwbutton">Add Leave</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Empployee Name</label>
										<input class="form-control" type="text" value="BKG-0001">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Leave Type</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select</option>
											<option>Casual Leave</option>
											<option>Medical Leave</option>
											<option>Loss Of Pay</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Leave Status</label>
										<select class="form-control" id="sel2" name="sellist1">
											<option>Select</option>
											<option>Pending</option>
											<option>Approved</option>
											<option>Rejected</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>From</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>To</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Search</label>
										<a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a>

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-stripped">
										<thead>
											<tr>
												<th>Employee</th>
												<th>Leave Type</th>
												<th>From</th>
												<th>To</th>
												<th>No Of Days</th>
												<th>Reason</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Haylie Feeney</td>
												<td>Casual Leave</td>
												<td>13 May 2018</td>
												<td>13 July 2018</td>
												<td>2 days</td>
												<td>Not feeling well</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-leave.html"><i
																	class="fas fa-pencil-alt m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal"
																data-target="#delete_asset"><i
																	class="fas fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>Haylie Feeney</td>
												<td>Casual Leave</td>
												<td>13 May 2018</td>
												<td>13 July 2018</td>
												<td>2 days</td>
												<td>Not feeling well</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-leave.html"><i
																	class="fas fa-pencil-alt m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal"
																data-target="#delete_asset"><i
																	class="fas fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>Haylie Feeney</td>
												<td>Casual Leave</td>
												<td>13 May 2018</td>
												<td>13 July 2018</td>
												<td>2 days</td>
												<td>Not feeling well</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle"
															data-toggle="dropdown" aria-expanded="false"><i
																class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-leave.html"><i
																	class="fas fa-pencil-alt m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal"
																data-target="#delete_asset"><i
																	class="fas fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>


    @include('admin.script')
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'

            });
        });
    </script>
</body>

</html>