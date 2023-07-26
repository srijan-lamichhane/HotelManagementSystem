<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    @include('admin.css')
    <style>
        /* CSS styles */
        body {
            margin: 0;
            padding: 0;
        }
        .page-wrapper {
            margin-left: 0 !important;
            /* Remove the left margin */
        }
        .content.container-fluid {
            padding-top: 0;
            height: 100vh;
            /* Set the height to fill the viewport */
        }
    </style>

<body>
    @include('admin.header')
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header mt-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                                <li class="breadcrumb-item active">Information</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#"> <img class="rounded-circle" alt="User Image" src="{{ URL::to('admin/assets/img/profiles/avatar-03.jpg')}}"> </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-3">{{Auth::user()->name}}</h4>
                                    <h6 class="text-muted mt-1">{{Auth::user()->role}}</h6>
                                    <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i> {{Auth::user()->address}}</div>
                                    <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="col-auto profile-btn"> <a href="" class="btn btn-primary">
                                        Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a> </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">
                            <div class="tab-pane fade show active" id="per_details_tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                </h5>
                                                <div class="row mt-5">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{Auth::user()->name}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                                    <p class="col-sm-9">{{Auth::user()->birth_date}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                                    <p class="col-sm-9">{{Auth::user()->email}}</p>

                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-9">{{Auth::user()->phone}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                                    <p class="col-sm-9 mb-0">{{Auth::user()->address}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                </h5>
                                                <div class="row mt-5">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{Auth::user()->name}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                                    <p class="col-sm-9">{{Auth::user()->birth_date}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                                    <p class="col-sm-9">{{Auth::user()->email}}</p>

                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-9">{{Auth::user()->phone}}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                                    <p class="col-sm-9 mb-0">{{Auth::user()->address}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- <div id="password_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>

</html>