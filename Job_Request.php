<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Job Requests</title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-1.css">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>

        <div id="body1">

           	
		<?php
		include("connection.php");
include("sitter_menu.php");

$query="select * from job_request";
$view=mysqli_query($connection,$query);
// $rows=mysqli_fetch_array($view);
$current_date_already_job = array();
while($rows=mysqli_fetch_array($view)){

$request_date=$rows['request_date'];
//print_r($request_date);
// if (date("d-m-Y") == $rows['request_date']) {
	array_push($current_date_already_job, $request_date);
// }
}
//echo "<pre> current_date_already_job : "; 
// print_r($current_date_already_job);

$sit_id=$_SESSION["uid"];
if(isset($_POST['bid'])){

			$request_id=$_POST['r_id'];
			$sitter_id=$_POST['sit_id'];
			$parent_id=$_POST['parent_id'];
			$price=$_POST['price'];
			$status=0;
	
	$sta=1;
	$qury1="update job_request set status='$sta' where req_id='$request_id'";
		$reg1=mysqli_query($connection, $qury1);
	
	
		$qury="insert into offers (request_id,parent_id,sitter_id,price,status) values ('$request_id','$parent_id','$sitter_id','$price','$status')";
		$reg=mysqli_query($connection, $qury);
		if($reg) echo "
		<script>
			window.alert('Offer Submit  Successfully!');
			window.location.href = 'Job_Request.php';
		</script>
		";
		}
	

	

?>

        </div>



        






        <div class="List-1">
            <div class="List-2">
                <div class="lable-b">
                   <h4>Job Requests</h4> 
                </div>
                <div class="container">
                        <ul class="job-list">
						
						
						<?php
						$sit_id=$_SESSION["uid"];
						$std=0;
$query="select * from job_request where status='$std'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$req_id=$rows['req_id'];
$parent_id=$rows['user_id'];

$request_date=$rows['request_date'];

$query1="select * from users where id='$parent_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$image=$rows1['image'];

						
						?>
						
						
						
                        <div class="card">

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
                                <p><?php echo $first_name." ".$last_name;     ?></p>
                                <p>Date: <?php echo $request_date; ?> </p>

                                <p><a href = "Job_request_details.php?r_id=<?php echo $req_id; ?>" id="link"> details</a></p>
                            </li>
                            <li id = "send-offer">
                                <form method="post" action="Job_Request.php"> 
                                    <label>Enter Price:</label>
                                    <div class="flex">
                                        <span class="currency">SR</span>
										<input type="hidden" class="text" name="r_id" value="<?php echo $req_id; ?>">
										<input type="hidden" class="text" name="sit_id" value="<?php echo $sit_id; ?>">
										<input type="hidden" class="text" name="parent_id" value="<?php echo $parent_id; ?>">
                                        <input type="text" class="text" name="price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  required> 
                                        </div>
                                     <input type="submit" value="Send an offer" class="button" name="bid">
                                </form>
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
