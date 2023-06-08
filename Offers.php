<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Offers</title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-2.CSS">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <script>
    

var timer = 1;
setInterval(function() {

	console.log('hello' + timer);
	if (timer > 30) {
        const btnItems = document.querySelectorAll(".btn");

var index = 0, length = btnItems.length;
for ( ; index < length; index++) {
    btnItems[index].style.display = "none";
}
		// document.getElementById("timer2").style.display = "none";
		// document.getElementById("timer1").style.display = "none";
	}
	timer = timer + 1;
}, 1000);
</script>

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
                    <h4>Offers</h4> 
                </div>
                <div class="container">
                        <ul class="offer-list">
						
						
						<?php
						
						$parent_id=$_SESSION["uid"];
						$std=0;
$query="select * from offers where parent_id='$parent_id' AND status='$std'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
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
						
						?>
						
						
						
                        <div class="card">

                        <div class="Sitter-data">
                            <li>
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
                            </li>

                            <li id = "Sitter-info">
                                <p><?php echo $first_name." ".$last_name; ?></p>
                                <p>Price: <?php echo $price; ?>SR</p>
                                <p><a href = "Offer_details.php" id="link"> details</a></p>
                            </li>
                            <li>
                                <a href="acceptance.php?offer_id=<?php echo $offer_id; ?>" ><button type="button" class="btn-1">  &#10004; </button>  </a>
                                <a href="Rejection.php?offer_id=<?php echo $offer_id; ?>"><button type="button" class="btn-2"> &#x2718;</button>  </a>
                            </li>
                                                        
                        </div></div>


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
