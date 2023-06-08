<!DOCTYPE html>
<html>
	<!-- Main page -->
<head>

	<meta charset="utf-8">
	
	<title>Post job request</title>
	
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
         
		  <?php 
		if(isset($_POST['submit'])){
		include("connection.php");
		$user_id=$_SESSION["uid"];
		date_default_timezone_set('Asia/Karachi');
$upload_date=date("d-m-Y");
		$kidfirst_name=$_POST['kidfirst_name'];
		$kidlast_name=$_POST['kidlast_name'];
		$kidgender=$_POST['kidgender'];
		$kidage=$_POST['kidage'];
		//$other_details=$_POST['other_details'];
		$duration=$_POST['duration'];
		
		$other_details1 = isset ($_POST ['service']) ? $_POST ['service'] : array ();
$service = implode (",", $other_details1);

		
		
		$status=0;
	
		if($kidfirst_name==null) echo "
		<script>
			window.alert('Please enter all the details!');
			window.history.back();
		</script>
		";
		else{
		$qury="insert into job_request (kidfirst_name,kidlast_name,kidgender,kidage,service,duration,user_id,status,request_date) values ('$kidfirst_name','$kidlast_name','$kidgender','$kidage','$service','$duration','$user_id','$status','$upload_date');";
		$reg=mysqli_query($connection, $qury);
		if($reg) echo "
		<script>
			window.alert('Add Request Successfully!');
			window.location.href = 'ParentPostJobRequest.php';
		</script>
		";
		}
		}
		?>

            <div class = "wrapper">

                 <div class = "title">

                 Post a Job Request  </div> 

        
        <div class = "form">
        <form method="Post" action = "ParentPostJobRequest.php"> 


            <div class = "input_field">

            <label> Your kid's first name : </label> <br>

                <input type = "text" name = "kidfirst_name" class = "input" required>
                
            </div>

              <div class = "input_field">

            <label> Your kid's last name : </label> <br>

                <input type = "text" name = "kidlast_name" class = "input" required> 
                
            </div>


             <div class = "input_field">

            <label> Your kid's gender : </label> <br>

                <input type = "radio" name = "kidgender" value= "female" > female <br>
                <input type = "radio" name = "kidgender" value = "male" > Male
                
            </div>


            

                
                
            





             
             <div class = "input_field"> 

           <label> Your kid's age : </label>

                <select name = "kidage"  class="custom_select" required>

                    <option> - </option>
                    <option value="0"> under 1 year </option>
                    <option value="1">  1 year </option>
                    <option value="2"> 2 years </option>
                    <option value="3"> 3 years </option>
                    <option value="4"> 4 years </option>
                    <option value="5"> 5 years </option>
                    <option value="6"> 6 years </option>
                
                </select>
            </div> <br>
  


        <div class = "input_field">

        <label> Besides insuring your child's safety and having fun with them, what other services would you like to have ? </label> <br> <br>

         
        <input type = "checkbox" name = "service[]" value = "infants" class="check" > Infants care including feeding, diapering, and dressing <br>
        <input type = "checkbox" name = "service[]" value = "meals" class="check"> Preparing meals <br>
        <input type = "checkbox" name = "service[]" value = "homework" class="check" > Hepling with homework <br>
        <input type = "checkbox" name = "service[]" value = "laundary" class="check" >  Laundary and light housework <br>
        <input type = "checkbox" name = "service[]" value = "transport" class="check" > Transporting my child <br> <br>
        
        </div>


        <div class = "input_field">

        <label> Duration : </label>
            <select name = "duration" class="custom_select" required>

                    <option> - </option>
                    <option value="2"> 2 hours </option>
                    <option value="3"> 3 hours </option>
                    <option value="4"> 4 hours </option>
                    <option value="5"> 5 hours </option>
                    <option value="6"> 6 hours </option>
                    <option value="24"> full day </option>
                
                </select>
            </div>
      
       <br><br>
	
      <center> <div class = "inputfield" >
       
      <input type="submit" name="submit" value="Post" class="btn"> </div> 
	   
   
   </center> 


    </form> </div>

    </div>



      
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
