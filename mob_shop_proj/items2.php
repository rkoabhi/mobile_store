<html>
<head>
<title> Insert data into items Table</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("mob_shop7")or die(mysql_error());
	$item_id=$_POST['item_id'];
	$name1=$_POST['it1'];
	$price=$_POST['price'];
	$str="insert into items (item_id,name1,price)values('$item_id','$name1','$price')";	
	mysql_query($str) or die(mysql_error());
	mysql_close();
	echo"Record Inserted";
?>
<p><a href="alj1.html">BAck</a>
</body>
</html>