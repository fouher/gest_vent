<!-- START CONTENT -->

                                                            <?php           
                                                                $total_prix = 0;
                                                                foreach ($ventes as $item) { 
                                                                   $total_prix = $total_prix + ($item->prix_vente * $item->quantite_vendu);
                                                           
                                                                }
                                                            ?>

<section id="main-content" class=" ">
            <section class="wrapper main-wrapper" style=''>

                
                <div class="col-lg-12">
                        <a href="<?php echo site_url('Vente'); ?>"> <button type="button" class="btn btn-success">Back To List</button> </a>
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Invoice</h2>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">



                                        <!-- start -->

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="invoice-head">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 invoice-title">
                                                        <h2 class="text-center bg-primary ">Qui Zon store</h2>    
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xs-12 invoice-head-info">
                                                        <span class='text-muted'>
                                                            kotto face souprecture<br>
                                                            test@gmail.com<br>
                                                            P: (+237) 65673937<br>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xs-12 invoice-head-info"><span class='text-muted'>Order # 12345<br><?php echo date('M j, Y', strtotime($date_d)); ?></span></div>
                                                   
                                                </div>
                                            </div>
                                            <div class="clearfix"></div><br>

                                            <div class="col-xs-6 invoice-infoblock pull-left">
                                                <h4>Billed To:</h4>
                                                <address>
                                                    <h3><?php echo $client->nom; ?></h3>
                                                    <span class='text-muted'><?php echo $client->quartier; ?><br> Tel : <?php echo $client->telephone; ?><br>
                                                </address>
                                            </div>

                                            <div class="col-xs-6 invoice-infoblock text-right">
                                                <br><br><br><br>

                                                <div class="invoice-due">
                                                    <h3 class="text-muted">Total Due:</h3> &nbsp; <h2 class="text-primary"> <?php echo $total_prix." FCFA"; ?> </h2>                
                                                </div>

                                            </div>


                                            <div class="clearfix"></div><br>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <h3>Order summary</h3><br>
                                                <div class="table-responsive">
                                                    <table class="table table-hover invoice-table">
                                                        <thead>
                                                            <tr>
                                                                <td><h4>Item</h4></td>
                                                                <td class="text-center"><h4>Price</h4></td>
                                                                <td class="text-center"><h4>Quantity</h4></td>
                                                                <td class="text-right"><h4>Totals</h4></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                            <?php 
                                                                $i=0;
                                                                foreach ($ventes as $item) { 
                                                                    $i++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $item->nom_produit; ?></td>
                                                                <td><?php echo $item->prix_vente." FCFA";?></td>
                                                                <td><?php echo $item->quantite_vendu; ?></td>
                                                                <td><?php echo $item->prix_vente*$item->quantite_vendu." FCFA"; ?></td>
                                                            </tr>
                                                            <?php 
                                                                }
                                                            ?>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><h4>Total</h4></td>
                                                                <td class="no-line text-right"><h3 style='margin:0px;' class="text-primary"><?php echo $total_prix." FCFA"; ?></h3></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="clearfix"></div><br>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <a href="#" class="btn btn-purple btn-md"><i class="fa fa-print"></i> &nbsp; Print </a>        
                                            </div>
                                        </div>


                                        <!-- end -->


                                    </div>
                                </div>
                            </div>
                        </section></div>


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