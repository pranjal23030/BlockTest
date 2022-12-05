<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
<a href="{{url('/create')}}"><button>Create another</button></a>
<table>
    <tr>
        <th>Student  Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th>Image</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->studname}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->fee}}</td>
            <td><img src="{{asset('storage/image/'.$student->image)}}"></td>
            <td><a href="{{url('/edit/'.$student->id)}}">Edit</a></td>
            <td><a href="{{url('/delete/'.$student->id)}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>
        </tr>
    @endforeach
</table>
</body>
</html>
