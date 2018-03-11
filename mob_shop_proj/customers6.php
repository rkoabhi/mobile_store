<html>
<head>
<title>Mobile shop</title>
<style>
	table,th,td {
			border:2px solid black;
			border-collapse:collapse;
		}
		th,td{
			padding:10px;
		          }
</style>
</head>
<body>
<form action="orders6.php" method="post">
<table borders="1" border="green"bgcolor="orange">
<tr>
<td>Select Customer</td><td>
	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("mob_shop7")or die(mysql_error());
		$str="select cus_id, name from customers";
		$rs= mysql_query($str) or die(mysql_error());
		echo "<select id='cust' name='cust'>";
		while($row = mysql_fetch_array($rs) )
		{
			echo "<option value=" . $row[cus_id] . ">" . $row[name] . "</option>";
		}
		mysql_close();
	?>


</td>
</tr>
<tr>
<td>Select the item name</td><td>
	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("mob_shop7")or die(mysql_error());
		$str="select item_id,name1 from items";
		$rs= mysql_query($str) or die(mysql_error());
		echo "<select id='it1' name='it1'>";
		while($row = mysql_fetch_array($rs) )
		{
			echo "<option value=" . $row[item_id] . ">" . $row[name1]. "</option>";
		}
		mysql_close();
	?>
</td>
</tr>


</table>

<p><input type="submit" value="save"/>
</form>
</body>
</html>
