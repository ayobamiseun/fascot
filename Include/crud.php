<?php 
include('connect.php');
?>
<?php 
	session_start();
	// $db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$btc= "";
	// $address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$btc = $_POST['btc'];
		$usdt = $_POST['usdt'];

		mysqli_query($con, "INSERT INTO btc (pbtc) VALUES ('$btc')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT * FROM prices WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['btc'];
			$address = $n['usdt'];
		}
	}
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $btc = $_POST['btc'];
        $usdt = $_POST['usdt'];
    
        mysqli_query($con, "UPDATE prices SET btc='$btc', address='$usdt' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        // header('location: index.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM prices WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        // header('location: index.php');
    }
?>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<style>
    body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
</style>
<body>

<form method="post" action="" >
		<div class="input-group">
			<label>Btc</label>
			<input type="text" name="btc" value="">
		</div>
		<div class="input-group">
			<label>Usdt</label>
			<input type="text" name="usdt" value="">
		</div>
		<div class="input-group">
        <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

<!-- // modified form fields -->
<input type="text" name="btc" value="<?php echo $btc; ?>">
<input type="text" name="usdt" value="<?php echo $usdt; ?>">
	</form>


<?php $results = mysqli_query($con, "SELECT * FROM prices"); ?>

<table>
	<thead>
		<tr>
			<th>Btc</th>
			<th>USDt</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['btc']; ?></td>
			<td><?php echo $row['usdt']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


</body>
</html>