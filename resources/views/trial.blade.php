<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="savedata" enctype="multipart/form-data" >

@csrf
<input type="text" name="name"> :name<br><br>
<input type="file" name="img"> <br>

<button type="submit">submit</button>
</form>
</body>
</html>