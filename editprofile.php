<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<?php
session_start();

echo "<img src=".$_SESSION['Image']." style = "."width:100%".">"."<br>"."<br>";
echo "<h1><input type='text' id=Fname value='".$_SESSION['Firstname']."'>. </h1>" ;
echo "<h1><input type='text' id=Lname value='".$_SESSION['lastname']."'> </h1>" ;
echo "<p class=title><input type='text' id=Email value='".$_SESSION['email']."'> </p>" ;
echo "<p class=title><input type='text' id=Password value='".$_SESSION['password']."'> </p>" ;
echo "<p class=title2><input type='text' id=Phone_number value='".$_SESSION['Phone_Num']."'> </p>" ;
echo"<p> <button onclick=psave()>Save</button> </p>";

?>
<div id="test"></div>
<script>
    function psave(){
        alert('<?php echo $_SESSION["ID"]?>');
        // alert($('#Lname').val());
        // alert($('#Email').val());
        // alert($('#Password').val());
        // alert($('#Phone_number').val());
    jQuery.ajax(
        {
            url:"p.php",
            data:
            {   FN:$('#Fname').val(),
                LN:$('#Lname').val(),
                Email:$('#Email').val(),
                Password:$('#Password').val(),
                Phone_number:$('#Phone_number').val()},
            type:"post",
            success:function(data)
            {
                $("#test").html(data);
                location.reload();
            }


    });
  
  }
</script>