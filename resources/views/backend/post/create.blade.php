<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="title" placeholder="Tieu de">
    <input type="text" name="content" placeholder="Noi dung">
    <input type="text" name="user_id" placeholder="ID user" value="1">
    <hr>
    <h3>Danh sach the loai</h3>
    @foreach($categories as $category)
        <input type="checkbox" value="{{$category->id}}"> {{$category->name}}
        <br>
    @endforeach
</form>
</body>
</html>
