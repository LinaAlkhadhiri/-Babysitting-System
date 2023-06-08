<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title> Review</title>
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
	

?>
			
			
			

        </div>





<br>

        

                            <div class="List-1">
            <div class="List-2">

                   <div class="lable-b">
                    <h4>Ratings & Reviews</h4> 
                </div>
                
            




                <div class="container9">

                        <ul class="job-list">


<?php
						$sit_id=$_SESSION["uid"];
						
$query="select * from reviews where sitter_id='$sit_id'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$booking_id=$rows['booking_id'];
$sitter_id=$rows['sitter_id'];

$stars=$rows['stars'];
$comment=$rows['comment'];


$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$phone_number=$rows1['phone_number'];

    

$query2= "SELECT users.first_name, users.last_name FROM `reviews`,`booking`,`users` WHERE reviews.booking_id = booking.booking_id AND booking.parent_id = users.id AND reviews.comment = '$comment' ";
$view2=mysqli_query($connection,$query2);
$r = mysqli_fetch_array($view2);
$parent_name = $r["first_name"].' '.$r["last_name"];
						
						?>

                        <div class="card2 grid-container">

                            <div class="item2">

                                              
									<?php
								echo "Parent Name: <br>".$parent_name;
									
									?>
									   
									   
									   
									   </div>
                                 
            <div class="item3">
                                   
                                      <p><?php echo $comment; ?></p>   </div>

                        <div id = "item4" >        

<?php for($i=1; $i<=$stars; $i++){ ?>

                    
                                <span class="fa fa-star checked"></span>
                                
                                    
									<?php

}

?>

<?php for($i=5; $i>$stars; $i--){ ?>

                    
                             <span class="fa fa-star"></span> 
                                
                                    
									<?php

}

?>

                                                                
                                </div>
                        </div>


<?php

}

?>

                            
                </ul>
                </div>
            </div>



            
        </div>
    
    

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
