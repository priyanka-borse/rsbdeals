
<html><head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; media-src *" />
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/JSLib.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
	
    <title>Hello World</title>
	<script>
	</script>
</head>
<body>

<?php 
session_start();
//require_once ("product.php");
echo "Hello";
$PrdtDlts = $_REQUEST['PrdtDlts'];
echo "PrdtDlts".$PrdtDlts
//$Pic = $_REQUEST['Pic'];
?>

<div class="col-sm-8 col-xd-8 scrl">
	<table class = "table-responsive">
	<tr>
		<td>
			<p><span id='display'></span></p>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $PrdtDlts;?>
		</td>
	</tr>
	
	</table>
</div>

	
</body>
</html>