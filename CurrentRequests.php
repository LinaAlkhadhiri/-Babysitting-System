<!DOCTYPE html>
<html>
	<!-- Main page -->
<head>

	<meta charset="utf-8">
	
	<title>Current Requests</title>
	
	<link rel="stylesheet" type="text/css" href="ReefStyleSheet.css">
    <link rel="stylesheet" type="text/css" href="MainStyle.css">

    <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
        <!--Header-->
        
                    					<?php
		include("connection.php");
include("parent_menu.php");
	

?>

        <!--header-->


  <table class = "currentRequests" >
    
    <caption class= "title2"> Your current requests : </caption>

  <table class = "currentRequests" >


<?php
	$user_id=$_SESSION["uid"];
$query="select * from job_request where user_id='$user_id' ORDER BY req_id ASC";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$req_id=$rows['req_id'];
$kidfirst_name=$rows['kidfirst_name'];
$kidlast_name=$rows['kidlast_name'];
$status=$rows['status'];
?>

    <tr>
         
         <td> <img src="Images/babyRequest.png" alt="baby requests" id="bIcon"> </td>
         <th> <?php echo $kidfirst_name." ".$kidlast_name;     ?> </th>
		 
         <td> <a <?php if($status==0){ ?> href="ParentPostJobRequest_edit.php?id=<?php echo $req_id; } ?>" id = "edit"  disabled> edit </a> </td>
         <td><a <?php if($status==0){ ?> href="CancelRequestMessage.php?id=<?php echo $req_id; } ?>" id = "cancel"  disabled> cancel </a> </td>



    </tr>


<?php 
}

?>




   

      

	




  </table>



 
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
