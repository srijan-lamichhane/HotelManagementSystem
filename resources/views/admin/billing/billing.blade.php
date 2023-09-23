<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <link rel="icon" type="image/png" sizes="32*32" href="images\billing.png">
    <link rel="stylesheet" type="text/css" href="billing.css">
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
                                <h4 class="card-title float-left mt-2">Billing</h4>
                            </div>
                        </div>
                    </div>
                </div>



                <form action="{{url ('/savebill')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="name" value="{{ $latestBooking->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Room Type:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="room_type" value="{{ $latestBooking->room_type }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Room Number:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="room_number" value="{{ $latestBooking->room_number }}">
                                </div>
                            </div>






                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Billing Date:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datetimepicker" required name="billing_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Time:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datetimepicker3" required id="datetimepicker3" name="billing_time">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. of Stay Days:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" required id="no_of_days_stay" name="no_of_days_stay" value="{{ isset($stayDays) ? $stayDays : '' }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Price of Room:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" required id="price" name="price">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Amount to be paid (in Rs):</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" required id="total" name="total" readonly>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Payment Method: </label>
                                <div class="col-sm-9">
                                    <select class="form-control" required name="transaction_type">
                                        <option>cheque</option>
                                        <option>cash</option>
                                        <option>online transaction</option>
                                    </select>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="record bill">Record Bill</button>
                </form>


            </div>
        </div>
    </div>
    @include('admin.script')

    <script>
        $(document).ready(function() {
            $('#no_of_days_stay, #price').on('input', function() {
                calculateTotal();
            });

            function calculateTotal() {
                // Get the values of no_of_days_stay and price
                var no_of_days_stay = $('#no_of_days_stay').val();
                var price = $('#price').val();

                // Check if both values are present and numeric
                if (!isNaN(no_of_days_stay) && !isNaN(price)) {
                    var total = parseFloat(no_of_days_stay) * parseFloat(price);
                    $('#total').val(total.toFixed(2)); // Set the total with 2 decimal places
                } else {
                    $('#total').val(''); // Clear the total if input is invalid
                }
            }
        });
    </script>
</body>

</html>