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
                    <input type="radio" id="Mozarella" name="Cheese_Type" value="Mozarella">
                    <label for="Mozarella">Mozarella</label>
                    
                    <br>

                    <input type="radio" id="Cheddar" name="Cheese_Type" value="Cheddar">
                    <label for="Cheddar">Cheddar</label>

                    <br>

                    <input type="radio" id="American" name="Cheese_Type" value="American">
                    <label for="American">American</label>

                    <br>
                    
                    <input type="radio" id="Parmesan" name="Cheese_Type" value="Parmesan">
                    <label for="Parmesan">Parmesan</label>
                </div><!-- END el list bta3et el Cheese -->

            </div><!-- END 3rd section "Cheese section" -->


            <div class="items" id="4" style="display: none;"> <!-- 4th section "Toppings" -->

                <div><!--  title bta3 el section -->
                    <h3>Toppings</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el Toppings -->
                    <input type="radio" id="Tomatoes" name="Toppings" value="Tomatoes">
                    <label for="Tomatoes">Tomatoes</label>
                    
                    <br>

                    <input type="radio" id="Lettuce" name="Toppings" value="Lettuce">
                    <label for="Lettuce">Lettuce</label>

                    <br>

                    <input type="radio" id="Onion" name="Toppings" value="Onion">
                    <label for="Onion">Onion</label>

                    <br>
                    
                    <input type="radio" id="Mushrooms" name="Toppings" value="Mushrooms">
                    <label for="Mushrooms">Mushrooms</label>
                </div><!-- END el list bta3et el Toppings -->

            </div><!-- END 4th section "Cheese section" -->


            <div class="items" id="5" style="display: none;"> <!-- 5th section "Sauces" -->

                <div><!--  title bta3 el section -->
                    <h3>Sauces</h3><hr>
                </div><!-- END title bta3 el section -->

                <div><!-- el list bta3et el Sauces -->
                    <input type="radio" id="Ketchup" name="Sauces" value="Ketchup">
                    <label for="Ketchup">Ketchup</label>
                    
                    <br>

                    <input type="radio" id="Mayonnaise" name="Sauces" value="Mayonnaise">
                    <label for="Mayonnaise">Mayonnaise</label>

                    <br>

                    <input type="radio" id="Honey_Mustard" name="Sauces" value="Honey_Mustard">
                    <label for="Honey_Mustard">Honey Mustard</label>

                    <br>
                    
                    <input type="radio" id="BBQ" name="Sauces" value="BBQ">
                    <label for="BBQ">BBQ</label>
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

        function print(x)
        {                            
            // $("#sec_2_img").offset($("#sec_1_img").offset());

            // let y=x.getAttribute('value');
            // document.getElementById("batee5").innerHTML=y;

            let parent=x.parentNode.parentNode;
            let name_of_item=x.id;
            let insert_div="sec_"+parent.id+"_img";
            
            if(parent.id==1)// to remove previous bread
            {
                if(document.getElementById(insert_div).childElementCount==1)
                {
                    document.getElementById("sec_"+parent.id+"_img").innerHTML="";
                }
                let div=document.createElement('div');
                div.id="sec_"+parent.id+"_img"+x.id;
                div.innerHTML='<img src="/test/bread/'+name_of_item+'.png" alt="">';
                document.getElementById("sec_"+parent.id+"_img").append(div);
                // alert(document.getElementById(insert_location).childElementCount);
                // document.getElementById(insert_location+x.id).remove();
                // document.getElementById(insert_location).removeChild("sec_"+parent.id+"_img"+x.id);
                // alert("sec_"+parent.id+"_img"+x.id);
                // document.getElementById("sec_1_imgRYE").remove();
            }
            else if(parent.id==2)
            {
                if(!x.checked) 
                {
                    // let z="sec_"+parent.id+"_img";
                    // z.removeChild("sec_"+parent.id+"_img"+x.id);
                    document.getElementById("sec_"+parent.id+"_img"+x.id).remove();
                    //document.getElementById("sec_"+parent.id+"_img"+x.id).style.display="none";

                    // alert("sec_"+parent.id+"_img"+x.id);
                }
                else// error fel remove
                {
                    let div=document.createElement('div');
                    div.id="sec_"+parent.id+"_img"+x.id;
                    let xyz=parent.id;
                    div.innerHTML='<img src="/test/protein/'+name_of_item+'.png" alt="">';
                    document.getElementById("sec_"+xyz+"_img").append(div);
                   $("#sec_"+parent.id+"_img"+x.id).offset($("#sec_1_img").offset());
                    // $("#sec_"+xyz+"_img"+x.id).offset($("#sec_2_img").offset());

                }
            }
            // document.getElementById("myDiv").style.marginTop = "50px";

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