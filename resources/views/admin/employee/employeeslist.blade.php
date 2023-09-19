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

                                <h4 class="card-title float-left mt-2">Employee</h4>
                                <a href="{{url('form/addemployee')}}" class="btn btn-primary float-right veiwbutton">Add Employee</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-lg-12">


                    <form action="">
                            <div class="row formtype">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="empname or email" class="form-control" value="{{$search}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-block mt-0 search_button"> Search </button>
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
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Join Date</th>
                                                <th>role</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employee as $employee)
                                            <tr>
                                                <td>EMP-{{ sprintf('%03d', $employee->id) }}</td>
                                                <td>{{$employee->name}}</a> </td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phone}}</td>
                                                <td>{{$employee->address}}</td>
                                                <td>{{$employee->join_date}}</td>
                                                <td>{{$employee->role}}</td>
                                       
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{url ('update_emp',$employee->id)}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="{{url('delete_emp',$employee->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
                                <a class="btn btn-danger" href="{{url('delete_emp',$employee->id)}}">Delete</a>
                            </div>
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