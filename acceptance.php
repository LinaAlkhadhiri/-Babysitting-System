<!DOCTYPE html>
<html>
	<!-- Main page -->
<head>

	<meta charset="utf-8">
	
	<title>Sitters R US</title>
	
	<link rel="stylesheet" type="text/css" href="ReefStyleSheet.css">
    <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
    <link rel="stylesheet" type="text/css" href="MainStyle.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
        <!--Header-->
        
                                                					<?php
		include("connection.php");
include("parent_menu.php");
	
	
	if(isset($_GET['offer_id'])){
$offer_id=$_GET['offer_id'];
$status=1;
$query = "update offers set status='$status' where offer_id='$offer_id'";
$run=mysqli_query($connection,$query);

$query="select * from offers where offer_id='$offer_id'";
$view=mysqli_query($connection,$query);
$rows=mysqli_fetch_array($view);
$offer_id=$rows['offer_id'];
$request_id=$rows['request_id'];
$sitter_id=$rows['sitter_id'];
$parent_id=$rows['parent_id'];


	date_default_timezone_set('Asia/Riyadh');
$booking_date=date("d-m-Y");
$booking_time=date("h:i A");


$task_status=0;

$qury="insert into booking (offer_id,request_id,parent_id,sitter_id,booking_date,booking_time,task_status) values ('$offer_id','$request_id','$parent_id','$sitter_id','$booking_date','$booking_time','$task_status')";
		$reg=mysqli_query($connection, $qury);



}
?>


        <!--header-->

        
        <div id = "frame2">

        <center> <h3> Thank you! Your acceptance has been sent. </h3> </center>


     </div>

     
     <img src="Images/waving.png" alt = "Thank you" id = "thank">









       
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
