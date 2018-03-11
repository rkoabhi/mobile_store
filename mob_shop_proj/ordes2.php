<html>
<head>
<title> Insert data into orders Table</title>
</head>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("mob_shop7")or die(mysql_error());
$order_no=$_POST['order_no'];
$cus_id=$_POST['cust'];
$item_id=$_POST['it'];
$quantity=$_POST['quantity'];
$status=$_POST['status'];
$str="insert into orders (order_no,cus_id,item_id,quantity,status)values('$order_no','$cus_id','$item_id','$quantity','$status')";
mysql_query($str) or die(mysql_error());
mysql_close();
echo"Record Inserted";
?>
<p><a href="alj1.html">BAck</a>
</body>
</html>