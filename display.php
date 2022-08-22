<?php
ob_start();
session_start();
?>

<?php
$row['countries'] ="";
if(!isset($_SESSION["valid"])){
    header("location: login.php");
}
require('connect.php');
$sql = "SELECT id, email FROM newsletter";
$result = $con->query($sql);

echo "<table class='table thead-dark '>
<thead class='thead-dark .bg-secondary'>
<tr>
<th scope='col'>Email</th>



</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td >" . $row['email'] . "</td>";
    // echo "<td>" . $row['lastname'] . "</td>";
    // echo "<td>" . $row['email'] . "</td>";
    // echo "<td>" . $row['phone'] . "</td>";
    // echo "<td>" . $row['countries'] . "</td>";
    // echo "<td>" . $row['Languages'] . "</td>";
    //  echo "<td>" . $row['Time'] . "</td>";
    echo "</tr>";
    // echo "<tr>";
    // echo "<td>" . $row['firstname'] . "</td>";
    // echo "<td>" . $row['lastname'] . "</td>";
    // echo "<td>" . $row['email'] . "</td>";
    // echo "<td>" . $row['phone'] . "</td>";
    // echo "<td>" . $row['countryname'] . "</td>";
    // echo "<td>" . $row['details'] . "</td>";
    // echo "</tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loveworld Television & Radio Influencers community</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">firstname</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      
    </tbody>
  </table> ';
    }
    ?>
</body>

</html>