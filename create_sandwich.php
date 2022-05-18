<html>
    <style>
        .sidenav {
            height: 100%; /*Full-height: remove this if you want "auto" height*/
            width: 290px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 60; /* Stay at the top */
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
            overflow: hidden;
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
        <script>var value=1;</script></head>
    <!-- <script src='http://code.jquery.com/jquery-3.2.1.min.js'></script>  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <body>

    <div class="topnav">
        <label class="active" id="nav1" onclick="go(1)">Bread</label>
        <label class="" id="nav2" onclick="go(2)">Protein</label>
        <label class="" id="nav3" onclick="go(3)">Cheese</label>
        <label class="" id="nav4" onclick="go(4)">Toppings</label>
        <label class="" id="nav5" onclick="go(5)">Sauces</label>
    </div>


        <div class ="sidenav"><!--el div ely feha kol 7aga -->
            <div class ="items"> <!-- div bta3et el items -->
                <div id="1"> <!-- awel section "Bread section" -->

                    <div> <!--  title bta3 el section -->
                        <h3>Bread Type</h3><hr>
                    </div> <!-- END title bta3 el section -->

                    <div><!-- el list bta3et el bread -->
                        <!-- <input type="radio" id="CIABATA" name="Bread_Type" value="CIABATA" onclick="additem(this)">
                        <label for="CIABATA">CIABATA</label><br> -->

                        <!-- <input type="radio" id="SEMOLINA" name="Bread_Type" value="SEMOLINA" onclick="additem(this)">
                        <label for="SEMOLINA">SEMOLINA</label><br> -->

                        <!-- <input type="radio" id="MULTI-GRAIN" name="Bread_Type" value="MULTI-GRAIN" onclick="additem(this)">
                        <label for="MULTI-GRAIN">MULTI-GRAIN</label><br> -->

                        <input type="radio" id="RYE" name="Bread_Type" value="RYE" onclick="additem(this)">
                        <label for="RYE">RYE</label><br>
                        
                        <input type="radio" id="CROISSANT" name="Bread_Type" value="CROISSANT" onclick="additem(this)">
                        <label for="CROISSANT">CROISSANT</label><br>

                        <input type="radio" id="WHOLE_WHEAT" name="Bread_Type" value="WHOLE_WHEAT" onclick="additem(this)">
                        <label for="WHOLE_WHEAT">WHOLE WHEAT</label><br>

                        <input type="radio" id="WHITE" name="Bread_Type" value="WHITE" onclick="additem(this)">
                        <label for="WHITE">WHITE</label><br>

                        <!-- <input type="radio" id="WHOLE_WHEAT_WRAP" name="Bread_Type" value="WHOLE_WHEAT_WRAP" onclick="additem(this)">
                        <label for="WHOLE_WHEAT_WRAP">WHOLE WHEAT WRAP</label><br> -->

                        <!-- <input type="radio" id="LETTUCE_WRAP" name="Bread_Type" value="LETTUCE_WRAP" onclick="additem(this)">
                        <label for="LETTUCE_WRAP">LETTUCE WRAP</label><br> -->
                        
                        <input type="radio" id="GLUTEN_FREE" name="Bread_Type" value="GLUTEN_FREE" onclick="additem(this)">
                        <label for="GLUTEN_FREE">GLUTEN FREE</label>
                    </div><!-- END el list bta3et el bread -->

                </div><!-- END awel section "Bread section" -->
                <div id="2" style="display: none;"> <!-- 2nd section "Protein" -->

                    <div><!--  title bta3 el section -->
                        <h3>Protein</h3><hr>
                    </div><!-- END title bta3 el section -->

                    <div><!-- el list bta3et el bread -->
                        <input type="checkbox" id="TURKEY" name="Protein_Type" value="TURKEY" onchange="additem(this)">
                        <label for="TURKEY">TURKEY</label><br>

                        <input type="checkbox" id="ROAST_BEEF" name="Protein_Type" value="ROAST_BEEF" onchange="additem(this)">
                        <label for="ROAST_BEEF">ROAST BEEF</label><br>

                        <input type="checkbox" id="HAM" name="Protein_Type" value="HAM" onchange="additem(this)">
                        <label for="HAM">HAM</label><br>
                        
                        <input type="checkbox" id="PROSCIUTTO" name="Protein_Type" value="PROSCIUTTO" onchange="additem(this)">
                        <label for="PROSCIUTTO">PROSCIUTTO</label><br>

                        <input type="checkbox" id="CORNED_BEEF" name="Protein_Type" value="CORNED_BEEF" onchange="additem(this)">
                        <label for="CORNED_BEEF">CORNED BEEF</label><br>

                        <input type="checkbox" id="PASTRAMI" name="Protein_Type" value="PASTRAMI" onchange="additem(this)">
                        <label for="PASTRAMI">PASTRAMI</label><br>

                        <input type="checkbox" id="GENOA_SALAMI" name="Protein_Type" value="GENOA_SALAMI" onchange="additem(this)">
                        <label for="GENOA_SALAMI">GENOA SALAMI</label><br>
                        
                        <input type="checkbox" id="SOPPRESSATA" name="Protein_Type" value="SOPPRESSATA" onchange="additem(this)">
                        <label for="SOPPRESSATA">SOPPRESSATA</label><br>

                        <input type="checkbox" id="CAPOCOLLO" name="Protein_Type" value="CAPOCOLLO" onchange="additem(this)">
                        <label for="CAPOCOLLO">CAPOCOLLO</label><br>

                        <input type="checkbox" id="PEPPERONI" name="Protein_Type" value="PEPPERONI" onchange="additem(this)">
                        <label for="PEPPERONI">PEPPERONI</label><br>

                        <input type="checkbox" id="BAKED_CHICKEN" name="Protein_Type" value="BAKED_CHICKEN" onchange="additem(this)">
                        <label for="BAKED_CHICKEN">BAKED CHICKEN</label><br>
                        
                        <input type="checkbox" id="BACON" name="Protein_Type" value="BACON" onchange="additem(this)">
                        <label for="BACON">BACON</label><br>

                        <input type="checkbox" id="CHICKEN_SALAD" name="Protein_Type" value="CHICKEN_SALAD" onchange="additem(this)">
                        <label for="CHICKEN_SALAD">CHICKEN SALAD</label><br>

                        <input type="checkbox" id="TUNA_SALAD" name="Protein_Type" value="TUNA_SALAD" onchange="additem(this)">
                        <label for="TUNA_SALAD">TUNA SALAD</label><br>
                        
                        <input type="checkbox" id="EGG_SALAD" name="Protein_Type" value="EGG_SALAD" onchange="additem(this)">
                        <label for="EGG_SALAD">EGG SALAD</label><br>

                    </div><!-- END el list bta3et el bread -->

                </div><!-- END 2nd section "Protein" -->
                <div id="3" style="display: none;"> <!-- 3rd section "Cheese" -->

                    <div><!--  title bta3 el section -->
                        <h3>Cheese</h3><hr>
                    </div><!-- END title bta3 el section -->

                    <div><!-- el list bta3et el Cheese -->
                        <input type="checkbox" id="SWISS" name="Cheese_Type" value="SWISS" onchange="additem(this)">
                        <label for="SWISS">SWISS</label><br>

                        <input type="checkbox" id="PROVOLONE" name="Cheese_Type" value="PROVOLONE" onchange="additem(this)">
                        <label for="PROVOLONE">PROVOLONE</label><br>

                        <input type="checkbox" id="MOZZARELLA" name="Cheese_Type" value="MOZZARELLA" onchange="additem(this)">
                        <label for="MOZZARELLA">MOZZARELLA</label><br>

                        <input type="checkbox" id="CHEDDAR" name="Cheese_Type" value="CHEDDAR" onchange="additem(this)">
                        <label for="CHEDDAR">CHEDDAR</label><br>
                        
                        <input type="checkbox" id="PEPPER_JACK" name="Cheese_Type" value="PEPPER_JACK" onchange="additem(this)">
                        <label for="PEPPER_JACK">PEPPER_JACK</label><br>

                        <input type="checkbox" id="MUENSTER" name="Cheese_Type" value="MUENSTER" onchange="additem(this)">
                        <label for="MUENSTER">MUENSTER</label><br>

                        <input type="checkbox" id="AMERICAN" name="Cheese_Type" value="AMERICAN" onchange="additem(this)">
                        <label for="AMERICAN">AMERICAN</label><br>

                        <input type="checkbox" id="BRIE" name="Cheese_Type" value="BRIE" onchange="additem(this)">
                        <label for="BRIE">BRIE</label><br>
                        
                        <input type="checkbox" id="RICOTTA" name="Cheese_Type" value="RICOTTA" onchange="additem(this)">
                        <label for="RICOTTA">RICOTTA</label><br>

                        <input type="checkbox" id="PARMESAN" name="Cheese_Type" value="PARMESAN" onchange="additem(this)">
                        <label for="PARMESAN">PARMESAN</label><br>

                        <input type="checkbox" id="FETA" name="Cheese_Type" value="FETA" onchange="additem(this)">
                        <label for="FETA">FETA</label><br>

                    </div><!-- END el list bta3et el Cheese -->

                </div><!-- END 3rd section "Cheese section" -->
                <div id="4" style="display: none;"> <!-- 4th section "Toppings" -->

                    <div><!--  title bta3 el section -->
                        <h3>Toppings</h3><hr>
                    </div><!-- END title bta3 el section -->

                    <div><!-- el list bta3et el Toppings -->
                        <input type="checkbox" id="TOMATOES" name="Toppings" value="TOMATOES" onchange="additem(this)">
                        <label for="TOMATOES">TOMATOES</label><br>

                        <input type="checkbox" id="LETTUCE" name="Toppings" value="LETTUCE" onchange="additem(this)">
                        <label for="LETTUCE">LETTUCE</label><br>

                        <input type="checkbox" id="ONIONS" name="Toppings" value="ONIONS" onchange="additem(this)">
                        <label for="ONIONS">ONIONS</label><br>

                        <input type="checkbox" id="ARUGULA" name="Toppings" value="ARUGULA" onchange="additem(this)">
                        <label for="ARUGULA">ARUGULA</label><br>
                        
                        <input type="checkbox" id="SPINACH" name="Toppings" value="SPINACH" onchange="additem(this)">
                        <label for="SPINACH">SPINACH</label><br>

                        <input type="checkbox" id="KALE" name="Toppings" value="KALE" onchange="additem(this)">
                        <label for="KALE">KALE</label><br>

                        <input type="checkbox" id="ALFALFA_SPROUTS" name="Toppings" value="ALFALFA_SPROUTS" onchange="additem(this)">
                        <label for="ALFALFA_SPROUTS">ALFALFA SPROUTS</label><br>

                        <input type="checkbox" id="CUCUMBERS" name="Toppings" value="CUCUMBERS" onchange="additem(this)">
                        <label for="CUCUMBERS">CUCUMBERS</label><br>
                        
                        <input type="checkbox" id="PICKLES" name="Toppings" value="PICKLES" onchange="additem(this)">
                        <label for="PICKLES">PICKLES</label><br>

                        <input type="checkbox" id="MUSHROOMS" name="Toppings" value="MUSHROOMS" onchange="additem(this)">
                        <label for="MUSHROOMS">MUSHROOMS</label><br>

                        <input type="checkbox" id="OLIVES" name="Toppings" value="OLIVES" onchange="additem(this)">
                        <label for="OLIVES">OLIVES</label><br>

                        <input type="checkbox" id="BANANA_PEPPERS" name="Toppings" value="BANANA_PEPPERS" onchange="additem(this)">
                        <label for="BANANA_PEPPERS">BANANA_PEPPERS</label><br>

                        <input type="checkbox" id="JALAPENOS" name="Toppings" value="JALAPENOS" onchange="additem(this)">
                        <label for="JALAPENOS">JALAPENOS</label><br>

                        <input type="checkbox" id="ROASTED_RED_PEPPERS" name="Toppings" value="ROASTED_RED_PEPPERS" onchange="additem(this)">
                        <label for="ROASTED_RED_PEPPERS">ROASTED RED PEPPERS</label><br>

                        <input type="checkbox" id="SLICED_APPLE" name="Toppings" value="SLICED_APPLE" onchange="additem(this)">
                        <label for="SLICED_APPLE">SLICED_APPLE</label><br>
                        
                        <input type="checkbox" id="COLESLAW" name="Toppings" value="COLESLAW" onchange="additem(this)">
                        <label for="COLESLAW">COLESLAW</label><br>

                        <input type="checkbox" id="SAUERKRAUT" name="Toppings" value="SAUERKRAUT" onchange="additem(this)">
                        <label for="SAUERKRAUT">SAUERKRAUT</label><br>

                        <input type="checkbox" id="KETTLE_COOKED_CHIPS" name="Toppings" value="KETTLE_COOKED_CHIPS" onchange="additem(this)">
                        <label for="KETTLE_COOKED_CHIPS">KETTLE_COOKED_CHIPS</label><br>
                        
                        <input type="checkbox" id="AVOCADO" name="Toppings" value="AVOCADO" onchange="additem(this)">
                        <label for="AVOCADO">AVOCADO</label><br>
                        
                        

                    </div><!-- END el list bta3et el Toppings -->

                </div><!-- END 4th section "Cheese section" -->
                <div id="5" style="display: none;"> <!-- 5th section "Sauces" -->

                    <div><!--  title bta3 el section -->
                        <h3>Sauces</h3><hr>
                    </div><!-- END title bta3 el section -->

                    <div><!-- el list bta3et el Sauces -->
                        <input type="checkbox" id="MAYONNAISE" name="Sauces" value="MAYONNAISE" onchange="additem(this)">
                        <label for="MAYONNAISE">MAYONNAISE</label><br>

                        <input type="checkbox" id="SPICY_MATONNAISE" name="SAUCES" value="SPICY_MATONNAISE" onchange="additem(this)">
                        <label for="SPICY_MATONNAISE">SPICY MATONNAISE</label><br>

                        <input type="checkbox" id="SPICY_BROWN_MUSTARD" name="SAUCES" value="SPICY_BROWN_MUSTARD" onchange="additem(this)">
                        <label for="SPICY_BROWN_MUSTARD">SPICY_BROWN_MUSTARD</label><br>

                        <input type="checkbox" id="DIJON_MUSTARD" name="SAUCES" value="DIJON_MUSTARD" onchange="additem(this)">
                        <label for="DIJON_MUSTARD">DIJON_MUSTARD</label><br>
                        
                        <input type="checkbox" id="HONEY_MUSTARD" name="SAUCES" value="HONEY_MUSTARD" onchange="additem(this)">
                        <label for="HONEY_MUSTARD">HONEY_MUSTARD</label><br>

                        <input type="checkbox" id="OIL&VINEGAR" name="SAUCES" value="OIL&VINEGAR" onchange="additem(this)">
                        <label for="OIL&VINEGAR">OIL&VINEGAR</label><br>

                        <input type="checkbox" id="PESTO" name="SAUCES" value="PESTO" onchange="additem(this)">
                        <label for="PESTO">PESTO</label><br>

                        <input type="checkbox" id="BALSAMIC_DRESSING" name="SAUCES" value="BALSAMIC_DRESSING" onchange="additem(this)">
                        <label for="BALSAMIC_DRESSING">BALSAMIC_DRESSING</label><br>
                        
                        <input type="checkbox" id="RUSSIAN_DRESSING" name="SAUCES" value="RUSSIAN_DRESSING" onchange="additem(this)">
                        <label for="RUSSIAN_DRESSING">RUSSIAN_DRESSING</label><br>

                        <input type="checkbox" id="HORSERADISH" name="SAUCES" value="HORSERADISH" onchange="additem(this)">
                        <label for="HORSERADISH">HORSERADISH</label><br>

                        <input type="checkbox" id="BBQ_SAUCE" name="SAUCES" value="BBQ_SAUCE" onchange="additem(this)">
                        <label for="BBQ_SAUCE">BBQ_SAUCE</label><br>

                        <input type="checkbox" id="RANCH" name="SAUCES" value="RANCH" onchange="additem(this)">
                        <label for="RANCH">RANCH</label><br>

                        <input type="checkbox" id="TZATZIKI" name="SAUCES" value="TZATZIKI" onchange="additem(this)">
                        <label for="TZATZIKI">TZATZIKI</label><br>

                        <input type="checkbox" id="SRIRACHA" name="SAUCES" value="SRIRACHA" onchange="additem(this)">
                        <label for="SRIRACHA">SRIRACHA</label><br>

                        <input type="checkbox" id="THAI_PEANUT" name="SAUCES" value="THAI_PEANUT" onchange="additem(this)">
                        <label for="THAI_PEANUT">THAI_PEANUT</label><br>
                        
                        <input type="checkbox" id="HONEY" name="SAUCES" value="HONEY" onchange="additem(this)">
                        <label for="HONEY">HONEY</label><br>

                        <input type="checkbox" id="HUMMUS" name="SAUCES" value="HUMMUS" onchange="additem(this)">
                        <label for="HUMMUS">HUMMUS</label><br>

                        
                    </div><!-- END el list bta3et el Toppings -->

                </div><!-- END 4th section "Sauces section" -->
            </div> <!-- END   div bta3et el items --><br>
            
            <div class="buttons"> <!-- div bta3et el next wel back -->
                <input type="button" id="back" value="back" onclick="back()">
                <input type="button" id="next" value="next" onclick="next()">
            </div> <!-- END   div bta3et el next wel back -->
        </div><!-- END el div ely feha kol 7aga -->


        <div><!-- makan el sowar -->
            <div id="sec_1_img" >  <!-- first section --></div> <!-- END first section -->
            <div id="sec_2_img" >  <!-- 2nd section --></div> <!-- END 2nd section -->
        </div><!-- END   makan el sowar -->
    </body>


<div id="test">

</div>

    <script>
        function additem(node)
        {
            let parent_node_id=node.parentNode.parentNode.id; //section num
            let name_of_node=node.id; //name of node
            let insert_section_div="sec_"+parent_node_id+"_img"; // place to insert image

            let div=document.createElement('div'); // creates div that stores the selected image
            div.id=insert_section_div+name_of_node;
            div.innerHTML='<img src="/Restaurant_Web_Project/images/'+parent_node_id+'/'+name_of_node+'.png" alt="">';
            // alert( '/Restaurant_Web_Project/images/'+parent_node_id+'/'+name_of_node+'.png');
            image = '/Restaurant_Web_Project/images/'+parent_node_id+'/'+name_of_node+'.png';

            let price =0;
            if(parent_node_id==1){
                price=15;
            }
            else if(parent_node_id==2){
                price=20;
            }
            else if(parent_node_id==3){
                price=10;
            }
            else if(parent_node_id==4){
                price=10;
            }
            else {
                price=5;
            }
            // jQuery.ajax(
            //     {
            //         url:"addtodatabase.php",
            //         data:{
            //             name:name_of_node,img:image,type:parent_node_id,price:price
            //         },
            //        type:"POST",
            //        success:function(data)
            //        {
            //             $("#test").html(data);

            //        }
            //    }
        //    );

            if(parent_node_id==1)
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
        function next()
        {
            if(value<5&&check())
            {
                document.getElementById("nav"+value).className="";
                document.getElementById(value).style.display="none";
                value=value+1;
                document.getElementById(value).style.display="inline";
                document.getElementById("nav"+value).className="active";
            }
        }
        function back()
        {
            if(value>1)
            {
                document.getElementById("nav"+value).className="";
                document.getElementById(value).style.display="none";
                value=value-1;
                document.getElementById(value).style.display="inline";
                document.getElementById("nav"+value).className="active";
            }
        }
        function go(y)
        {
            if((y<=5||y>=0)&&check())
            {
                document.getElementById("nav"+value).className="";
                document.getElementById(value).style.display="none";
                value=y;
                document.getElementById(value).style.display="inline";
                document.getElementById("nav"+value).className="active";
            }
            
        }
        function check()
        {
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
</html>