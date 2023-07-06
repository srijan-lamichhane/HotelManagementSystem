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
                                <h4 class="card-title float-left mt-2">ADD-ROOMS</h4>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Laravel HTML form for room information -->
                <form method="POST" action="/add_rooms" class="my-4">
                    @csrf
                    

                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select name="room_type" id="room_type" class="form-control" required style="max-width: 300px;">
                            <option value="s">Single</option>
                            <option value="d">Double</option>
                            <option value="s-AC">Single-AC</option>
                            <option value="t">Triple</option>
                            <option value="d-AC">Double-AC</option>
                            <option value="t-AC">Triple-AC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room_number">Room Number</label>
                        <input type="text" name="room_number" id="room_number" class="form-control"required style="max-width: 300px;">
                    </div>

                    <div class="form-group">
                        <label for="floor">Floor</label>
                        <input type="text" name="floor" id="floor" class="form-control" required style="max-width: 300px;">
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
