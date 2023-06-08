<!DOCTYPE html>
<html>
    <!-- Sign Up? Page -->
    <head>
        
            <meta charset="utf-8">
            
            <title>Sitters R US</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="MainStyle.css">
	        <link rel="stylesheet" type="text/css" href="Lina Pages Style.css">
	        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        
        </head>
        <body>
            <!--Header-->

            <?php
		include("connection.php");?>

		<div>

			<img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

            <div class="top"><a href="index.php"  class="line"><h2>Home</h2></a></div>

			<div class="top"><a href="index.php#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

		</div><!--End of header-->

        <br>
        <br>

        <!--Page content-->
        <form class="SignUPform" >

            <h1>Are you?</h1>

            <a href="Sign_Up_Parent.php" class="line" id="buttonChoice">Parent</a><br>

            <a href="Sign_Up_Sitter.php" class="line"  id="buttonChoice">Baby Sitter</a><br>


        </form>
        <img src = "Images/mainPic.png" alt = "pic" id = "PagePic"><!--End of page content-->


        <!--Footer-->
		<footer id="footer">

            <div id="Ctext">Contact us</div>

			<div class="social-icon" id="soc-icon">
			<div class="bottom">
			<a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

			<div class="bottom">
			<a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

			<div class="bottom">
			<a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ=" class="line"><i class="fa fa-instagram"></i> @Sitters.R.US</a></div>
			<br><br>
			<div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
		
		    </div>
			

		</footer><!--End of footer-->

        </body>
</html>
