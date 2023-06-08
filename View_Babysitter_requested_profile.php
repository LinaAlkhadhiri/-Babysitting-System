<!DOCTYPE html>
<html>
    <head>
        <title>View Babysitter profile</title>
        <link rel="stylesheet" type="text/css" href="Dina Style.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-2.css">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
    </head>

    <body>

<?php
include("connection.php");
$sitter_id=$_SESSION["uid"];

$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);

$rows1=mysqli_fetch_array($view1);


include("connection.php");
$sitter_id=$_SESSION["uid"];
$query5="select * from users where id= 1";
$view5=mysqli_query($connection,$query5);
//$query1="select * from users where id='$sitter_id'";
//$view1=mysqli_query($connection,$query1);



$rows1=mysqli_fetch_array($view5);


$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$image=$rows1['image'];
$bio=$rows1['bio'];
$phone=$rows1['phone_number'];
$email=$rows1['email'];
$city=$rows1['city'];
$age=$rows1['age'];
$gender=$rows1['gender'];





?>


 <!--Header-->
 <div class = header>

    <img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

    <div class="top"><a href="ParentMainPage.php"  class="line"><h2>Main Page</h2></a></div>

    <div class="top"><a href="View_Parent_Profile.php" class="line"><h2>Profile</h2></a>
        <ul class = "dropdown-content">
            <li><a href="View_Parent_Profile.php">View</a></li>
            <li><a href="Edit_Parent_Profile.php">Edit</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
    </div>

    <div class="top"><a href="#"  class="line"><h2>Bookings</h2></a>
        <ul class = "dropdown-content">
            <li><a href="Current_Bookings.php">Current</a></li>
            <li><a href="Previous_Bookings.php">Previous</a></li>
            
        </ul>
    </div>

    <div class="top"><a href="CurrentRequests.php" class="line"><h2>Current Requests</h2></a></div>
</div><!--End of header-->




<!--Offer details-->


<div class = offerdetails>
    <div id = title1> <h2>Profile</h2></div>

       <a> <img src="<?php echo $image;?>" alt="user photo" id="babysitter-photo"></a>
       
    <h3 id="babysitter-profilename" ><?php echo $first_name ;?> <?php echo $last_name;?></h3>
    

    


    

    <div class="babbysitter-infoprofile">
        
        <h5 id="offer-title-detials1">Personal Information:</h5>
         <a id="infobs">Age: 
             <span><?php echo $age;?></span></a>
     
         <a id="infobs">Gender: 
             <span><?php echo $gender;?></span></a>
     
         <a id="infobs">City: 
             <span><?php echo $city;?></span></a>






             <h5 id="offer-title-detials1">Contact Information:</h5>
     
             <a id="infobs" id="underlinecontact" href = 'https://api.whatsapp.com/send/?phone=966563925640&text=Hi! i got your request &type=phone_number&app_absent=0'target='_blank'> 
                Phone Number:
                <span><?php echo $phone;?></span></a>
             
                 <a href="mailto:remmasaleh@hotmail.com"id="infobs">Email: 
                      <span><?php echo $email;?></span></a>


                      <h5 id="offer-title-detials1">Ratings And Reviews:</h5>
     
                     <?php 
                     
                     $query6="SELECT reviews.stars, reviews.comment FROM `reviews` WHERE sitter_id = 1";
                     $view6=mysqli_query($connection,$query6);
                    

                     while($row6=mysqli_fetch_array($view6)){
                        


                         echo "<h4>".$row6['comment']."</h4>"; 



                       

                         
                     }

                     

                     ?>
        
     
            
         </div>
            

   
    
       
  
    <h6 id="bioprofile">Bio: 
        <span><?php echo $bio;?></span>
   
    </h6>
    





        

    
    <div class = "button-babysitter" >  <a href="offer_details.php"> Back </a> </div> 
              
             
             
        

    
    
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

			




    
