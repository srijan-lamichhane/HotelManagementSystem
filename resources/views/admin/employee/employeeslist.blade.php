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
                                <h4 class="card-title float-left mt-2">Employee</h4>
                                <a href="{{url('form/addemployee')}}" class="btn btn-primary float-right veiwbutton">Add Employee</a>
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
                                        <label>Employee ID</label>
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee Name</label>
                                        <input type="text" class="form-control" id="usr1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" id="sel1" name="sellist1">
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>Staff</option>
                                            <option>Accountant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Join Date</th>
                                                <th>role</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($employee as $employee)
                                                
                                                <td>{{$employee->emp_id}}</td>
                                                <td>{{$employee->name}}</a> </td>
                                                <td>{{$employee->email_id}}</td>
                                                <td>{{$employee->ph_number}}</td>
                                                <td>{{$employee->join_date}}</td>
                                                <td>{{$employee->role}}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light mr-2 activeButton">Active</a>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{url ('update_record',$employee->id)}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="{{url('delete_record',$employee->id)}}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
                                <a class="btn btn-danger" href="{{url('delete_record',$employee->id)}}">Delete</a>
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