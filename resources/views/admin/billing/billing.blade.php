<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <link rel="icon" type="image/png" sizes="32*32" href="images\billing.png">
    <link rel="stylesheet" type="text/css" href="billing.css">
    <script type="text/javascript" src="timer.js">
    </script>
    <script type="text/javascript" src="calculate.js">
    </script>
    <script src="jquery-3.3.1.js">
    </script>
    <style type="text/css">
        #home {
            position: fixed;
            top: 0;
            left: 0;
            margin-left: 20px;
            margin-top: 20px;

        }

        #homeimg {
            height: 80px;
            width: 80px;
            float: left;
            position: fixed;
            z-index: 1;


        }
    </style>
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
                            </div>
                        </div>




                        <form action="{{url ('/savebill')}}" method="post">
                            @csrf
                            <legend style="font-family: monospace;">
                                BILLING
                            </legend>
                            <table>
                                <tr>
                                    <td>
                                        <label>BILLING NO:</label>
                                    </td>
                                    <td><input type="text" name="billing_no" width="30" maxlength="25" id="t2" onfocus="f2()" onblur="f0()">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>NAME:</label></td>
                                    <td><input type="text" name="name" placeholder="NAME" width="30" maxlength="25" id="t1" onfocus="f1()" onblur="f0()">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>ROOM TYPE:</label>
                                    </td>
                                    <td>
                                        <select class="form-control" required id="sel2" name="room_type" width="30" maxlength="25" id="t2" onfocus="f2()" onblur="f0()">
                                            <option>Select</option>
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>triple</option>
                                            <option>single-AC</option>
                                            <option>double-AC</option>
                                            <option>triple-AC</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>ROOM NUMBER:</label></td>
                                    <td>
                                        <input type="number" class="form-control" required id="sel1" name="room_number">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label> BILLING DATE:</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control  datetimepicker" required name="billing_date">
                                <tr>
                                    <td>
                                        <label>TIME:</label>
                                    </td>
                                    <td>

                                        <input type="text" class="form-control datetimepicker3" required id="datetimepicker3" name="time">
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>CHECK IN DATA:</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control  datetimepicker" required name="arrival_date">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>CHECK OUT DATE:</label>
                                    <td>
                                        <input type="text" class="form-control  datetimepicker" required name="departure_date">
                                    </td>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label>PRICE OF ROOM:</label>
                                    </td>
                                    <td><input type="text" name="price"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>NO OF STAY DAYS:</label>
                                    </td>
                                    <td><input type="text" name="no_of_days_stay"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>AMOUNT TO BE PAID(IN Rs.):</label>
                                    </td>
                                    <td><input type="text" name="total"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>PAYMENT METHOD</label>
                                    </td>
                                    <td>
                                        <select class="form-control" required id="sel2" name="transaction_type">
                                            <option>cheque</option>
                                            <option>cash</option>
                                            <option>online transaction</option>

                                        </select>
                                    </td>
                                </tr><br>
                                <tr>
                                    <td>
                                        <label>CHEQUE/TRANSACTION NO:</label>
                                    </td>
                                    <td><input type="text" name="transaction_no">
                                    </td>
                                </tr>

                            </table>

                            <button type="submit" class="btn btn-primary buttonedit1" name="submit" value="record bill">record bill</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('admin.script')
</body>

</html>