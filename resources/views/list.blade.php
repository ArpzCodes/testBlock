<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    List
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>

        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td><a href="{{url('update',$student->id)}}">Update</a></td>
            <td><a href="{{url('delete',$student->id)}}">Delete</a></td>
        </tr>
        @endforeach

    </table>

    <a href="/">Get Back ?</a>
</body>
</html>