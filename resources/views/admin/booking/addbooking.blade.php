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
                            <h3 class="page-title mt-5">Add Booking</h3>
                        </div>
                    </div>
                </div>

                <form action="{{ url('form/savebooking')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row formtype">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <select class="form-control @error('name') is-invalid @enderror" id="sel1" name="name" value="{{ old('name') }}">
                                            <option>Select</option>
                                            <option>Jennifer Robinson</option>
                                            <option>Terry Baker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select class="form-control  @error('name') is-invalid @enderror" id="sel2" name="sellist1">
                                            <option>Select</option>
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>Quad</option>
                                            <option>King</option>
                                            <option>Suite</option>
                                            <option>Villa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Total Members</label>
                                        <select class="form-control  @error('name') is-invalid @enderror" id="sel3" name="sellist1">
                                            <option>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control  @error('time') is-invalid @enderror" id="datetimepicker3" name="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Arrival Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  @error('name') is-invalid @enderror datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Depature Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  @error('name') is-invalid @enderror datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="usr">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="usr1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>File Upload</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
                </form>
            </div>
        </div>


    </div>


    @include('admin.script')

</body>

</html>