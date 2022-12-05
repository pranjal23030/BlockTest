<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<a href="{{url('/list')}}"><button>See List</button></a>
<form enctype="multipart/form-data" method="post" action="{{action([\App\Http\Controllers\MainController::class,'store'])}}">
    @csrf
    <label for="">Student Name:</label>
    <input type="text" name="studname" required>
    <label for="">Course</label>
    <input type="text" name="course" required>
    <label for="">Fee:</label>
    <input type="number" name="fee" required>
    <label for="">Image:</label>
    <input type="file" name="image" required>
    <input type="submit">
</form>
</body>
</html>


