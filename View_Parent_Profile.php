

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>View Profile</title>
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

						
				

?>

        </div>
        <br>
      

      <!--Page content-->

    <div class="container1">
    <div class="title">View profile</div>
    <form action="ParentMainPage.php" method="post">
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
				
				
            </div>

            <div class="input-box">
                <span id="details1">First Name :</span>
                <span class="details"><?php echo $first_name; ?></span>
            </div>

            <div class="input-box">
                <span id="details1">Last Name :</span>
                <span class="details"><?php echo $last_name; ?></span>
            </div>
            
            <div class="input-box">
                <span id="details1">Phone number:</span>
                <span class="details"><?php echo $phone_number; ?></span>
            </div>

            <div class="input-box">
                <span id="details1">Email:</span>
                <span class="details"><?php echo $email; ?></span>
            </div>
            


            <div class="input-box">
                <span id="details1">City:</span>
 <span class="details"><?php echo $city; ?></span>
            </div>
        
            <div class="input-box">
                <span id="details1">Location:</span>
                <br><br>
                    <span class="details"> 
					  <?php echo $location; ?>
					
                </span>
            </div>
         

        </div>






    </form>
</div><!--End of page content-->




      <!--Footer-->
     <footer id="footer">

       <div id="Ctext">Contact us</div>     


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
