<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{$t}} {{$name}}
<form method="post" action="user">

@csrf
<input type="text" name="name"> :name<br><br>
<input type="file" name="img"> <br>

<button type="submit">submit</button>
</form>
</body>
</html>