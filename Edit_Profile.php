



<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Edit Babbysitter Profile</title>
        <link rel="stylesheet" type="text/css" href="stayle-latifa.CSS">
        <link rel="stylesheet" type="text/css" href="MainStyle.CSS">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>

    <div id="body1">

            		
		<?php
		include("connection.php");
include("sitter_menu.php");

$sitter_id=$_SESSION["uid"];
					

$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$email=$rows1['email'];
$phone_number=$rows1['phone_number'];
$location=$rows1['location'];
$city=$rows1['city'];
$image=$rows1['image'];

$bio=$rows1['bio'];
$gender=$rows1['gender'];
$ID_number=$rows1['ID_number'];
$age=$rows1['age'];
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
		$ID_number=$_POST['ID_number'];
		$phone_number=$_POST['phone_number'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$bio1=$_POST['bio'];
		$bio=mysqli_real_escape_string($connection,$bio1);
		$password=$_POST['password'];
		
		if(isset($_FILES['pic']['name']))
$picname=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
		
		$user_type=1;
		$location='';
		
		$qury1="select * from users where email='$email'";
		$check=mysqli_query($connection, $qury1);
		$rows=mysqli_fetch_array($check);
		$dbemail=$rows['email'];
		if($first_name==null || $last_name==null || $email==null || $ID_number==null) echo "
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

		$qury="update users set first_name='$first_name',last_name='$last_name',email='$email',password='$fullpass',city='$city',location='$location',ID_number='$ID_number',phone_number='$phone_number',age='$age',gender='$gender',bio='$bio',image='$picpath' where id='$sitter_id'";
		$reg=mysqli_query($connection, $qury);
		if($reg){ 
		move_uploaded_file($tmp,$picpath);
		echo "
		<script>
			window.alert('Update Succeffully!');
			window.location.href = 'Edit_Profile.php';
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


<!--Page content-->




<div class="container2">
    <div class="title">Edit profile</div>
    <form action="Edit_Profile.php" method="post" enctype="multipart/form-data">
        <div class="user-details2">

            <div class="profile-pic2">
               
							<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="user photo" id="userphoto2">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="user photo" id="userphoto2">
									
									<?php
								}
									
									?>
				
				
                <input type="file" id="file" name="pic">
                <label for="file" id="uploadBtn2">Choose a photo</label>
            </div>

            <div class="input-box2">
                <span class="details2">First Name</span>
                <input type="text" placeholder="Edit your first name" required value="<?php echo $first_name; ?>" name="first_name"> 
            </div>

            <div class="input-box2">
                <span class="details2">Last Name</span>
                <input type="text" placeholder="Edit your last name" required value="<?php echo $last_name; ?>" name="last_name">
            </div>

            <div class="input-box2">
                <span class="details2">Email</span>
                <input type="text" placeholder="Edit your email" required value="<?php echo $email; ?>" name="email">
            </div>

            <div class="input-box2">
                <span class="details2">Password</span>
                <input type="Password" placeholder="Edit your new password" >
            </div>

            <div class="input-box2">
                <span class="details2">ID</span>
                <input type="text" placeholder="Edit your ID number" required value="<?php echo $ID_number; ?>" name="ID_number">
            </div>

            <div class="input-box2">
                <span class="details2">Phone Number</span>
                <input type="text" placeholder="Edit your Phone number" required value="<?php echo $phone_number; ?>" name="phone_number">
            </div>

            <div class="input-box2">
                <span class="details2">age</span>
                <input type="text" placeholder="Edit your age" required value="<?php echo $age; ?>" name="age">
            </div>

            <div class="input-box2">
                <span class="details2">City</span>
                <input type="text" placeholder="Edit your city" required name="city" value="<?php echo $city; ?>">
            </div>

            <div class = "input_field">

                <label>  Gender : </label> <br>
    
                    <input type = "radio" name = "gender" value= "female"  <?php if($gender=="female"){echo "checked";} ?>> female <br>
                    <input type = "radio" name = "gender" value = "male"  <?php if($gender=="male"){echo "checked";} ?>> Male
                    
                </div>
    
            <div class="sitterBio">
                <label>Bio</label><br>
            <textarea id="bio" name="bio" rows="4" cols="35" >  <?php echo $bio; ?>
            </textarea>
        </div>

        </div>

 
             <input type="submit" name="submit" value="Save" class="buttonS layutbott1">
      
        <div class="buttonS ">
            <a href="SitterMainPage.php">Cancel</a>
        </div>
        <div class="buttonS layutbott">
            <a href="SitterMainPage.php">Delete profile</a>
        </div>


    </form>
</div>



<!--End of page content-->



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

