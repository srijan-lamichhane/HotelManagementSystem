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
                <div class="row">
                    <div class="col-sm-12">


                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Attendance Sheet Report
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-md table-hover" id="printTable">
                                        <thead class="thead-dark">
                                            <tr>

                                                <th>Employee</th>
                                                <th>Position</th>
                                                <!-- <th>ID</th> -->

                                                @php
                                                $today = today();
                                                $dates = [];

                                                for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
                                                    $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                                    }

                                                    @endphp
                                                    @foreach ($dates as $date)
                                                    <th style="">


                                                        {{ $date }}

                                                    </th>


                                                    @endforeach

                                            </tr>
                                        </thead>

                                        <tbody>





                                            @foreach ($employees as $employee)

                                            <input type="hidden" name="emp_id" value="{{ $employee->id }}">

                                            <tr>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->role }}</td>
                                                <!-- <td>{{ $employee->id }}</td> -->






                                                @for ($i = 1; $i < $today->daysInMonth + 1; ++$i)


                                                    @php

                                                    $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');

                                                    $check_attd = \App\Models\Attendence::query()
                                                    ->where('emp_id', $employee->id)
                                                    ->where('attendence_date', $date_picker)
                                                    ->first();

                                                    $check_leave = \App\Models\Leave::query()
                                                    ->where('emp_id', $employee->id)
                                                    ->where('leave_date', $date_picker)
                                                    ->first();

                                                    @endphp
                                                    <td>

                                                        <div class="form-check form-check-inline ">

                                                            @if (isset($check_attd))
                                                            @if ($check_attd->status==1)
                                                            <i class="fa fa-check text-success"></i>
                                                            @else
                                                            <i class="fa fa-check text-danger"></i>
                                                            @endif

                                                            @else
                                                            <i class="fas fa-times text-danger"></i>
                                                            @endif
                                                        </div>
                                                        <div class="form-check form-check-inline">

                                                            @if (isset($check_leave))
                                                            @if ($check_leave->status==1)
                                                            <i class="fa fa-check text-success"></i>
                                                            @else
                                                            <i class="fa fa-check text-danger"></i>
                                                            @endif

                                                            @else
                                                            <i class="fas fa-times text-danger"></i>
                                                            @endif


                                                        </div>

                                                    </td>

                                                    @endfor
                                            </tr>
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


    @include('admin.script')
</body>

</html>