<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" style="width:700px">
  <h2>Apply For Vission Ambassador</h2>
  <br>
  <br>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" name="fname" class="form-control" id="usr">
    </div>

  <input type="file" >
  <br>
  <input type="submit" name="sub" class="btn btn-primary" value="SUBMIT">

</div>
</form>
</body>
</html>
