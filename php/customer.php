<?php
   include ("connection.php");
   $query = "SELECT * FROM customer_table";
  $result = $conn->query($query);
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Table</title>
    <link rel="stylesheet" href="../homepage.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            
        </style>
</head>
<body>
<div class="style" >
            
        
            
            <div class="nav" width='600px'>
                <nav>
                    
                    <ul>
                        
                        <li ><a href="../homepage.html">Home</a></li>
     
                    </ul>
                </nav>
            </div>
        </div>
        <section class="table" id="table">
                <div class="table__container ">
                    <h1 class="table__title ">Customer's Information</h1>
                    <table class="const__table" style="border-collapse:collapse;">
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>contact number</th>
                            <th>Email</th>
                            <th>Account number</th>
                            <th>Current balance</th>
                            <th>pay<a></th>
                            

                         
                        </tr>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['Id'];?></td>
                                <td><?php echo $rows['Customer name'];?></td>
                                <td><?php echo $rows['Address'];?></td>
                                <td><?php echo $rows['Contact number'];?></td>
                                <td><?php echo $rows['Email'];?></td>
                                <td><?php echo $rows['Account number'];?></td>
                               
                                <td><?php echo $rows['Current balance'];?></td>
                                <td><a href="../transfer.php" class="button" style="color:red; font-weight: bold;"><?php echo $rows['pay'];?><a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>

                </div>

            </section>
    
</body>
</html>