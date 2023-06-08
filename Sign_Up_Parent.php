<!DOCTYPE html>
<html>
    <!-- Sign Up Parent page -->
    <head>
        
            <meta charset="utf-8">
            
            <title>Sign Up Page</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="MainStyle.css">
	        <link rel="stylesheet" type="text/css" href="Lina Pages Style.css">
	        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        
        </head>
        <body>
            <!--Header-->
			
									<?php
		include("connection.php");
		
		if(isset($_POST['submit'])){
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$city=$_POST['city'];
		$location1=$_POST['location'];
		$location=mysqli_real_escape_string($connection,$location1);

		
		if(isset($_FILES['pic']['name']))
$picname=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
		
		$user_type=2;
		
		
		$qury1="select * from users where email='$email'";
		$check=mysqli_query($connection, $qury1);
		$rows=mysqli_fetch_array($check);
		$dbemail=$rows['email'];
		if($first_name==null || $last_name==null || $email==null || $password==null) echo "
		<script>
			window.alert('Please enter all the details!');
			window.history.back();
		</script>
		";
		else{
		if($dbemail==$email){echo "
		<script>
			window.alert('This user is already register!');
			window.history.back();
		</script>
		";}
		else {
		
		$fullpass=md5($password);
		
		$ext="jpg";
$picpath="images/$first_name.$ext";

$qury="insert into users (first_name,last_name,email,password,city,location,ID_number,phone_number,age,gender,bio,image,user_type) values ('$first_name','$last_name','$email','$fullpass','$city','$location','$ID_number','$phone_number','$age','$gender','$bio','$picpath','$user_type')";
print_r($qury);
		
$reg=mysqli_query($connection, $qury);
print_r($reg);
exit;
		if($reg){ 
			print_r("you entered here");
			exit;
		move_uploaded_file($tmp,$picpath);
		echo "
		<script>
			alert('Registered Succeffully!');
			location.href = 'login.php';
		</script>
		";
		}
		else echo "
		<script>
			window.alert('Error! kinldly fill this form again!');
			window.history.back();
		</script>
		";
		}
		
		}
		}
		
		
		
	

?>
			
			
		<div>

			<img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

           
            <div class="top"><a href="index.php"  class="line"><h2>Home</h2></a></div>

			<div class="top"><a href="index.php#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

		</div><!--End of header-->

        <br>
        <br>

        <!--Page content-->

        <div class="container1">
            <div class="title">Sign Up</div>
            <form action="Sign_Up_Parent.php" method="post" enctype="multipart/form-data">
                <div class="user-details">

                    <div class="profile-pic">
                        <img src="Images/user (1).png" alt="user photo" id="userphoto">
                        <input type="file" id="file" name="pic">
                        <label for="file" id="uploadBtn">Choose a photo</label>
                    </div>

                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter your first name" name="first_name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter your last name" name="last_name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="Password" placeholder="Enter your password" name="password" required>
                    </div>

                    <div class="input-box">
                        <span class="details">City</span>
                       <!-- <input type="text" placeholder="Enter your city" name="city" required>-->
						<select name="city">
						<option> Select City </option>
						<option value="Riyadh">Riyadh</option>
						<option value="Jeddah">Jeddah </option>
						<option value="Dammam">Dammam </option>
						
						</select>
						
                    </div>

                    <div class="input-box">
                        <span class="details">Location</span>
                     <input type="text" placeholder="Enter your district" name="location" required>
                    </div>

                </div>
<input type="submit" name="submit" value="Sign Up" class="button2">

            </form>
        </div><!--End of page content-->


        <!--Footer-->
		<footer id="footer">

            <div id="Ctext">Contact us</div>

			<div class="social-icon" id="soc-icon">
			<div class="bottom">
			<a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

			<div class="bottom">
			<a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

			<div class="bottom">
			<a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ=" class="line"><i class="fa fa-instagram"></i> @Sitters.R.US</a></div>
			<br><br>
			<div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
		
		    </div>
			

		</footer><!--End of footer-->

        </body>
</html>
