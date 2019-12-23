

<?php

session_start();
require('db.php');
$con = getConnection();

$comment= $_POST['comment'];
$query1 = "insert into comments values('{$commentid}','{$videoid}', '{$comment}', '{$posterid}', '{$postedby}','{$status}')";

$result1 =  mysqli_query($con, $query1);


header("Location:index.php?status=false");
exit();
?>