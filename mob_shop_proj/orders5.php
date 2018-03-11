<html>
<head><title>Displaying Information</title>
<h1>Orders are</h1>
<style>
	table,th,td {
			border:2px solid black;
			border-collapse:collapse;
			border-color:blue;
		}
		th,td{
			padding:10px;
		          }
</style></head>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("mob_shop7") or die(mysql_error());
$sql = "Select customers.cus_id,customers.name,orders.cus_id\n"
             ."From customers,orders\n"
             ."Where customers.cus_id=orders.cus_id\n"
             ."Order by cus_id";
echo"<table border='1' >";

echo"<tr><th>Customer id</th><th>customer name</th>";

while($row=mysql_fetch_assoc($sql))
{
	echo "<tr>";
	foreach($row as $fields)
	{
		echo "<td>".$fields."</td>";
	}
	echo"</tr>";
}
echo"</table>";
mysql_close();
?>
<h1>Records Displayed</h1>
</body>
</html>
	