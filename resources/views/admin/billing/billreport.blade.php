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

        .alert-delete {
            background-color: #f8d7da;
            /* Light red background color */
            color: #721c24;
            /* Darker red text color */
            border-color: #f5c6cb;
            /* Border color for the alert */
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
                                    @php
                                    $alertClass = session('alert-class', 'alert-success'); // Default to green
                                    if ($alertClass === 'alert-delete') {
                                    $alertClass = 'alert-danger'; // Change to red for delete messages
                                    }
                                    @endphp
                                    <div class="alert {{ $alertClass }}">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                </div>



                                <h4 class="card-title float-left mt-2">Billing Details</h4>
                                <a href="{{url('/billing')}}" class="btn btn-primary float-right veiwbutton ">Add Billing</a>
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
                                                <th class="datatable sortable" data-column="id">Billing No.</th>
                                                <th>Name</th>
                                                <th>Room Type</th>
                                                <th>Room Number</th>
                                                <th>Bill Date</th>
                                                <th>Time</th>
                                                <th>Stay Days</th>
                                                <th>price</th>
                                                <th>Total</th>
                                                <th>Payment method</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($data as $data)
                                            <tr>
                                                <td>BILL{{ sprintf('%03d', $data->id) }}</td>

                                                <td>{{$data->name}}</a> </td>




                                                <td>{{$data->room_type}}</td>
                                                <td>{{$data->room_number}}</td>
                                                <td>{{$data->billing_date}}</td>
                                                <td>{{$data->billing_time}}</td>
                                                <td>{{$data->no_of_days_stay}}</td>
                                                <td>{{$data->price}}</td>
                                                <td>{{$data->total}}</td>
                                                <td>{{$data->transaction_type}}</td>


                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{url ('update_billrecord',$data->id)}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="{{url('delete_billrecord',$data->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
                                <a class="btn btn-danger" href="{{url('delete_billrecord',$data->id)}}">Delete</a>
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