<?php
$connection = mysqli_connect('localhost', 'root');
if ($connection){
//    echo "connection successfull";
}
else{
    echo "no connection found";
}

mysqli_select_db($connection, 'customer');
$sender =$_POST['sender_info'];
$reciver =$_POST['reciver_info'];
$money =$_POST['money_given'];

$data = "INSERT INTO history_table (Sender,Receiver , Amount) VALUES ('$sender', '$reciver', '$money')";

mysqli_query($connection, $data);
header('location:transcationsuccesfull.php');



?>