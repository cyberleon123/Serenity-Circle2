<?php
$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,"donations");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>