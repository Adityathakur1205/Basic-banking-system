<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANKING SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sendform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header_container">
        <header id="head">
            <ul id="ul1">                
                <li id="hid">BASIC BANKING SYSTEM</li>
                <li id="li_title">BASIC BANKING SYSTEM</li>
                <li class="litems"><a class="anav" href="index.html">Home</a></li>
                <li class="litems"><a class="anav" href="customers.php">Customers</a></li>
                <li class="litems"><a class="anav" href="send.php">Transfer</a></li>
                <li class="litems"><a class="anav" href="about.html">About</a></li>
            </ul>
        </header>
    </div>
    <hr>
    <h1>TRANSFER MONEY</h1>
    <div>
        <div id="divform">
            <form name ="myForm" onsubmit="return checkInp()" method="post" action="process.php" >
            <label for="Sender"> Select Sender</label>
              <select name="sender">
                <?php
                     include 'conn.php';
                     $q = "select * from one ";
                     $query = mysqli_query($con,$q);
                     while($res = mysqli_fetch_array($query))
                    {
                ?>
                     <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
                <?php  
                     }
                ?>
               </select>

              
               <label for="Sender"> Select Reciever</label>
               <select id="sender" name="reciever">
                 <?php
                      include 'conn.php';
                      $q = "select * from one ";
                      $query = mysqli_query($con,$q);
                     while($res = mysqli_fetch_array($query))
                      {
                 ?>
                      <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
                 <?php }
                 ?>
                </select>

                <label for="amount">Amount</label>
                <input id="amount" type="text" name="amount">
                
                <input type="submit" name="submit" value="Transfer amount">
              </form>
            </div>

            
    </div>
    <hr>
    <div class="footer">                 
       Created by - Aditya Thakur &copy;  <br>
       All rights reserved.&reg; 
       
    </div>


    <script>
        function checkInp()
{
var x=document.forms["myForm"]["amount"].value;
if (isNaN(x))
{
alert("Must input numbers");
return false;
}
}
    </script>
</body>
</html>