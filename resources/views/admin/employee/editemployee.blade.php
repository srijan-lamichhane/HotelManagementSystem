<!DOCTYPE html>
<html lang="en">

<head>
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
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                            <h3 class="page-title mt-5">Edit Employee</h3>
                        </div>
                    </div>
                </div>


                <form method="POST" action="{{ route('update_emp_confirm', $employee->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row formtype">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required id="sel1" name="name" value="{{$employee->name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" required name="email" value="{{$employee->email}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" required name="phone" value="{{$employee->phone}}">
                                    </div>
                                </div>
                            

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control"  required name="address" value="{{$employee->address}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Join Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="join_date" value="{{$employee->join_date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>D.O.B</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="birth_date" value="{{$employee->birth_date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" required name="role" value="{{$employee->role}}">
                                            <option>Manager</option>
                                            <option selected>Staff</option>
                                            <option>Accountant</option>
                                            <option>Room Maintainer</option>
                                            <option>Receptionist</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit" name="submit" value="Save">Save</button>
                </form>
            </div>
        </div>

    </div>


    @include('admin.script')

</body>

</html>