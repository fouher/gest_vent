<!-- START CONTENT -->
<section id="main-content" class=" ">
            <section class="wrapper main-wrapper" style=''>

                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <h1 class="title">Registration Of A New Sale</h1>
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>

                
                <div class="col-lg-12">
                 <a href="<?php echo site_url('Vente'); ?>"> <button type="button" class="btn btn-success">Back To List</button> </a>
                 <section class="box ">
                            <div class="content-body" >
                                <!-- START -->
                                <form method="post" action="<?php echo base_url('Vente/add');?>">
                                <div class='row'>
                                        <div class="col-xs-5">
                                            <label for="num_input">Number Of Products</label>
                                            <input type="number" class="form-control" id="num_input" name="num_input" placeholder="Enter the number of products to be registered " value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <a href="#" id="filldetails" onclick="addFields()">  <button type="button" class="btn btn-purple">Load</button>  </a>
                                        </div>
                                    </div>
                                    <br>
                               
                                <div class="row">
                                    <div class="col-xs-5">
                                                <label for="id_select">Customer</label>
                                                <select name="client" id="id_select" class="form-control">
                                                    <option value="0">Chose Customer</option>
                                                    <?php   
                                                        foreach ($clients as $val) { 
                                                    ?>
                                                    <option value="<?php echo $val->id; ?>"><?php echo $val->nom." - ".$val->quartier; ?></option>
                                                    <?php 
                                                            }
                                                    ?>

                                                </select>
                                    </div>
                                </div> <br><br>
                                <div id="container_input">

                                </div>
                                <a href="submit" class="btn btn-success"> Register </a>
                                </form>
                                <!-- END -->
                            </div>
                        </section>
                </div>


                        </section></div>



            </section>
        </section>
        <!-- END CONTENT -->
        


<script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("num_input").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container_input");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Product : " + (i+1)));

                // Create an <div class = row> element
                var div_row = document.createElement("div");
                div_row.classList.add("row");
                 

                // Create an <div class = col-xs-6> element
                var div_col = document.createElement("div");
                div_col.classList.add("col-xs-6");

                // Create an <div class = col-xs-6> element
                var div_col2 = document.createElement("div");
                div_col2.classList.add("col-xs-6");
                

                // Create an <input> element, set its type and name attributes
                var input_produit = document.createElement("select");
                input_produit.name = "produit" + i;
                input_produit.placeholder = "chose"
                input_produit.classList.add("form-control");
                var options = <?php echo $produits;   ?>;

                // Populate list with options:
                for(var j = 0; j < options.length; j++) {
                    var opt = options[j];
                    input_produit.innerHTML += "<option value=\"" + opt['id'] + "\">" + opt['nom'] + "</option>";
                }

                // Create an <input> element, set its type and name attributes
                var input_quantite = document.createElement("input");
                input_quantite.type = "number";
                input_quantite.placeholder = "enter quantity";
                input_quantite.name = "quantite" + i;
                input_quantite.classList.add("form-control");
                
                div_col.appendChild(input_produit);
                div_col2.appendChild(input_quantite);
                div_row.appendChild(div_col); 
                div_row.appendChild(div_col2); 
                container.appendChild(div_row);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script>