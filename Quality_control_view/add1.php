<html>
    <body>
        <form method="post" action="add2.php" enctype="multipart/form-data"  onsubmit="return check()">
            Name:        <input type="text" name="Name" id="Name"><br>
            Description: <input type="text" name="Description" id="Description"><br>
            price:       <input type="text" name="Price" id="Price"><br>
            image:       <input type="file" name="img" size="25" id="img" ><br>
            type:
            <select name="type" size="1" id="type">
                <option value="Choose">Choose</option>
                <option value="Appetizers">Appetizers</option>
                <option value="Beef">Beef</option>
                <option value="Chicken">Chicken</option>
                <option value="Desserts">Desserts</option>
                <option value="Drinks">Drinks</option>
                <option value="Kids">Kids</option>
                <option value="Pasta">Pasta</option>
                <option value="Pizza">Pizza</option>
                <option value="Salads">Salads</option>
                <option value="Sandwiches">Sandwiches</option>
                <option value="Seafood">Seafood</option>
                <option value="Soups">Soups</option>
                <option value="Veal">Veal</option>
            </select><br>
            <input type="submit" value="upload">
        </form>
    </body>

    <script>
        function check()
        {
            if(document.getElementById("Name").value=="")
            {
                alert("Name is empty");
                return false;
            }
            if(document.getElementById("Description").value=="")
            {
                alert("Description is empty");
                return false;
            }
            if(document.getElementById("Price").value==""||isNaN(document.getElementById("Price").value)==true)
            {
                alert("Price is empty");
                return false;
            }
            if(document.getElementById("img").value=="")
            {
                alert("img is empty");
                return false;
            }
            if(document.getElementById("type").value=="Choose")
            {
                alert("choose is empty");
                return false;
            }
            return true;
        }
    </script>
</html>