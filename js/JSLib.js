var script = document.createElement('script');
script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
var xmlhttp;
if(window.XMLHttpRequest)
{
	xmlhttp = new XMLHttpRequest();
}
else
{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
function addProduct()
{
	$(".ProductContent").show();
	$(".Product").hide();
	$("#allProduct").hide();
	
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById('ProductContent').innerHTML = xmlhttp.responseText;
		}
	}
}
	
function display_product()
{
	var PrdtDlts = document.getElementsByName("sPrdtDlts")[0].value;
	alert("PrdtDlts"+PrdtDlts);
	var Pic = document.getElementsByName("sPic")[0].value;
	var formdata = new FormData(); 
	formdata.append("PrdtDlts",PrdtDlts);	
	alert("a1".PrdtDlts);
	formdata.append("Pic",Pic);	
	$(".ProductContent").hide();
	//$(".Product").show();
	$("#display").show();
	$("#allProduct").hide();
	xmlhttp.open('post','updatedProduct.php',true);
	alert("a2".PrdtDlts);
	xmlhttp.send(formdata);
	alert("a3".PrdtDlts);
	

	xmlhttp.onreadystatechange = function()
	{
		
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById('display').innerHTML = xmlhttp.responseText;
		}
	}

}
function display_Groceries()
{
	alert("a1")
	
	$(".scrl").hide();
	//$("#displayGroceries").show();
	$("#displayGroceries").css("display","block");
	//xmlhttp.open('post','product.php',true);
	//xmlhttp.send();
	xmlhttp.onreadystatechange = function()
	{
		
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById('displayGroceries').innerHTML = xmlhttp.responseText;
		}
	}
$(document).ready(function(){
    $("#button1").click(function(){  
       $('#demo').html('Demo text');
   });
});
}
