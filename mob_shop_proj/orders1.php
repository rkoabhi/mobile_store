<html>
<head>
<title>Orders Table</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("mob_shop7")or die(mysql_error());
	$str="Create Table Orders
	(
		order_no int auto_increment,
		cus_id int ,
		item_id int,
		quantity int,
		status varchar(50),
		primary key(order_no),
		foreign key(cus_id)references customers(cus_id),
		foreign key(item_id)references items(item_id)
	)";
	mysql_query($str) or die (mysql_error());
	mysql_close();
	echo"table created";
?>
<p><a href="aljdbase1.html">Back</a>
</body>
</html>