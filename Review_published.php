
                                                					<?php
		include("connection.php");


	
	
	if(isset($_POST['review'])){


$booking_id=$_POST['booking_id'];

$sitter_id=$_POST['sitter_id'];

$comment=$_POST['comment'];

$stars=$_POST['rate'];

$status=1;
$query = "update booking set task_status='$status' where booking_id='$booking_id'";
$run=mysqli_query($connection,$query);


$qury="insert into reviews (booking_id,sitter_id,stars,comment ) values ('$booking_id','$sitter_id','$stars','$comment')";
		$reg=mysqli_query($connection, $qury);

echo "
		<script>
			window.alert('Add Review Successfully!');
			window.location.href = 'Current_Bookings.php';
		</script>
		";


}
?>
