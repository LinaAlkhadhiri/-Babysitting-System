<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Offers Status</title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-1.CSS">
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



        






        <div class="List-1">
            <div class="List-2">
                <div class="lable-b">
                    <h4 id="space">Offers Status</h4> 
                </div>
                <div class="container">
                        <ul class="job-list">
						
						
							<?php
						
						$sitter_id=$_SESSION["uid"];
$query="select * from offers where sitter_id='$sitter_id'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$offer_id=$rows['offer_id'];
$request_id=$rows['request_id'];
$sitter_id=$rows['sitter_id'];
$status=$rows['status'];

$price=$rows['price'];
$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$image=$rows1['image'];
						
						?>
						
						
                        <div class="card2">

                            <div class="perant-data">
                                    <li>
                                       
										
										<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="perant picture" class="perant-pic">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="perant picture" class="perant-pic">
									
									<?php
								}
									
									?>
                                    </li>
        
                                    <li id = "perant-info">
                                        <p id="name"><?php echo $first_name." ".$last_name; ?></p>
                                    </li>
                                    <li >
									<?php
									if($status==1){
									?>
									
									 <p class ="Status" id="Status-2">&#10004;</p>
									 <?php
									 }
									else if($status==2){
									?>
									 
                                        <p class ="Status" id="Status-1">&#x2718;</p>
										
										 <?php
									 }
									else {
									
									
									?>
									 <p class ="Status" id="Status-1">&#8734;</p>
									  <?php
									 }
									
									
									
									?>
										
                                    </li>
                                                                
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
