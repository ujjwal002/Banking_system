<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faster and secure way of money transfer</title>
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    .input-container {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }
    
    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white;
      min-width: 50px;
      text-align: center;
    }
    
    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }
    
    .input-field:focus {
      border: 2px solid dodgerblue;
    }
    
    /* Set a style for the submit button */
    .btn {
      background-color: dodgerblue;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .block:hover {
  background-color:yellow;
  color: black;
}
.margin{
    margin-left: 40px;
} 
.form1{
 margin-left:300px;
 }

 .block:hover {
  background-color:red;
  color: gold;
}
body
{
  background-image: url("bank4.jpg");
background-repeat: no-repeat;
}
</style>
</head>
<body>
<body>
        <!-- <img src ="bg123.jpeg"> -->
        <div class="style" >
            
        
            
            <div class="nav" width='600px'>
                <nav>
                    
                    <ul>
                        
                        <li><a href="index.html" style="color:yellow; text-decoration:none;">Home</a></li>
                        
     
                    </ul>
                </nav>
            </div>
        </div>
        
<div class="container">
 <center> <h4 style="color:gold;">Faster and secure way of money transfer</h4></center>
 <form action="php/transcation.php" method="POST">
   <div class="form-group col-md-6 form1">
      <label for="inputState"><h3 style="color:yellow">Sender</h3></label>
      <select id="inputState" class="form-control" name="sender_info">
        <option >From</option>
        <option>Grip bank</option>
        
      </select>
    </div>
     <div class="form-group col-md-6 form1">
      <label for="inputState"><h3 style="color:yellow">Reciver</h3></label>
      <select id="inputState" class="form-control" name="reciver_info">
        <option>To</option>
        <option>Bill Gates</option>
        <option>Mark zukerberg</option>
        <option>Elon musk</option>
        <option>Ujjwal kumar</option>
        <option>Hari om</option>
        <option>Virat kohli</option>
        <option>Ms dhoni </option>
        <option>Ratan Tata</option>
        <option>Sonu Sood</option>
        <option>Sharukh khan</option>
      </select>

      <div class="form-group">
    <label for="email"><h3 style="color:yellow">Balance</h3></label>
    <input  class="form-control" id="Balance" placeholder="Enter the amount to be Transfer" name="money_given">
  </div>
        <body> 
    
    






   <button type="submit"  class="btn block" style="background-color:black;">Tranfer now</button>

    </div></form>

    
    </div>
  
</body>
</html>