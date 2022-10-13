<?php
$con = mysqli_connect('localhost','id17897165_localhost','(>1Ge*{J5*9o-57%');

mysqli_select_db($con,'id17897165_first');

if(!$con){
    die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
}

?>