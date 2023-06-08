<!DOCTYPE html>
<html>
    <head>
        <title>Job Request Details</title>
        <link rel="stylesheet" type="text/css" href="Dina Style.css">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
    </head>

    <body>




 <!--Header-->
 <div class = header>

   		<?php
		include("connection.php");
include("sitter_menu.php");
	

?>

</div><!--End of header-->




<!--request details-->
						<?php
						
						if(isset($_GET['r_id'])){
						$request_id=$_GET['r_id'];
						
						}
						
						$sit_id=$_SESSION["uid"];
						$std=0;
$query="select * from job_request where req_id='$request_id'";
$view=mysqli_query($connection,$query);
$rows=mysqli_fetch_array($view);
$req_id=$rows['req_id'];

$kidfirst_name=$rows['kidfirst_name'];
$kidlast_name=$rows['kidlast_name'];
$duration=$rows['duration'];
$kidage=$rows['kidage'];
$service=$rows['service'];

$sit_id=$rows['user_id'];

$request_date=$rows['request_date'];

$query1="select * from users where id='$sit_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$phone_number=$rows1['phone_number'];
$email=$rows1['email'];
$image=$rows1['image'];
$location=$rows1['location'];

						
						?>


<div class = requestdetails>
    <div id = title1> <h2>Job Request Details</h2></div>

       <a>
	   
	   				<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="user photo" id="parent-photo">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="user photo" id="parent-photo">
									
									<?php
								}
									
									?>
	   
	   </a>
    <h3>Name: <span><?php echo $first_name." ".$last_name;     ?></span></h3>
    <h3>Phone Number: <span><?php echo $phone_number; ?></span></h3>
    <h4>Kid's Information: </h4>

    <h5>Number Of Kids: 
        <span>2</span></h5>

    <h5>Kids Names: 
        <span><?php echo $kidfirst_name." ".$kidlast_name;     ?></span> </h5>
    <h5>Kids Ages: 
        <span><?php echo $kidage; ?></span></h5>
    <h5>Type Of Service: 
        <span><?php echo $service; ?></span> </h5>

    <h5>Duration: 
        <span><?php echo $duration; ?></span></h5>
    
    <div class = "container">
        <p>Location </p>
       <?php echo $location; ?>

    </div>
   





        <div class = "buttons"> 


            <div class = "button" >  <a href="Job_Request.php"> Back </a> </div> 
             
             
             
             
          </div>

    
    
    </div><!--End of request details-->










     <!--Footer-->
     <footer id="footer">

			
        <div id="Ctext">Contact us</div>

        <div class="social-icon">
        <div class="bottom">
        <a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

        <div class="bottom">
        <a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sitters.R.US.com</a> </div>

        <div class="bottom">
        <a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ" class="line"><i class="fa fa-instagram"></i> @sittersRUS</a></div>
        <br><br>
        <div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
    
        </div>
        

    </footer><!--End of footer-->


    </body>
