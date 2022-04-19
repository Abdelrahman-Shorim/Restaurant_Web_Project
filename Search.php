<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">//Including apis of google library </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">//Including cloudflare library</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">//Including bootstrapccdn library</script> 
</head>
<body>
<div class="jumbotron text-center">
  <h1>Grand Restuarnt</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search"> <!-- Making the text that is going to be used to search on and it's id "search"--->
      <table class="table table-hover">
      <thead>
<!-- 
Making the table Header 
and making them into 4 sections 
-->
        <tr>
          <th>Name</th>
          <th>Ingredients</th>
          <th>Price</th>
          <th>Rating</th>
        </tr>
      </thead>
      <tbody id="output"> 
        
      </tbody> <!--making the table body with the id="output" which the search results will appear on  -->

    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script> 
  $(document).ready(function(){
    //Starting the fuction so it can start the search 
    $("#search").keypress(function()
    //when the key is pressed the function is activated 
    {
      
      //using the class ajax with the type of POST , url of the other site which has the part of searching inside the database and the data is the values which come from the text form with the id "search"
      $.ajax({
        type:'POST',
        url:'searchtest.php',
        data:{
          name:$("#search").val(),//sending the data with values in the search to the url searchtest
        },
        success:function(data){
          $("#output").html(data);
        }// when the function returns the data values and it's successful. The data will be sent  to the table body with the id of "output" ("the data that came from the search function from the other site")
      });
    });
  });
</script>
</body>
</html>