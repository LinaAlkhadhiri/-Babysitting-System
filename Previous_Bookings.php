
<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>View Profile</title>
        <link rel="stylesheet" type="text/css" href="stayle-latifa.CSS">
        <link rel="stylesheet" type="text/css" href="Ahad Style-2.CSS">
        <link rel="stylesheet" type="text/css" href="MainStyle.CSS">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
           
    </head>

    <body>

        <div id="body1">

           		

           					<?php
		include("connection.php");
include("parent_menu.php");
	

?>
        </div>
        <br>
      



      <div class="List-1">
            <div class="List-2">

                   <div class="lable-b">
                    <h4>Previous Bookings</h4> 
                </div>

                <div class="container9">

<ul class="job-list">



<?php
						$sit_id=$_SESSION["uid"];
						$std=1;
$query="select * from booking where parent_id='$sit_id' AND task_status='$std'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$booking_id=$rows['booking_id'];
$sitter_id=$rows['sitter_id'];

$booking_date=$rows['booking_date'];
$booking_time=$rows['booking_time'];


$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$phone_number=$rows1['phone_number'];
$image=$rows1['image'];

						
						?>



<div class="card2-cb grid-container" style = "height: 300px;">

                            <div class="item2" style = "position: relative; top:60px; left:20px">

                                 
                                                       
                                      
									<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="Sitter picture" class="Sitter-pic">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="Sitter picture" class="Sitter-pic">
									
									<?php
								}
									
									?>
									    
									   
									   
									   </div>
                                 
								 
								 
            <div class="item3" style = "position: relative; top:30px; z-index:10;">

               <span id="details1">babysitter name:</span>
                <span class="textcolor"><?php echo $first_name." ".$last_name; ?></span> <br>
                 <span id="details1">phone number:</span>
                <span class="textcolor"><?php echo $phone_number; ?></span> 
               <span id="details1">Date:</span>
                <span class="textcolor"><?php echo $booking_date; ?></span><br>
                                              </div>

                        <div id = "item4" >   
                       

                <form method="post" action="Review_published.php" class="form"> 
                <div class="rate">

                                    <p>Add Your Rate </p>
									
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    
                               </div>    
                         <div class="review" style = "position: relative; top:70px; ">
                               <p style = "position: relative; right:150px; top:25px; ">Add Your Review</p>
                               <textarea rows="3" cols="19" name="comment"></textarea>
							   <input type="hidden" name="sitter_id" value="<?php echo $sitter_id; ?>">
							    <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
                               <input type="submit" value="submit" class="button" name="review" >
                            </div>
                     </form>
                             
                                </div>
                        </div>
                        


                    
<?php

}

?>

                            
                </ul>
                </div>
            </div>

        </div>

            

    



        <footer id="footer">

            
            <div id="Ctext">Contact us</div>

            <div class="social-icon">
            <div class="bottom">
            <a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

            <div class="bottom">
            <a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

            <div class="bottom">
            <a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ" class="line"><i class="fa fa-instagram"></i> @Sitters.R.US</a></div>
            <br><br>
            <div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
        
            </div>
            

        </footer>


    </body>

</html>









