<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    Create
    <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="">

        <label for="email">Email</label>
        <input type="email" name="email">

        <input type="submit">
      

    </form>

    <a href="/">Get Back ?</a>
    
</body>
</html>