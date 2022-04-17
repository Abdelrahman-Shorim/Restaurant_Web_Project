<html>
    <style>
        .sidenav {
            /* height: 100%; Full-height: remove this if you want "auto" height */
            width: 280px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 50; /* Stay at the top */
            right: 50;
            /* background-color: #111; Black */
            background-color: #ff0000; 
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px;
            /* text-align:center; */
        }
        .sidenav a,h3 {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            /* color: #818181; */
            display: block;
        }
        .sidenav a:hover {
            color: #f1f1f1;
        }

    </style>

    <head><script src='http://code.jquery.com/jquery-3.2.1.min.js'></script> <script>var value=1;</script></head>
    <body>
        <div class ="sidenav"><!-- el div el kebera -->

            <div class="items" id="1"> <!-- awel section "Bread section" -->

                <div> <!--  title bta3 el section -->
                    <h3>Bread Type</h3><hr>
                </div> <!-- END title bta3 el section -->

                <div><!-- el list bta3et el bread -->
                    <!-- <input type="radio" id="CIABATA" name="Bread_Type" value="CIABATA" onclick="print(this)">
                    <label for="CIABATA">CIABATA</label><br> -->

                    <!-- <input type="radio" id="SEMOLINA" name="Bread_Type" value="SEMOLINA" onclick="print(this)">
                    <label for="SEMOLINA">SEMOLINA</label><br> -->

                    <!-- <input type="radio" id="MULTI-GRAIN" name="Bread_Type" value="MULTI-GRAIN" onclick="print(this)">
                    <label for="MULTI-GRAIN">MULTI-GRAIN</label><br> -->

                    <input type="radio" id="RYE" name="Bread_Type" value="RYE" onclick="print(this)">
                    <label for="RYE">RYE</label><br>
                    
                    <input type="radio" id="CROISSANT" name="Bread_Type" value="CROISSANT" onclick="print(this)">
                    <label for="CROISSANT">CROISSANT</label><br>

                    <input type="radio" id="WHOLE_WHEAT" name="Bread_Type" value="WHOLE_WHEAT" onclick="print(this)">
                    <label for="WHOLE_WHEAT">WHOLE WHEAT</label><br>

                    <input type="radio" id="WHITE" name="Bread_Type" value="WHITE" onclick="print(this)">
                    <label for="WHITE">WHITE</label><br>

                    <!-- <input type="radio" id="WHOLE_WHEAT_WRAP" name="Bread_Type" value="WHOLE_WHEAT_WRAP" onclick="print(this)">
                    <label for="WHOLE_WHEAT_WRAP">WHOLE WHEAT WRAP</label><br> -->

                    <!-- <input type="radio" id="LETTUCE_WRAP" name="Bread_Type" value="LETTUCE_WRAP" onclick="print(this)">
                    <label for="LETTUCE_WRAP">LETTUCE WRAP</label><br> -->
                    
                    <input type="radio" id="GLUTEN_FREE" name="Bread_Type" value="GLUTEN_FREE" onclick="print(this)">
                    <label for="GLUTEN_FREE">GLUTEN FREE</label>
                </div><!-- END el list bta3et el bread -->

            </div><!-- END awel section "Bread section" -->


            <div class="items" id="2" style="display: none;"> <!-- 2nd section "Protein" -->

                <div><!--  title bta3 el section -->
                    <h3>Protein</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el bread -->
                    <input type="checkbox" id="TURKEY" name="Protein_Type" value="TURKEY" onchange="print(this)">
                    <label for="TURKEY">TURKEY</label><br>

                    <input type="checkbox" id="ROAST_BEEF" name="Protein_Type" value="ROAST_BEEF" onchange="print(this)">
                    <label for="ROAST_BEEF">ROAST BEEF</label><br>

                    <input type="checkbox" id="HAM" name="Protein_Type" value="HAM" onchange="print(this)">
                    <label for="HAM">HAM</label><br>
                    
                    <input type="checkbox" id="PROSCIUTTO" name="Protein_Type" value="PROSCIUTTO" onchange="print(this)">
                    <label for="PROSCIUTTO">PROSCIUTTO</label><br>

                    <input type="checkbox" id="CORNED_BEEF" name="Protein_Type" value="CORNED_BEEF" onchange="print(this)">
                    <label for="CORNED_BEEF">CORNED BEEF</label><br>

                    <input type="checkbox" id="PASTRAMI" name="Protein_Type" value="PASTRAMI" onchange="print(this)">
                    <label for="PASTRAMI">PASTRAMI</label><br>

                    <input type="checkbox" id="GENOA_SALAMI" name="Protein_Type" value="GENOA_SALAMI" onchange="print(this)">
                    <label for="GENOA_SALAMI">GENOA SALAMI</label><br>
                    
                    <input type="checkbox" id="SOPPRESSATA" name="Protein_Type" value="SOPPRESSATA" onchange="print(this)">
                    <label for="SOPPRESSATA">SOPPRESSATA</label><br>

                    <input type="checkbox" id="CAPOCOLLO" name="Protein_Type" value="CAPOCOLLO" onchange="print(this)">
                    <label for="CAPOCOLLO">CAPOCOLLO</label><br>

                    <input type="checkbox" id="PEPPERONI" name="Protein_Type" value="PEPPERONI" onchange="print(this)">
                    <label for="PEPPERONI">PEPPERONI</label><br>

                    <input type="checkbox" id="BAKED_CHICKEN" name="Protein_Type" value="BAKED_CHICKEN" onchange="print(this)">
                    <label for="BAKED_CHICKEN">BAKED CHICKEN</label><br>
                    
                    <input type="checkbox" id="BACON" name="Protein_Type" value="BACON" onchange="print(this)">
                    <label for="BACON">BACON</label><br>

                    <input type="checkbox" id="CHICKEN_SALAD" name="Protein_Type" value="CHICKEN_SALAD" onchange="print(this)">
                    <label for="CHICKEN_SALAD">CHICKEN SALAD</label><br>

                    <input type="checkbox" id="TUNA_SALAD" name="Protein_Type" value="TUNA_SALAD" onchange="print(this)">
                    <label for="TUNA_SALAD">TUNA SALAD</label><br>
                    
                    <input type="checkbox" id="EGG_SALAD" name="Protein_Type" value="EGG_SALAD" onchange="print(this)">
                    <label for="EGG_SALAD">EGG SALAD</label><br>

                </div><!-- END el list bta3et el bread -->

            </div><!-- END 2nd section "Protein" -->


            <div class="items" id="3" style="display: none;"> <!-- 3rd section "Cheese" -->

                <div><!--  title bta3 el section -->
                    <h3>Cheese</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el Cheese -->
                    <input type="checkbox" id="SWISS" name="Cheese_Type" value="SWISS" onchange="print(this)">
                    <label for="SWISS">SWISS</label><br>

                    <input type="checkbox" id="PROVOLONE" name="Cheese_Type" value="PROVOLONE" onchange="print(this)">
                    <label for="PROVOLONE">PROVOLONE</label><br>

                    <input type="checkbox" id="MOZZARELLA" name="Cheese_Type" value="MOZZARELLA" onchange="print(this)">
                    <label for="MOZZARELLA">MOZZARELLA</label><br>

                    <input type="checkbox" id="CHEDDAR" name="Cheese_Type" value="CHEDDAR" onchange="print(this)">
                    <label for="CHEDDAR">CHEDDAR</label><br>
                    
                    <input type="checkbox" id="PEPPER_JACK" name="Cheese_Type" value="PEPPER_JACK" onchange="print(this)">
                    <label for="PEPPER_JACK">PEPPER_JACK</label><br>

                    <input type="checkbox" id="MUENSTER" name="Cheese_Type" value="MUENSTER" onchange="print(this)">
                    <label for="MUENSTER">MUENSTER</label><br>

                    <input type="checkbox" id="AMERICAN" name="Cheese_Type" value="AMERICAN" onchange="print(this)">
                    <label for="AMERICAN">AMERICAN</label><br>

                    <input type="checkbox" id="BRIE" name="Cheese_Type" value="BRIE" onchange="print(this)">
                    <label for="BRIE">BRIE</label><br>
                    
                    <input type="checkbox" id="RICOTTA" name="Cheese_Type" value="RICOTTA" onchange="print(this)">
                    <label for="RICOTTA">RICOTTA</label><br>

                    <input type="checkbox" id="PARMESAN" name="Cheese_Type" value="PARMESAN" onchange="print(this)">
                    <label for="PARMESAN">PARMESAN</label><br>

                    <input type="checkbox" id="FETA" name="Cheese_Type" value="FETA" onchange="print(this)">
                    <label for="FETA">FETA</label><br>

                </div><!-- END el list bta3et el Cheese -->

            </div><!-- END 3rd section "Cheese section" -->


            <div class="items" id="4" style="display: none;"> <!-- 4th section "Toppings" -->

                <div><!--  title bta3 el section -->
                    <h3>Toppings</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el Toppings -->
                    <input type="checkbox" id="TOMATOES" name="Toppings" value="TOMATOES" onchange="print(this)">
                    <label for="TOMATOES">TOMATOES</label><br>

                    <input type="checkbox" id="LETTUCE" name="Toppings" value="LETTUCE" onchange="print(this)">
                    <label for="LETTUCE">LETTUCE</label><br>

                    <input type="checkbox" id="ONIONS" name="Toppings" value="ONIONS" onchange="print(this)">
                    <label for="ONIONS">ONIONS</label><br>

                    <input type="checkbox" id="ARUGULA" name="Toppings" value="ARUGULA" onchange="print(this)">
                    <label for="ARUGULA">ARUGULA</label><br>
                    
                    <input type="checkbox" id="SPINACH" name="Toppings" value="SPINACH" onchange="print(this)">
                    <label for="SPINACH">SPINACH</label><br>

                    <input type="checkbox" id="KALE" name="Toppings" value="KALE" onchange="print(this)">
                    <label for="KALE">KALE</label><br>

                    <input type="checkbox" id="ALFALFA_SPROUTS" name="Toppings" value="ALFALFA_SPROUTS" onchange="print(this)">
                    <label for="ALFALFA_SPROUTS">ALFALFA SPROUTS</label><br>

                    <input type="checkbox" id="CUCUMBERS" name="Toppings" value="CUCUMBERS" onchange="print(this)">
                    <label for="CUCUMBERS">CUCUMBERS</label><br>
                    
                    <input type="checkbox" id="PICKLES" name="Toppings" value="PICKLES" onchange="print(this)">
                    <label for="PICKLES">PICKLES</label><br>

                    <input type="checkbox" id="MUSHROOMS" name="Toppings" value="MUSHROOMS" onchange="print(this)">
                    <label for="MUSHROOMS">MUSHROOMS</label><br>

                    <input type="checkbox" id="OLIVES" name="Toppings" value="OLIVES" onchange="print(this)">
                    <label for="OLIVES">OLIVES</label><br>

                    <input type="checkbox" id="BANANA_PEPPERS" name="Toppings" value="BANANA_PEPPERS" onchange="print(this)">
                    <label for="BANANA_PEPPERS">BANANA_PEPPERS</label><br>

                    <input type="checkbox" id="JALAPENOS" name="Toppings" value="JALAPENOS" onchange="print(this)">
                    <label for="JALAPENOS">JALAPENOS</label><br>

                    <input type="checkbox" id="ROASTED_RED_PEPPERS" name="Toppings" value="ROASTED_RED_PEPPERS" onchange="print(this)">
                    <label for="ROASTED_RED_PEPPERS">ROASTED RED PEPPERS</label><br>

                    <input type="checkbox" id="SLICED_APPLE" name="Toppings" value="SLICED_APPLE" onchange="print(this)">
                    <label for="SLICED_APPLE">SLICED_APPLE</label><br>
                    
                    <input type="checkbox" id="COLESLAW" name="Toppings" value="COLESLAW" onchange="print(this)">
                    <label for="COLESLAW">COLESLAW</label><br>

                    <input type="checkbox" id="SAUERKRAUT" name="Toppings" value="SAUERKRAUT" onchange="print(this)">
                    <label for="SAUERKRAUT">SAUERKRAUT</label><br>

                    <input type="checkbox" id="KETTLE_COOKED_CHIPS" name="Toppings" value="KETTLE_COOKED_CHIPS" onchange="print(this)">
                    <label for="KETTLE_COOKED_CHIPS">KETTLE_COOKED_CHIPS</label><br>
                    
                    <input type="checkbox" id="AVOCADO" name="Toppings" value="AVOCADO" onchange="print(this)">
                    <label for="AVOCADO">AVOCADO</label><br>
                    
                    

                </div><!-- END el list bta3et el Toppings -->

            </div><!-- END 4th section "Cheese section" -->


            <div class="items" id="5" style="display: none;"> <!-- 5th section "Sauces" -->

                <div><!--  title bta3 el section -->
                    <h3>Sauces</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el Sauces -->
                    <input type="checkbox" id="MAYONNAISE" name="SAUCES" value="MAYONNAISE" onchange="print(this)">
                    <label for="MAYONNAISE">MAYONNAISE</label><br>

                    <input type="checkbox" id="SPICY_MATONNAISE" name="SAUCES" value="SPICY_MATONNAISE" onchange="print(this)">
                    <label for="SPICY_MATONNAISE">SPICY MATONNAISE</label><br>

                    <input type="checkbox" id="SPICY_BROWN_MUSTARD" name="SAUCES" value="SPICY_BROWN_MUSTARD" onchange="print(this)">
                    <label for="SPICY_BROWN_MUSTARD">SPICY_BROWN_MUSTARD</label><br>

                    <input type="checkbox" id="DIJON_MUSTARD" name="SAUCES" value="DIJON_MUSTARD" onchange="print(this)">
                    <label for="DIJON_MUSTARD">DIJON_MUSTARD</label><br>
                    
                    <input type="checkbox" id="HONEY_MUSTARD" name="SAUCES" value="HONEY_MUSTARD" onchange="print(this)">
                    <label for="HONEY_MUSTARD">HONEY_MUSTARD</label><br>

                    <input type="checkbox" id="OIL&VINEGAR" name="SAUCES" value="OIL&VINEGAR" onchange="print(this)">
                    <label for="OIL&VINEGAR">OIL&VINEGAR</label><br>

                    <input type="checkbox" id="PESTO" name="SAUCES" value="PESTO" onchange="print(this)">
                    <label for="PESTO">PESTO</label><br>

                    <input type="checkbox" id="BALSAMIC_DRESSING" name="SAUCES" value="BALSAMIC_DRESSING" onchange="print(this)">
                    <label for="BALSAMIC_DRESSING">BALSAMIC_DRESSING</label><br>
                    
                    <input type="checkbox" id="RUSSIAN_DRESSING" name="SAUCES" value="RUSSIAN_DRESSING" onchange="print(this)">
                    <label for="RUSSIAN_DRESSING">RUSSIAN_DRESSING</label><br>

                    <input type="checkbox" id="HORSERADISH" name="SAUCES" value="HORSERADISH" onchange="print(this)">
                    <label for="HORSERADISH">HORSERADISH</label><br>

                    <input type="checkbox" id="BBQ_SAUCE" name="SAUCES" value="BBQ_SAUCE" onchange="print(this)">
                    <label for="BBQ_SAUCE">BBQ_SAUCE</label><br>

                    <input type="checkbox" id="RANCH" name="SAUCES" value="RANCH" onchange="print(this)">
                    <label for="RANCH">RANCH</label><br>

                    <input type="checkbox" id="TZATZIKI" name="SAUCES" value="TZATZIKI" onchange="print(this)">
                    <label for="TZATZIKI">TZATZIKI</label><br>

                    <input type="checkbox" id="SRIRACHA" name="SAUCES" value="SRIRACHA" onchange="print(this)">
                    <label for="SRIRACHA">SRIRACHA</label><br>

                    <input type="checkbox" id="THAI_PEANUT" name="SAUCES" value="THAI_PEANUT" onchange="print(this)">
                    <label for="THAI_PEANUT">THAI_PEANUT</label><br>
                    
                    <input type="checkbox" id="HONEY" name="SAUCES" value="HONEY" onchange="print(this)">
                    <label for="HONEY">HONEY</label><br>

                    <input type="checkbox" id="HUMMUS" name="SAUCES" value="HUMMUS" onchange="print(this)">
                    <label for="HUMMUS">HUMMUS</label><br>

                    
                </div><!-- END el list bta3et el Toppings -->

            </div><!-- END 4th section "Sauces section" -->

            <br>
            <input type="button" id="back" value="back" onclick="back()">
            <input type="button" id="next" value="next" onclick="next()">

        </div><!-- END el div el kebera -->
        <!-- <input type="button" id="button"  value="click me" onclick="go()">
        <p id="batee5"></p> -->

        <div id="body">
        </div>

        <div><!-- Bta3et el sowar -->
            <div id="sec_1_img" >  <!-- first section -->

            </div> <!-- END first section -->

            <div id="sec_2_img" >  <!-- 2nd section -->

            </div> <!-- END 2nd section -->

            <div id="sec_3_img">  <!-- 3rd section -->

            </div> <!-- END 3rd section -->

            <div id="sec_4_img">  <!-- 4th section -->

            </div> <!-- END 4th section -->

            <div id="sec_5_img">  <!-- 5th section -->

            </div> <!-- END 5th section -->
        </div>
    </body>

    <script>

        // function print(x)
        // {
        //     let parent=x.parentNode.parentNode;// 
        //     let name_of_item=x.id;
        //     let insert_div="sec_"+parent.id+"_img";
            
        //     if(parent.id==1)// to remove previous bread
        //     {
        //         document.getElementById("sec_"+parent.id+"_img").innerHTML=""; //to remove previous bread

        //         let div=document.createElement('div');
        //         div.id="sec_"+parent.id+"_img"+x.id;
        //         div.innerHTML='<img src="/test/bread/'+name_of_item+'.png" alt="">';
        //         document.getElementById("sec_"+parent.id+"_img").append(div);
        //     }
        //     else 
        //     {
        //         if(!x.checked) 
        //         {
        //             document.getElementById("sec_"+parent.id+"_img"+x.id).remove();

        //             $("#sec_2_img").children().each(function () {
        //                 $(this).offset($("#sec_1_img").offset());
        //             });
        //         }
        //         else
        //         {
        //             let div=document.createElement('div');
        //             div.id="sec_"+parent.id+"_img"+x.id;
        //             let xyz=parent.id;
        //             div.innerHTML='<img src="/test/protein/'+name_of_item+'.png" alt="">';
        //             document.getElementById("sec_"+xyz+"_img").append(div);
        //            $("#sec_"+parent.id+"_img"+x.id).offset($("#sec_1_img").offset());
        //         }
        //     }
        // }


        function print(node)
        {
            let parent_node_id=node.parentNode.parentNode.id; //section num
            let name_of_node=node.id; //name of node
            let insert_section_div="sec_"+parent_node_id+"_img"; // place to insert image

            let div=document.createElement('div'); // creates div that stores the selected image
            div.id=insert_section_div+name_of_node;
            div.innerHTML='<img src="/Restaurant_Web_Project/images/'+parent_node_id+'/'+name_of_node+'.png" alt="">';

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
                    // $("#"+insert_section_div).children().each(function () { // loops on every child to recalculate new margins
                    //     $(this).offset($("#sec_1_img").offset());
                    // });
                }
                else
                {
                    document.getElementById(insert_section_div).append(div);
                    // $(div).offset($("#sec_1_img").offset()); // add the created div on top of bread
                }
                for(let i=parent_node_id;i<=5;i++)
                {
                    $("#sec_"+i+"_img").children().each(function () { // loops on every child to recalculate new margins
                            $(this).offset($("#sec_1_img").offset());
                    });
                }
            }
        }



        //////////////////////////////////////////////////////////////////////////////////////////////////////
        function go()
        {
            var x=document.querySelector('input[name="Bread_Type"]:checked').value;

            // var x=document.getElementsByName('Protein_Type').value;
            document.getElementById("batee5").innerHTML=x;
            window.location.href ="/test/checkdata.php?id="+x;
        }

        function next()
        {
            if(value<5)
            {
                document.getElementById(value).style.display="none";
                value=value+1;
                document.getElementById(value).style.display="inline";
            }
        }
        function back()
        {
            if(value>1)
            {
                document.getElementById(value).style.display="none";
                value=value-1;
                document.getElementById(value).style.display="inline";
            }
        }
    </script>
</html>