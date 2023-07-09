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
								<h4 class="card-title float-left mt-2">Attendance Sheet</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Employee Name</label>
										<input class="form-control" type="text" value="BKG-0001">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Select Month</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select</option>
											<option>Jan</option>
											<option>Feb</option>
											<option>Mar</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Select Year</label>
										<select class="form-control" id="sel2" name="sellist1">
											<option>Select</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Search</label> <a href="#"
											class="btn btn-success btn-block mt-0 search_button"> Search </a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive"
							style="box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);">
							<table class="table table-striped custom-table mb-0">
								<thead>
									<tr>
										<th>Employee</th>
										<th>1</th>
										<th>2</th>
										<th>3</th>
										<th>4</th>
										<th>5</th>
										<th>6</th>
										<th>7</th>
										<th>8</th>
										<th>9</th>
										<th>10</th>
										<th>11</th>
										<th>12</th>
										<th>13</th>
										<th>14</th>
										<th>15</th>
										<th>16</th>
										<th>17</th>
										<th>18</th>
										<th>19</th>
										<th>20</th>
										<th>22</th>
										<th>23</th>
										<th>24</th>
										<th>25</th>
										<th>26</th>
										<th>27</th>
										<th>28</th>
										<th>29</th>
										<th>30</th>
										<th>31</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Albina Simonis</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td>
											<div class="half-day"><span class="first-off"><i
														class="fa fa-check text-success"></i></span> <span
													class="first-off"><i class="fas fa-times text-danger"></i></span>
											</div>
										</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td>
											<div class="half-day"><span class="first-off"><i
														class="fa fa-close text-danger"></i></span> <span
													class="first-off"><i class="fas fa-check text-success"></i></span>
											</div>
										</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Cristina Groves</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Haylie Feeney</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Mary Mericle</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Zoe Butler</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Cristina Groves</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Marie Wells</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Henry Daniels</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Mark Hunter</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
									<tr>
										<td>Michael Sullivan</td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-times text-danger"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
										<td><i class="fas fa-check text-success"></i> </td>
									</tr>
								</tbody>
							</table>
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