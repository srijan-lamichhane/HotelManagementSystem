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




                <form action="{{url ('form/billing')}}"method="post">
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
                                        <label>Room Type</label>
                                        <select class="form-control" required id="sel2" name="room_type">
                                            <option>Select</option>
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>triple</option>
                                            <option>single-AC</option>
                                            <option>double-AC</option>
                                            <option>triple-AC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Room number</label>
                                        <input type="number" class="form-control" required id="sel1" name="room_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>billing Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" required name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control datetimepicker3" required id="datetimepicker3" name="time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Arrival Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  datetimepicker" required name="arrival_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Departure Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control  datetimepicker" required name="departure_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>room/per day</label>
                                        <input type="text" class="form-control" required id="price" name="price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>no of stay days</label>
                                        <input type="text" class="form-control" required id="days" name="days">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TOTAL</label>
                                        <input type="text" class="form-control" required id="total" name="total">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>transaction type</label>
                                        <select class="form-control" required id="sel2" name="room_type">
                                            <option>cash</option>
                                            <option>cheque</option>
                                            <option>online</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>cheque/transaction no</label>
                                        <input type="text" class="form-control" required id="cheque/transaction no" name="cheque/transaction no">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="save bill">save bill</button>
                </form>
            </div>
        </div>


    </div>


    @include('admin.script')

</body>

</html>