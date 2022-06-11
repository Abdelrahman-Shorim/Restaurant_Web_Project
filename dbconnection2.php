<html>

<body>

successfully deleted
<?php

$conn = new mysqli("localhost","root","","restaurant_web_project");

if ($conn->connect_error) die ("Fatal connection error");

//echo "Connection ok <br>";


$query = "delete from items WHERE `items`.`I_ID` =".$_POST['I_ID'].";"; //preparation

$result = $conn->query($query);

if (!$result) die ("Fatal Query error");

//echo "Query ok <br>";




?>

</table>
</body>


</html>