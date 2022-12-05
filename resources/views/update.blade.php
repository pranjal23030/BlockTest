<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="{{action([\App\Http\Controllers\MainController::class,'update'])}}">
    @csrf
    <input type="hidden" name="id" value="{{$student->id}}">
    <label for="">Student Name:</label>
    <input type="text" name="studname" value="{{$student->studname}}" required>
    <label for="">Course: </label>
    <input type="text" name="course" value="{{$student->course}}" required>
    <label for="">Fee: </label>
    <input type="number" name="fee" value="{{$student->fee}}" required>
    <input type="submit" value="Update">
</form>
</body>
</html>

