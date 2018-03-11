<html>
<head><title>Displaying Information</title>
<h1>  Item Records are</h1>
<style>
	table,th,td {
			border:2px solid black;
			border-collapse:collapse;
			border-color:blue;
		}
		th,td{
			padding:10px;
		          }
</style>

</head>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("mob_shop7") or die(mysql_error());
$qStr="Select * from items";
$rs=mysql_query($qStr) or die(mysql_error());
echo"<table border='1'>";
echo"<tr><th>item_id</th><th>name1</th><th>price</th></tr>";

while($row=mysql_fetch_assoc($rs))
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