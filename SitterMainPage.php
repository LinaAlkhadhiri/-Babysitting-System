<!DOCTYPE html>
<html>
	<!-- Main page -->
<head>

	<meta charset="utf-8">
	
	<title>Main Page</title>
	
	<link rel="stylesheet" type="text/css" href="ReefStyleSheet.css">
	<link rel="stylesheet" type="text/css" href="MainStyle.css">

	<link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
        <!--Header-->
		
		
		<?php
		include("connection.php");
include("sitter_menu.php");
	

?>
		



            <!--End of header-->


      <div id = "frame1"> 

       	 


         <div class = "button" id = "options">  <a href="Job_Request.php"> Job requests list </a> </div> 
          
          <div class = "button" id = "options" > <a href="Offers_Status.php"> View my offers </a> </div> 
          
          
       </div>


       <img src = "Images/mainPic.png" alt = "pic" id = "MainPagePic">










                 <footer id="footer">

            <div id="Ctext">Contact us</div>


            <div class="social-icon">
            <div class="bottom">
            <a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

            <div class="bottom">
            <a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

            <div class="bottom">
            <a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ=" class="line"><i class="fa fa-instagram"></i> @sitters.R.US</a></div>
            <br><br>
            <div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
        
            </div>
            

        </footer><!--End of footer-->
    

    </body>

</html>
