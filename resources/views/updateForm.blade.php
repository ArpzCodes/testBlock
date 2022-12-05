<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
<form action="{{url('updateForm',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{$data->name}}" id="">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{$data->email}}">

        <input type="submit">
      

    </form>
    
</body>
</html>