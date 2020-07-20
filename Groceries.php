
<html><head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <!--<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; media-src *" />-->
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/JSLib.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Hello World</title>
	<script src="js/JSLib.js"></script>
	<script>
	</script>
</head>
<body>


<?php 
//session_start();
include('header.php'); 
	
?>
<?php
$dbrsb = mysqli_connect("localhost","root","");
mysqli_select_db($dbrsb,'rsb');


?>

   
	<div class="col-sm-4 col-xd-4">
	<?php include "leftsideMenu.php" ?>
	</div>
				

<div class="col-sm-8 col-xd-8 scrl" id= "allProduct">

<?php
$query = mysqli_query($dbrsb,"SELECT * FROM product WHERE category_name LIKE 'Groceries'");
//$query = mysqli_query($dbrsb,"select * from product order by id DESC");
//$row = mysqli_num_rows($query);
while($result = mysqli_fetch_array($query))
{

	

	?>

			<div class="column" id = "displayGroceries">
				<div class="product-image">
				<?php
					echo "<img src=".$result['product_img']." alt='img'  width='100px ' height='100px'/>";
					?>
				<?php	//echo '<img src="data:upload_img/jpg;base64,'.base64_encode($result['product_img'] ).'" height="200" width="200"/>';?>
						<p><?php echo $result["product_delts"] ;?></p>   
				</div>
			</div>
		

			
<?php
}
?>
    </div>
  </div>
</div>
<?php include('footer.php'); 
mysqli_close($dbrsb);
?>
	
</body>
</html>