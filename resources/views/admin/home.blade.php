<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Management Dashboard</title>

    @include('admin.css')
</head>

<body>
	<div class="main-wrapper">
    @include('admin.header')

    @include('admin.sidebar')
    @include('admin.body')



	</div>

    <!-- script  -->
    @include('admin.script')
</body>

</html>