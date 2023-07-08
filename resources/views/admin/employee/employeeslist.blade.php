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
                                <a href="add-employee.html" class="btn btn-primary float-right veiwbutton">Add Employee</a>
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
                                                <th>Name</th>
                                                <th>Employee ID</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Join Date</th>
                                                <th>role</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Albina Simonis</td>
                                                <td>Ma-0001</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7d6dbd5ded9d6c4dedad8d9dec4f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></td>
                                                <td>828-634-2744</td>
                                                <td>7 May 2015</td>
                                                <td>
                                                    <span class="custom-badge status-green">Manager</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cristina Groves</td>
                                                <td>SF-0001</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="680b1a011b1c0106090f1a071e0d1b280d10090518040d460b0705">[email&#160;protected]</a></td>
                                                <td>928-344-5176</td>
                                                <td>1 Jan 2013</td>
                                                <td>Staff</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mary Mericle</td>
                                                <td>SF-0003</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4825293a31252d3a212b242d082d30292538242d662b2725">[email&#160;protected]</a></td>
                                                <td>603-831-4983</td>
                                                <td>27 Dec 2017</td>
                                                <td>Accountant</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Haylie Feeney</td>
                                                <td>SF-0002</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f272e3623262a292a2a212a360f2a372e223f232a612c2022">[email&#160;protected]</a></td>
                                                <td>616-774-4962</td>
                                                <td>21 Apr 2017</td>
                                                <td>Room Maintainers</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zoe Butler</td>
                                                <td>SF-0001</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e24313b3c2b2a323b2c1e3b263f332e323b703d3133">[email&#160;protected]</a></td>
                                                <td>444-555-9999</td>
                                                <td>19 May 2012</td>
                                                <td>Receptionist</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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