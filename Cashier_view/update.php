<html>

<body>

<?php

$conn = new mysqli("localhost","root","","restaurant_web_project");

if ($conn->connect_error) die ("Fatal connection error");

//echo "Connection ok <br>";


$query = "UPDATE `items` SET `Name` = '".$_POST['Name']."', `Description` = '".$_POST['Description']."', `Price` = '".$_POST['Price']."', `img` = '".$_POST['img']."', `I_Type` = '".$_POST['I_Type']."'  WHERE `items`.`I_ID` = '".$_POST['I_ID']."'";

echo $query;
echo "<br>";

$result = $conn->query($query);

if (!$result) die ("Fatal Query error");

?>

</body>

</html>