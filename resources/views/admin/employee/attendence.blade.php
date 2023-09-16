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


        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="datatable-buttons" class="table table-hover table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                            <thead class="thead-dark">
							
                                    <tr>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="2">EmpID</th>
                                        <th data-priority="3">Name</th>
                                        <th data-priority="4">Attendance</th>

                                        <th data-priority="6">Time In</th>
                                        <th data-priority="7">Time Out</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($attendances as $attendance)

                                        <tr>
                                            <td>{{ $attendance->attendance_date }}</td>
                                            <td>{{ $attendance->emp_id }}</td>
                                            <td>{{ $attendance->employee->name }}</td>
                                            <td>{{ $attendance->attendance_time }}
                                                @if ($attendance->status == 1)
                                                    <span class="badge badge-success badge-pill float-right">On Time</span>
                                                @else
                                                    <span class="badge badge-danger badge-pill float-right">Late</span>
                                                @endif
                                            </td>

                                            <td>{{ $attendance->employee->schedules->first()->time_in }} </td>
                                            <td>{{ $attendance->employee->schedules->first()->time_out }}</td>
                                        </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    </div>


    @include('admin.script')
</body>

</html>