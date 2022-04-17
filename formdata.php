<html>
    <body>
        <form method="post" action="datain.php" enctype="multipart/form-data" >
            enter the food name:
            <input type="text" name="name"><br>
            enter the food price:
            <input type="text" name="price"><br>
            select the type:
            <select name="type" size="1">
                <option value="breakfast">breakfast</option>
                <option value="lunch">lunch</option>
                <option value="dessert">dessert</option>
</select><br>
upload image: 
            <input type="file" name="pic" size="25" ><br>
            <input type="submit" value="upload">
</form>
</body>
</html>