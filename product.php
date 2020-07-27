<!DOCTYPE html>
<html lang="en">
<head>
  <title>RSB Online Deals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
	
	
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
	<script src="js/JSLib.js">
	</script>

    <link rel="stylesheet" type="text/css" href="css/header.css" />
   


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

<div class="container"> 
<div class="row">    
<div class="col-sm-4 col-xd-4 col-md-4">
	 
	<form class = "needs-validation myform" action="" name="form1"   method="POST"  enctype ="multipart/form-data">
	<!--<input type="button" class="btn btn-info" value="Add Product" onclick="addProduct()">-->
	
				<div class='allprodt'>
					<table class="table clstrainy" style="border-radius: 20px;background-color:#ffffff">
						<th class="clsAdminHeading">
							Add Product Details
								
						</th>
						
					<tr class="ProductContent">
							<td>
								<div id="PrdtDlts" class="form-group col-xs-10"> 
									<label for="inputdefault">Prouct Details Info</label>
									<textarea class="form-control" type="text"   name="sPrdtDlts"  placeholder="Please Enter Product Details"></textarea>
								</div>
								

								<div id="cat" class="form-group col-xs-10"> 
								<?php
										
								
/* 										$dbrsb = mysqli_connect("localhost","root","");
									mysqli_select_db($dbrsb,'rsb');
									$catquery = mysqli_query($dbrsb,"select category_name from category order by id DESC");
									//$catquery = mysqli_query($dbrsb,"select category_name from category order by id DESC");


									while ($rows =mysqli_fetch_array($catquery))
									{

									$nickname = $rows['category_name'];

									  echo "<option value=\"\">" . $nickname . "</option>";
									 

									} */	
								?>
									<select class="form-control" name="category">
										<option value = "Eeletronics">Eeletronics</option>
										<option value = "Fashion">Fashion</option>
										<option value = "Season based shopping">Season based shopping</option>
										<option value = "Groceries">Groceries</option>
									</select>
								</div>
								<div id="img" class="form-group col-xs-10"> 
									<input class="form-control" type="text" name="prodlink" placeholder="Please Enter Product link" >
								</div>
								<div id="img" class="form-group col-xs-10"> 
									<input class="form-control-file" type="file" name="fileToUpload" >
								</div>
								<div class="form-group col-xs-10"> 
									<input  type="submit" name="submit" value = "submit" class = "btn-dark btn btn-primary btn-block"/> 
								</div>
							</td>
						</tr>
						</table>
					</div>
			</form>

			<?php
		
	if(isset($_POST["submit"]))
	{
		$PDtls = $_POST['sPrdtDlts'];
		$Plink = $_POST['prodlink'];
		//echo "text".$PDtls;
		$Pcategory = $_POST['category'];
		//echo "cat".$Pcategory;
		$target_dir = "/.upload_img/";
		$target_file = $_FILES["fileToUpload"]["name"];
		
		$dsm = "./upload_img/".$target_file;
		$dsm1 = "upload_img/".$target_file;
		//echo "img".$dsm1;
		 $up = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dsm1);
		// echo "".$up;
		 mysqli_query($dbrsb,"insert into product values('','$Pcategory','$PDtls','$Plink','$dsm1')");
		 
	}

	?>

			
</div>
				

<div class="col-sm-8 col-xd-8  col-md-8" >

<?php

$query = mysqli_query($dbrsb,"select * from product order by id DESC");
//$row = mysqli_num_rows($query);
while($result = mysqli_fetch_array($query))
{
	?>
	
			<div class = "gallery column" >
			
				<a href = "deleteproduct.php?Id=<?php echo $result['Id']?>">
					<i class="fa fa-window-close fa-5x " aria-hidden="true" style="margin-left: 170px;font-size:20px" ></i>
				</a>
				
				
				<div class=" clsimg">
				
				<?php 
					echo "<img src=".$result['product_img']." alt='img'  width='100px ' height='100px'  class=' img-fluid w-100 zoom img-thumbnail'/>";
				?>
			
						
				</div>
			
				<span data-role="recommend-description-snippet" class = " desc line-truncate" data-line-truncate="5"><?php echo $result["product_delts"] ;?>
				 <link style = "color:white"><?php echo $result["prod_link"];?></link> </span>
				
				
				
			</div>
<?php
}
?>

</div>
 </div>
</div>
 
<?php 
include('footer.php');
mysqli_close($dbrsb);
?>
	

</body>
</html>