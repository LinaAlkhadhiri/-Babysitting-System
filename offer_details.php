<!DOCTYPE html>
<html>
    <head>
        <title>Offer Details</title>
        <link rel="stylesheet" type="text/css" href="Dina Style.css">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
    </head>

    <body>




 <!--Header-->
 <div class = header>
                    					<?php
		include("connection.php");
include("parent_menu.php");
	

?>
</div><!--End of header-->




<!--Offer details-->
<?php
						
						$parent_id=$_SESSION["uid"];
						$std=0;
$query="select * from offers where parent_id='$parent_id' AND status='$std'";

$view=mysqli_query($connection,$query);

if($rows=mysqli_fetch_array($view)){
$offer_id=$rows['offer_id'];
$request_id=$rows['request_id'];
$sitter_id=$rows['sitter_id'];

$price=$rows['price'];
$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$image=$rows1['image'];
$bio=$rows1['bio'];
$phone=$rows1['phone_number'];
$email=$rows1['email'];
$city=$rows1['city'];
						
}
						?>

<div class = requestdetails>
    <div id = title1> <h2>Offer Details</h2></div>

       <a> <img src="<?php echo $image;?>" alt="user photo" id="babysitter-photo"></a>
       
    <h3 id="babysitter-name" ><?php echo $first_name ;?> <?php echo $last_name;?></h3>
    

    <h4 id="babysitter-offertitle">Offer: </h4>


<div class="babbysitter-info">
   <h5 id="offer-title-detials1">offer details:</h5>
   
    <a id="infobs">city: 
        <span><?php echo $city;?></span></a>

    <a id="infobs">Price per hour: 
        <span><?php echo $price;?></span></a>

    <a id="infobs">Negotiable: 
        <span>Yes</span></a>

        <h5 id="offer-title-detials1">Contact Information:</h5>

        <a id="infobs"> 
            Phone Number: 
            <span><?php echo $phone;?></span></a>
        
            <a href="mailto:remmasaleh@hotmail.com"id="infobs">Email: 
                 <span><?php echo $email;?></span></a>
    </div>

   
    
       
  
    <h6 id="bio">Bio: 
        <span><?php echo $bio;?></span>
   
    </h6>

   
    <a class="line2" href="View_Babysitter_requested_profile.php?sitter_id=<?php echo $sitter_id;?>"> View full Profile</a>





        


    <div class = "button-babysitter" id="offerbutton">  <a href="Offers.html"> Back </a> </div> 
              
             
             
        

    
    
    </div><!--End of Offer details-->










     <!--Footer-->
     <footer id="footer">

			<div id="Ctext">Contact us</div>


        <div class="social-icon">
        <div class="bottom">
        <a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

        <div class="bottom">
        <a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

        <div class="bottom">
        <a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ" class="line"><i class="fa fa-instagram"></i> @sitters.R.US</a></div>
        <br><br>
        <div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
    
        </div>
        

    </footer><!--End of footer-->


    </body>

			




    
