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
                            <h3 class="page-title mt-5">Add Leave</h3>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ url('form/saveleave') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row formtype">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>EMP_ID</label>
                                        <input type="text" class="form-control" required id="sel1" name="e_id">
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required id="sel1" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Leave Type</label>
                                        <select class="form-control" required id="sel1" name="leave_type">
                                            <option value=""> Select </option>
                                            <option value="Casual Leave"> Casual Leave </option>
                                            <option value="Medical leave"> Medical Leave </option>
                                            <option value="loss of pay"> Loss of Pay </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="from">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="to">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Number Of Days</label>
                                        <input type="number" class="form-control" required id="usr" name="days">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Remaining Days</label>
                                        <input type="number" class="form-control" required id="usr1">
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Leave Reason</label>
                                        <textarea class="form-control" required rows="5" id="comment" name="reason"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="send leave request">Send Leave Request</button>
                </form>
            </div>
        </div>


    </div>


    @include('admin.script')

</body>

</html>