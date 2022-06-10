<?php

use LDAP\Result;

session_start();
?>
<?php $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "restaurant_web_project";

 $conn = new mysqli($servername, $username, $password, $dbname);
$sql="Delete From order_items WHERE O_ID='$_POST[O_ID]' ";
$sql2="Delete From `order` WHERE O_ID='$_POST[O_ID]'";
$result=$conn->query($sql);
if(!$result){echo"errorez";}
$result2=$conn->query($sql2);
if(!$result2)
echo"errorew";

?>
