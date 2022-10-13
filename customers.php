<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="customers.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body class="body">
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
    Customer database : 
    <div class="tbl">
        <table class="table1" id="customers">
            <tr class="headings_row"> 
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th> 
                <th>Balance</th>
            </tr>
    <?php
        include 'conn.php';
        $q = "select * from one ";
        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query))
        {
    ?>       
            <tr class="row1">
                <td> <?php echo $res['id']; ?></td>
                <td> <?php echo $res['name']; ?></td>
                <td> <?php echo $res['email']; ?></td>
                <td> <?php echo $res['phone']; ?></td>
                <td> <?php echo $res['balance']; ?></td>
            </tr>
    <?php
        }
    ?>
        </table>
    </div>
    <div><hr>
        Created by - Aditya Thakur  &copy;  <br>
        All rights reserved.&reg; 
        
    </div>
    
</body>
</html>