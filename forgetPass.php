<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
    <link rel="stylesheet" href="Lina Pages Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="MainStyle.css">
	<link rel="stylesheet" type="text/css" href="Lina Pages Style.css">
	<link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">

</head>
<body>

    <!--Header-->
		<div>

<img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

<div class="top"><a href="index.php"  class="line"><h2>Home</h2></a></div>

<div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

</div><!--End of header-->

    <!--Page content-->
    <form class="loginform" action="forgetPass.php" method="post">

<h1>Reset password</h1>

<div class="user-details0">
<div class="input-box0">
    <span class="details0">Email</span>
    <input type="email" placeholder="Enter your email" name="email" required>
</div>

<div class="input-box0">
    <span class="details0">Password</span>
    <input type="Password" placeholder="Enter new password" name="password" required>
</div>
</div>
<br>
<br>
<input type="submit" value="Reset" name="resetPass" id="logbut">
<br>
<br>
<p>Back to <a h href="login.php" class="linegreen">log in</a></p>

</form><!--End of page content-->

</body>
</html>


<?php


if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "sitters_runs" ))
die( "<p>Could not open URL database</p>" );

if(isset($_POST['resetPass'])) {  

$email=$_POST['email'];  
$password=$_POST['password'];  


$query1="select * from  users WHERE email='$email'";  

  
$run1=mysqli_query($database, $query1);  

if($row=mysqli_fetch_row($run1)!=null ) {
    $sql = "UPDATE users SET password='$password' WHERE email='$email'"; 
    $run2=mysqli_query($database,   $sql);  
    echo "<script>alert('The password has been set successfully')</script>"; 
}
else  {
  echo "<script>alert('No account with this email!')</script>";  
}
  }

?>

