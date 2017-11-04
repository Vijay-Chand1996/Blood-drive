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
<?php
if(isset($_POST['sub']))
{
  $fname=$_POST['fname'];
  $fage=$_POST['fage'];
  $faddress=$_POST['faddress'];
  $fpincode=$_POST['fpincode'];
  $fphone=$_POST['fphone'];
  $femail=$_POST['femail'];
  if(!empty($_POST['fname']) && !empty($_POST['fage']) && !empty($_POST['faddress']) && !empty($_POST['fpincode']) && !empty($_POST['fphone']) && !empty($_POST['femail']))
  {

    $con=mysqli_connect("localhost","root","","eNetra") or die('error in database connection.');
    $q="insert into pledgeform values ('$fname','$fage','$faddress','$fpincode','$fphone','$femail')";
    $res=mysqli_query($con,$q);
    if($res==TRUE){
      echo "<script> alert('Your form has been created successfully.') </script>";
    }
    else{
      echo "<script> alert('Unsuccessful.') </script>";
    }
  }
}
 ?>
 
<div class="container" style="width:700px;">
  <h2>Eye Pledge Form</h2>
  <p>Congratulations! on taking the first step in spreading the gift of sight. We can assure you there can be no other cause that is nobler. Please fill out these details below and we will send across this information to the nearest eye bank, which will then provide you with the eye pledge card.<br> <br> More importantly, please ensure all your family members, near and dear ones are informed about your desire to donate your eyes, because if they do not give their consent, this pledge form will be rendered useless.  </p>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" name="fname" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Age:</label>
      <input type="text" name="fage" class="form-control" id="usr">
    </div>
    <div class="form-group">
 <label for="comment">Address:</label>
 <textarea class="form-control" name="faddress" rows="5" id="comment"></textarea>
</div>
    <div class="form-group">
      <label for="usr">Pincode:</label>
      <input type="text" name="fpincode" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="text" name="fphone" class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" name="femail" class="form-control" id="usr">
    </div>
    <input type="submit" name="sub" class="btn btn-primary" value="SUBMIT">
  </form>
</div>

</body>
</html>
