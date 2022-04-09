<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send Email </title>
</head>
<body>
<br>
<form action="{{route('email')}}" method="POST" enctype="multipart/form-data">
@csrf 
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Enter mail body</span>
  </div>
  <input type="text" name="message" class="form-control" aria-label="message" aria-describedby="basic-addon1">
</div>
<button type="submit" class="btn btn-primary">Notify Me!</button>

</form>
</body>
</html>