<?php

if(isset($_POST['delete_id'])){
	$delete_id=htmlspecialchars($_POST['delete_id']);
	include('includes/dbh.php');
	$STH=$DBH->query("DELETE FROM todo_table where id='$delete_id'");
	echo "Well done! You are progressing well";



}
else {
	?>
	<meta http-equiv="refresh" content="0; url=index.php" />

<?php echo "Redirecting back to Homepage";
}
?>

<div>

	Redirecting back to homepage

</div>
<meta http-equiv="refresh" content="0; url=index.php" />