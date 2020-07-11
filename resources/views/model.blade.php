<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
   <div class="container" >
   <div class="jumbotron">
<form action="submit" method="POST" enctype="multipart/form-data">
@if($errors->any())
<div style="color:brown;">
<ul>
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
</ul>
</div>
@endif
@csrf
<div class="form-group">Fill all the required field</div>
  <div class="form-group">
    <label for="exampleInputName">Name*</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">

  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Phone</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="number">
  </div>

  <div class="form-group">
    <label for="exampleInputNumber">Photo</label>
    <input type="file" class="form-control" id="exampleInputNumber" name="img">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>