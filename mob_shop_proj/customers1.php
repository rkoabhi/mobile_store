<html>
<head>
<title>Customers Table</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("mob_shop7")or die(mysql_error());
	$str="Create Table Customers
	(
		cus_id int auto_increment,
		name varchar(30),
		address varchar(50),
		primary key(cus_id)
	)";
	mysql_query($str) or die (mysql_error());
	mysql_close();
	echo"table created";
?>
<p><a href="alj1.html">Back</a>
</body>
</html>