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

                            
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif
                              
                                <h4 class="card-title float-left mt-2">ADD ROOMS</h4>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Laravel HTML form for room information -->
                <form method="POST" action="/save_rooms" class="my-4">
                    @csrf
                    

                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select name="room_type" id="room_type" class="form-control" required style="max-width: 300px;">
                            <option>Normal Room</option>
                            <option>Video Room</option>
                            <option>DOubledBed Room</option>
                            <option>Special Room</option>
                            <option>AC Room</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room_number">Room Number</label>
                        <input type="text" name="room_number" id="room_number" class="form-control"required style="max-width: 300px;">
                    </div>

                    <div class="form-group">
                        <label for="floor">Floor</label>
                        <input type="number" name="floor" id="floor" class="form-control" required style="max-width: 300px;">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" required style="max-width: 300px;" >
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>

</html>
