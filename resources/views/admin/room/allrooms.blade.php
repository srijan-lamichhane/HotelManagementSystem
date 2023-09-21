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

                                <h4 class="card-title float-left mt-2">ROOMS</h4>
                                <a href="{{url('form/allrooms')}}" class="btn btn-primary float-right veiwbutton ">Add Rooms</a>
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
                                                <th>Room NO</th>

                                                <th>Room Type</th>
                                                <th>Floor</th>
                                                <th>price</th>
                                                <th>Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($addrooms as $addroom)
                                            <tr>
                                                <td>{{$addroom->room_number}}</td>

                                                <td>{{$addroom->room_type}}</a> </td>
                                                <td>{{$addroom->floor}}</td>
                                                <td>{{$addroom->price}}</td>



                                                <td>
                                                    <div class="actions">
                                                        <form action="{{ route('update-roomstatus', $addroom->id) }}" method="post" class="status-form">
                                                            @csrf
                                                            <input type="hidden" name="status" value="{{ $addroom->status ? 0 : 1 }}">
                                                            <button type="submit" class="btn btn-sm mr-2 @if($addroom->status) bg-success-light @else bg-danger-light @endif">
                                                                @if($addroom->status)
                                                                <i class="fa fa-check"></i> Active
                                                                @else
                                                                <i class="fa fa-times"></i> Inactive
                                                                @endif
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>



                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{url ('/editrooms')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="{{url('delete_record',$addroom->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
                                <a class="btn btn-danger" href="{{url('delete_record1',$addroom->id)}}">Delete</a>
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
                    $button.removeClass("active btn-danger").addClass("bg-success-light");
                    $button.html('<i class="fa fa-check"></i> Active');
                } else {
                    $button.addClass("active btn-danger").removeClass("bg-success-light");
                    $button.html('<i class="fa fa-times"></i> Inactive');
                }
            });
        });
    </script>


</body>

</html>