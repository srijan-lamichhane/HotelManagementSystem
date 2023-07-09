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





                <form action="{{ url('form/savebooking')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row formtype">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="sel1" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select class="form-control  @error('room_type') is-invalid @enderror" id="sel2" name="room_type">
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
                                        <select class="form-control  @error('room_number') is-invalid @enderror" id="sel3" name="room_number">
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
                                        <label> Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control @error('date') is-invalid @enderror datepicker-ad" name="date">
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
                                        <label> Arrival Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control @error('date') is-invalid @enderror datepicker-ad" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Departure Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control @error('departure_date') is-invalid @enderror datepicker-ad" name="departure_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="text" class="form-control  @error('email_id') is-invalid @enderror" id="usr" name="email_id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control  @error('ph_number') is-invalid @enderror" id="usr1" name="ph_number">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>File Upload</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="Create Booking">Create Booking</button>
                </form>
            </div>
        </div>


    </div>


    @include('admin.script')

</body>

</html>