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
                            <h3 class="page-title mt-5">Edit Booking</h3>
                        </div>
                    </div>
                </div>


                <form method="POST" action="{{ route('update_data_confirm', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="row formtype">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required id="sel1" name="name" value="{{$data -> name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select class="form-control" required id="sel2" name="room_type" value="{{ $data -> room_type}}">
                                            <option>Normal Room</option>
                                            <option>Video Room</option>
                                            <option>DOubledBed Room</option>
                                            <option>TripleBed Room</option>
                                            <option>AC Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Room number</label>
                                        <input type="number" class="form-control" required id="sel1" name="room_number" value="{{ $data -> room_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="date" value="{{ $data -> date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control datetimepicker3" required id="datetimepicker3" name="time" value="{{ $data -> time}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Arrival Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  datetimepicker" required name="arrival_date" value="{{ $data -> arrival_date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Departure Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  datetimepicker" required name="departure_date" value="{{ $data -> departure_date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" required id="usr" name="email_id" value="{{ $data -> email_id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" required id="usr1" name="ph_number" value="{{ $data -> ph_number}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" rows="5" id="comment" name="message">{{ $data -> message}}</textarea>
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