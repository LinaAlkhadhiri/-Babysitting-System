<!DOCTYPE html>
<html>
    <!-- Log in page -->
    <head>
        
            <meta charset="utf-8">
            
            <title>Login Page</title>
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

			<div class="top"><a href="index.php#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

		</div><!--End of header-->

        <br>
        <br>
		
		 <?php 
		if(isset($_POST['login'])){
		include("connection.php");
		$email=$_POST['email'];
		$password=$_POST['password'];
		if($email==null || $password==null)  echo "
		<script>
			window.alert('Enter email and Password!');
			window.history.back();
		</script>
		";
		else{
		$qury="select * from users where email='$email'";
		$reg=mysqli_query($connection, $qury);
		$row=mysqli_fetch_array($reg);
		$id=$row['id'];
		$uname=$row['first_name'];
		$lastname=$row['last_name'];
		$dbpassword=$row['password'];
		$dbemail=$row['email'];
		$user_type=$row['user_type'];
		$fullpass=md5($password);
		if($fullpass==$dbpassword && $email==$dbemail){

		$_SESSION["uid"]=$id;
		$_SESSION["name"]=$uname;
		$_SESSION["lastname"]=$lastname;
		$_SESSION["rank"]=$user_type;
		
		if($user_type==1){
		 echo "
		<script>
			window.location.href = 'SitterMainPage.php';
		</script>
		";
		}
		else {
		 echo "
		<script>
			window.location.href = 'ParentMainPage.php';
		</script>
		";
		
		}
		
		
		
		
		}else  echo "
		<script>
			window.alert('Enter Valid Email and Password!');
			window.history.back();
		</script>
		";
		
		
		}
		}
		?>


        <!--Page content-->
        <form class="loginform" action="login.php" method="post">

                    <h1>Log in</h1>

                <div class="user-details0">
                    <div class="input-box0">
                        <span class="details0">Email</span>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
        
                    <div class="input-box0">
                        <span class="details0">Password</span>
                        <input type="Password" placeholder="Enter your password" name="password" required>
                    </div>
                </div>
				<p><a h href="forgetPass.php" class="linegreen">Forgot password?</a></p>
                    <br>
                    <br>
                   <input type="submit" value="Login" name="login" id="logbut">
                    <br>
                    <br>
                   <a href="are_you.php" class="linegreen">Don't have an account?</a>

        </form><!--End of page content-->

		<!--

		-->

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
