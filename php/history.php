<?php
   include ("connection.php");
   $query = "SELECT * FROM history_table";
  $result = $conn->query($query);
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transfer history</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../homepage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <style>
    

      .table__title{
    text-align: center;
    width: 100%;
}
td {
    background-color: gold;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}

.const__table {
    margin-left: auto;
    margin-right: auto;
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.lamp{
    margin-top:20px;
    padding: 5px;
}



      </style>
<body>
   
<div class="style" >
            
        
            
            <div class="nav" width='600px'>
                <nav>
                    
                    <ul>
                        
                        <li><a href="../index.html" style="color:yellow; text-decoration:none">home</a></li>
                       
     
                    </ul>
                </nav>
            </div>
        </div>

<section class="table" id="table">
                <div class="table__container ">
                    <h1 class="table__title ">Transfer History</h1>
                    <table class="const__table">
                        <tr>
                          <th>ID</th>
                            <th>Sender</th>
                            <th>Reciver</th>
                            <th>Money Transferd</th>
                            <th>Date&time</th>
                            

                         
                        </tr>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['ID'];?></td>
                                <td><?php echo $rows['Sender'];?></td>
                                <td><?php echo $rows['Receiver'];?></td>
                                <td><?php echo $rows['Amount'];?></td>
                                <td><?php echo $rows['Date/time'];?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
             
                </div>
              
            </section>
           

</body>
</html>