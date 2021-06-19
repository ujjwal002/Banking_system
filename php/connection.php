<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";
    

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "Connection successful";
    }
    else{
        echo "Connection Failed".mysqli_connect_error();
    }
?>

