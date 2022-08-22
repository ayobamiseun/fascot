<?php
  include('connect.php');
          
        // Taking all 5 values from the form data(input)
        $news =  $_REQUEST['news'];
       
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO newsletter (email) VALUE ('$news')";
          
        if(mysqli_query($con, $sql)){
            // header("index.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close co$conection
        mysqli_close($con);
        ?>

        <H1>Thank You for subsc</H1>