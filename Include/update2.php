<?php
include_once 'connect.php';
$result = mysqli_query($con,"SELECT * FROM price");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>no</td>
		<td>Btc</td>
		<td>usdt</td>
		<td>eth</td>
		<td>steam</td>
		<td>amazon</td>
        <td>itunes</td>
		<td>ebay/td>
		<td>val</td>
        <td>pay</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["btc"]; ?></td>
		<td><?php echo $row["usdt"]; ?></td>
		<td><?php echo $row["eth"]; ?></td>
		<td><?php echo $row["steam"]; ?></td>
        <td><?php echo $row["amazon"]; ?></td>
		<td><?php echo $row["itunes"]; ?></td>
		<td><?php echo $row["ebay"]; ?></td>
		<td><?php echo $row["val"]; ?></td>
		<td><?php echo $row["pay"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>