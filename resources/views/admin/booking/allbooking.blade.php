<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    @include('admin.css')

    <style>
        .btn.active {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        @include('admin.header')
        @include('admin.sidebar')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div id="popup-container">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="mt-5">
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif
                                </div>
                                <h4 class="card-title float-left mt-2">Appointments</h4>
                                <a href="{{url('form/addbooking')}}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body booking_card">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="datatable table table-stripped table table-hover table-center mb-0">Booking ID</th>
                                                <th>Name</th>
                                                <th>Room Type</th>
                                                <th>Room Number</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Arrival Date</th>
                                                <th>Depature Date</th>
                                                <th>Email ID</th>
                                                <th>Ph.Number</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($data as $data)
                                            <tr>
                                                <td>BKG-{{ sprintf('%03d', $data->id) }}</td>

                                                <td>{{$data->name}}</a> </td>
                                                <td>{{$data->room_type}}</td>
                                                <td>{{$data->room_number}}</td>
                                                <td>{{$data->date}}</td>
                                                <td>{{$data->time}}</td>
                                                <td>{{$data->arrival_date}}</td>
                                                <td>{{$data->departure_date}}</td>
                                                <td>{{$data->email_id}}</td>
                                                <td>{{$data->ph_number}}</td>
                                                <!-- <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">[email&#160;protected]</a></td> -->
                                                <td>{{$data->message}}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light mr-2 activeButton">Active</a>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{url ('update_record',$data->id)}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="{{url('delete_record',$data->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                    </div>
                                                </td>
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
            <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center"> <img src="{{URL::to('admin/assets/img/sent.png')}}" alt="" width="50" height="46">
                            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <a class="btn btn-danger" href="{{url('delete_record',$data->id)}}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')

    <script>
        $(document).ready(function() {
            $(".activeButton").click(function(e) {
                e.preventDefault();

                var $button = $(this);
                var isActive = $button.hasClass("active");

                if (isActive) {
                    $button.removeClass("active btn-danger").addClass("bg-success-light").text("Active");
                } else {
                    $button.addClass("active btn-danger").removeClass("bg-success-light").text("Inactive");
                }
            });
        });
    </script>


</body>

</html>