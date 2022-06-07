<html>
    <style>
        .sidenav {
            height: 100%; /*Full-height: remove this if you want "auto" height*/
            width: 290px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 160; /* Stay at the top */
            right: 40;
            padding-top: 4px;
        }

        .items{
            height: 400px;
            width: 250;
            background-color: red;
            overflow: auto; /*for scrolling*/
        }
        .items h3{
            font-size: 25px;
            text-align:center;
        }
        .items label{
            line-height: 1.8;
        }
        .buttons input[type=button]{
            padding-left: 50px;
            padding-right: 50px;    
        }

        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #333;
            position: fixed;
            /* overflow: hidden; */
            top: 100px;
            right: 700px;
        }

        /* Style the links inside the navigation bar */
        .topnav label{
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav label:hover{
        background-color: #ddd;
        color: black;
        }
        /* Add a color to the active/current link */
        .topnav label.active{
            background-color: #04AA6D;
            color: white;
        }
    </style>
    <head>
        <script>var value; var breadid;</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    </head>
    <script>
        function additem(node)
        {
            let parent_node_id=node.parentNode.id; //section num
            let name_of_node=node.value; //name of node
            let insert_section_div="sec_"+parent_node_id+"_img"; // place to insert image

            let div=document.createElement('div'); // creates div that stores the selected image
            div.id=insert_section_div+name_of_node;
            div.innerHTML='<img src="'+node.id+'" alt="">';


            if(parent_node_id==breadid)
            {
                document.getElementById(insert_section_div).innerHTML=""; // removes other type of bread to add the new type
                document.getElementById(insert_section_div).append(div);
            }
            else
            {
                if(!node.checked) 
                {
                    document.getElementById(div.id).remove();
                }
                else
                {
                    document.getElementById("sec_2_img").append(div);
                    $(div).offset($("#sec_1_img").offset()); // add the created div on top of bread
                }

                $("#sec_2_img").children().each(function () { // loops on every child to recalculate new margins
                    $(this).offset($("#sec_1_img").offset());
                });
            }
        }
        
        function changetype(y)
        {
            // if(check()) {
                // alert(value);
                document.getElementById("nav"+value).className="";
                document.getElementById("sandwichtype"+value).style.display="none";
                value=y;
                document.getElementById("sandwichtype"+value).style.display="inline";
                document.getElementById("nav"+value).className="active";
            // }
        }
        function go(y){
            jQuery.ajax(
                {
                    url:"getsandwichitems.php",
                    data:
                    {
                        id:y,breadid:breadid
                    },
                    type:"post",
                    success:function(data)
                    {
                        $(".items").html(data);
                    }
                }
            );
        }
        function check(){
            if(document.getElementById("sec_1_img").childElementCount==0)
            {
                alert("You must choose a bread type first");
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>



    <body>
    <div class="topnav">
        <?php
            $conn= mysqli_connect("localhost","root","","restaurant_web_project");
            if($conn->connect_error) die("fatal error");

            $query ="SELECT * FROM `sandwich_types`";
            $result=$conn->query($query);
            $active=0;
            while($row=mysqli_fetch_array($result))
            {
                if($active==0)
                {
                    echo "<label class='active' id='nav".$row['ID']."' onclick='changetype(".$row['ID'].")'>".$row['Type']."</label>";
                    $active++;
                    echo "
                    <script>
                        value= ". $row['ID'].";
                        breadid= ". $row['ID'].";
                        go(".$row['ID'].");
                    </script>
                   ";
                }
                else
                  echo "<label id='nav".$row['ID']."' onclick='changetype(".$row['ID'].")'>".$row['Type']."</label>";
            }
            $conn->close();
        ?>
    </div>

    <div class ="sidenav"><!--el div ely feha kol 7aga -->
        <div class ="items"> <!-- div bta3et el items --> </div><br>
    </div><!-- END el div ely feha kol 7aga -->

    <div style="background-color: #DBF9FC;padding: 200px 440px;"><!-- makan el sowar -->
        <div id="sec_1_img" >  <!-- first section --></div> <!-- END first section -->
        <div id="sec_2_img" style="height: 100px;width: 200px;top:400px;">  <!-- 2nd section --></div> <!-- END 2nd section -->
    </div><!-- END   makan el sowar -->
    </body>    
</html> 