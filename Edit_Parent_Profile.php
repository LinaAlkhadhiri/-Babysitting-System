

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Edit Parent Profile</title>
        <link rel="stylesheet" type="text/css" href="stayle-latifa.CSS">
        <link rel="stylesheet" type="text/css" href="MainStyle.CSS">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>

        <div id="body1">

           					<?php
		include("connection.php");
include("parent_menu.php");
	
	$parent_id=$_SESSION["uid"];
					

$query1="select * from users where id='$parent_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$email=$rows1['email'];
$phone_number=$rows1['phone_number'];
$location=$rows1['location'];
$city=$rows1['city'];
$image=$rows1['image'];
$picpath=$rows1['image'];
$passworddb=$rows1['password'];





	if(isset($_POST['submit'])){
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		if(isset($_POST['password'])){$password=$_POST['password'];
		$fullpass=md5($password);
		
		} else { $fullpass=$passworddb; }
		
		$city=$_POST['city'];
		$location1=$_POST['location'];
		$location=mysqli_real_escape_string($connection,$location1);
		$ID_number="";
		$phone_number="";
		$age="";
		$gender="";
		$bio1="";
		$bio=mysqli_real_escape_string($connection,$bio1);
		
		if(isset($_FILES['pic']['name']))
$picname=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
		
		$user_type=2;
		
		
		$qury1="select * from users where email='$email'";
		$check=mysqli_query($connection, $qury1);
		$rows=mysqli_fetch_array($check);
		$dbemail=$rows['email'];
		if($first_name==null || $last_name==null || $email==null) echo "
		<script>
			window.alert('Please enter all the details!');
			window.history.back();
		</script>
		";
		else{
		if($dbemail==null){echo "
		<script>
			window.alert('This user is already register!');
			window.history.back();
		</script>
		";}
		else {
		
		
		
		$ext="jpg";
$picpath="images/$first_name.$ext";

		$qury="update users set first_name='$first_name',last_name='$last_name',email='$email',password='$fullpass',city='$city',location='$location',image='$picpath' where id='$parent_id'";
		$reg=mysqli_query($connection, $qury);
		if($reg){ 
		move_uploaded_file($tmp,$picpath);
		echo "
		<script>
			window.alert('Update Succeffully!');
			window.location.href = 'Edit_Parent_Profile.php';
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


        </div>


       <br>
        <br>

<!--Page content-->

<div class="container1">
    <div class="title">Edit profile</div>
    <form action="Edit_Parent_Profile.php" method="post" enctype="multipart/form-data">
        <div class="user-details">

            <div class="profile-pic">
        
				
				
				
							<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="user photo" id="userphoto">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="user photo" id="userphoto">
									
									<?php
								}
									
									?>
                <input type="file" id="file" name="pic">
                <label for="file" id="uploadBtn">Edit a photo</label>
            </div>    

            <div class="input-box">
                <span class="details1">First Name</span>
                <input class="details" type="text" placeholder="Edit your first name" required value="<?php echo $first_name; ?>" name="first_name">
            </div>

            <div class="input-box">
                <span class="details1">Last Name</span>
                <input class="details" type="text" placeholder="Edit your last name" required value="<?php echo $last_name; ?>" name="last_name">
            </div>

            <div class="input-box">
                <span class="details1">Email</span>
                <input class="details" type="text" placeholder="Edit your email" required value="<?php echo $email; ?>" name="email">
            </div>

            <div class="input-box">
                <span class="details1">Password</span>
                <input class="details" type="Password" placeholder="Edit your New password"  name="password">
            </div>

            <div class="input-box">
                <span class="details2">City</span>
                <input class="details" type="text" placeholder="Edit your City" required value="<?php echo $city; ?>" name="city">
            </div>

            <div class="input-box">
                <span class="details1">Location</span>
                 <input class="details" type="text" placeholder="Edit your district" required value="<?php echo $location; ?>" name="location">
            </div>

        </div>

<br>
 
   <input type="submit" name="submit" value="Save" class="buttonS layutbott1">
           
 

        <div class="buttonS ">
            <a href="ParentMainPage.php">Cancel</a>
        </div>
        <div class="buttonS layutbott">
            <a href="ParentMainPage.php">Delete profile</a>
        </div>




    </form>
</div><!--End of page content-->



 <!--Footer-->
     <footer id="footer">

            


        <div class="social-icon">
        <div class="bottom">
        <a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

        <div class="bottom">
        <a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

        <div class="bottom">
        <a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ" class="line"><i class="fa fa-instagram"></i> @Sitter.R.US</a></div>
        <br><br>
        <div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
    
        </div>
        

    </footer><!--End of footer-->


    </body>

</html>
