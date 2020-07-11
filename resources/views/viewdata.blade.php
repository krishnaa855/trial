<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<br>
<div class="container">
    <div class="card">   
    <div class="card-heading"  style="background:crimson;font-size:30px;">Data Inside Database
    <a href="{{url('model')}}"> <button class="btn btn-primary" style="float:right;margin:4px 10px;font-size:20px;" >+</button></a>
    </div>
    
  <table class="table">
    <thead>
      <tr>
      <?php 
      $a=1;
      ?>
        <th>SN</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Image</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
      <tr>
        <td>{{$a}}</td>
        <?php 
        $a=$a+1;
        ?>
        <td>{{$data->name}}</td>
        <td>{{$data->number}}</td>
        <td>{{$data->image}}</td>
       <td><a href="{{url('edit/'.$data->id)}}"> <button class="btn-success"> Edit</button></a>
       <a href="{{url('delete/'.$data->id)}}"> <button class="btn-danger">Delete</button></a>
       </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  
  </div>  
</div>

</body>
</html>