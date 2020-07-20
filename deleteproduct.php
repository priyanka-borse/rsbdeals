<?php
session_start();
$dbrsb = mysqli_connect("localhost","root","");
mysqli_select_db($dbrsb,'rsb');
//require_once("product.php")


$PId = $_GET['Id'];

$query = mysqli_query($dbrsb,"delete  from product where id  = $PId");


?>
<script type = "text/javascript">
window.location="product.php";
	</script>
