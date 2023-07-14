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
                                <h4 class="card-title float-left mt-2">Add Booking</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ url('form/saveemployee')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row formtype">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required id="sel1" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" required id="usr" name="email_id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" required id="usr1" name="ph_number">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Join Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="join_date">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role">
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
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="Create Employee">Create Employee</button>
                </form>
            </div>
        </div>


    </div>


    @include('admin.script')

</body>

</html>