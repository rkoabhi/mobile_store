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
<form action="ordes2.php" method="post">
<table borders="1" border="green"bgcolor="orange">
<tr>
<td>Enter the order_no</td> <td> <input type="text" name="order_no"></td>
</tr>
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
<td>Select the item_id</td><td>
	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("mob_shop7")or die(mysql_error());
		$str="select item_id,name1 from items";
		$rs= mysql_query($str) or die(mysql_error());
		echo "<select id='it' name='it'>";
		while($row = mysql_fetch_array($rs) )
		{
			echo "<option value=" . $row[name1] . ">" . $row[item_id]. "</option>";
		}
		mysql_close();
	?>
</td>
</tr>

















<tr>
<td>Enter the quantity</td><td><input type="text" name="quantity"</td>
</tr>
<tr>
<td>Select the status</td><td>
<select id="stat" name="stat">
<option value="1">Shipped</option>
<option value="2">Delivered</option>
<option value="3">In Process</option>
</select>
</td>



</tr>


</table>

<p><input type="submit" value="save"/>
</form>
</body>
</html>
