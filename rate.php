<?php 
 include('connect.php');
?>
<?php 
 // Taking all 5 values from the form data(input)
 $btc = "";
                if( isset( $_REQUEST['btc'])) {
                  $btc = $_REQUEST['btc']; 
                } 
              // $news =  $_REQUEST['news'];
       
          
              // Performing insert query execution
              // here our table name is college
              $sql = "INSERT INTO btc (pbtc) VALUE ('$btc')";
                
              if(mysqli_query($con, $sql)){
                  // header("index.php");
              } else{
                  echo "ERROR: Hush! Sorry $sql. " 
                      . mysqli_error($con);
              }
                
              // Close co$conection
            //   mysqli_close($con);
              $usdt = "";
                if( isset( $_REQUEST['usdt'])) {
                  $usdt = $_REQUEST['usdt']; 
                } 
              // $news =  $_REQUEST['news'];
       
          
              // Performing insert query execution
              // here our table name is college
              $sql = "INSERT INTO usdt (pusdt) VALUE ('$usdt')";
                
              if(mysqli_query($con, $sql)){
                  // header("index.php");
              } else{
                  echo "ERROR: Hush! Sorry $sql. " 
                      . mysqli_error($con);
              }
                
              // Close co$conection
              mysqli_close($con);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
 
</head>
<body>
<div class="container">
    <form action="" method="post">
        <input type="phone" name="btc">
        <button class="btn"> Update Btc </button>
    </form>
    <form action="" method="post">
        <input type="phone" name="pusdt">
        <button class="btn"> Update Eth </button>
    </form>
    <form action="" method="post">
        <input type="phone" name="btc">
        <button class="btn"> Update Eth </button>
    </form>
</div>
</body>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
<script src="https://unpkg.com/popper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> -->


</html>