
<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "searchtest");//Connecting to the sql database and creating an object called 'conn'
$sql = "SELECT * FROM menu WHERE Name_ LIKE '%".$_POST['name']."%'OR Ingredients LIKE '%".$_POST['name']."%'";// The sql query that fetches for name and ingredients that are sent from the other page
$result = mysqli_query($conn, $sql);//making the query into the sql database
if(mysqli_num_rows($result)>0)//Checking if there are still number of rows in the database to be searched
{
	while ($row=mysqli_fetch_array($result))//making the result of the query into an array and reserving it in the row variable
     {
		echo "<tr>
		          <td>".$row['Name_']."</td> 
		          <td>".$row['Ingredients']."</td>
		          <td>".$row['Price']."</td>
		          <td>".$row['Rating']."</td>
		        </tr>";// printing out the searched values that we found matching in the database in a table
	}
}
else//we didn't find the input values
{
	echo "<tr><td>0 results found</td></tr>";// we didn't find the values it will print out 0 results found
}

?>