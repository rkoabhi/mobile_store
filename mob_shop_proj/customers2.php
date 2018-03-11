<html>
<head>
<title> Insert data into Customers Table</title>
</head>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("mob_shop7")or die(mysql_error());
$cus_id=$_POST['cus_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$str="insert into Customers (cus_id,name,address)values('$cus_id','$name','$address')";
mysql_query($str) or die(mysql_error());
mysql_close();
echo"Record Inserted";
?>
<p><a href="alj1.html">BAck</a>
</body>
</html>