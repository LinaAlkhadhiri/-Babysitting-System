<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Previous Bookings</title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-2.CSS">
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




        <div class="List-1">
            <div class="List-2">
                <div class="lable-b">
                    <h4>Previous Bookings</h4> 
                </div>
                <div class="container">
                        <ul class="offer-list">
                        <div class="card2">

                        <div class="Sitter-data">
                            <li>
                                <img src="Images/female.jpeg" alt="Sitter picture" class="Sitter-pic2">
                            </li>

                            <li id = "Sitter-info2">
                                <p id="name">Remma Saleh </p>
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
                    
                               </div>                             </li>

                            <li>
                                <form method="get" action="#" class="form"> 

   
                               <div class="review">
                               <p>Add Your Review</p>
                               <textarea rows="3" cols="19"></textarea>
                               <input type="submit" value="submit" class="button">
                            </div>
                            </form> 
                            </li>
                                                        
                        </div></div>

                        <div class="card2">

                            <div class="Sitter-data">
                                <li>
                                    <img src="Images/female.jpeg" alt="Sitter picture" class="Sitter-pic2">
                                </li>
    
                                <li id = "Sitter-info2">
                                    <p id="name">Afnan Faisal</p>
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
                        
                                   </div>                                 </li>

                                <li>
                                    <form method="get" action="#" class="form"> 

   
                                        <div class="review">
                                        <p>Add Your Review</p>
                                        <textarea rows="3" cols="19"></textarea>
                                        <input type="submit" value="submit" class="button">
                                     </div>
                                     </form> 
                                </li>
                            </div></div>

                        
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
