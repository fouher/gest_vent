<!-- START CONTENT -->

<?php           
                                                                $total_prix = 0;
                                                                foreach ($ventes as $item) { 
                                                                   $total_prix = $total_prix + ($item->prix_vente_v * $item->quantite_vendu);
                                                           
                                                                }
                                                            ?>

<section id="main-content" class=" ">
            <section class="wrapper main-wrapper" style=''>

                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left" style="width: 100%;">
                            <h1 class="title">Sales Report By Product 
                                <span class="pull-right"> <a href="<?php echo site_url('Vente/report'); ?>" class="btn btn-purple">All report 
                            </a>&nbsp;&nbsp;<a href="<?php echo site_url('Vente/reportCategorie'); ?>" class="btn btn-purple">Categorie report </a></span></h1>
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                            </header>
                            <div class="content-body">
                            
                            <form method="post" action="<?php echo base_url('Vente/reportProduct');?>">
                                <div class='row'>
                                        <div class="col-xs-3">
                                            <label for="num_input">Start</label>
                                            <input type="date" name="start_d"  class="form-control" value = "<?php if (isset($_SESSION['fdate'])){echo $_SESSION['fdate'];}else{echo date("Y-m-d", strtotime("first day of this month"));}  ?>">
                                        </div>
                                        <div class="col-xs-3">
                                            <label for="num_input">End</label>
                                            <input type="date" name="end_d" class="form-control" value = "<?php if (isset($_SESSION['ldate'])){echo $_SESSION['ldate'];}else{echo date("Y-m-d"); }?>">
                                        </div>

                                        <div class="col-xs-3">
                                            <label for="num_input">Produit</label>
                                            <select id="second-choice" name="idproduit" class="form-control" required>
                                                <option value="0">All</option>
                                                <?php
                                                            foreach($produits as $item) {

                                                echo "<option value=$item->id>$item->nom</option>";
                                                            }
                                                            ?>


                                            </select>


                                        </div>
                                        <div class="col-xs-2">
                                            <label for="num_input">.</label><br>
                                            <input type="submit" value="Search" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            
                                <div class="row">
                                </div>
                            </div>
                        </section>
                </div>



                <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                            </header>
                            <div class="content-body">
                            
                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Customer</th>
                                                    <th>Sale Date</th>
                                                    <th>Sold By</th>
                                                    <th>Unit</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                    $i=0;
                                                    foreach ($ventes as $item) { 
                                                        $i++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $item->nom_produit; ?></td>
                                                    <td><?php echo $item->nom_client; ?></td>
                                                    <td><?php echo $item->date_creation; ?></td>
                                                    <td><?php echo $item->nom_employe; ?></td>
                                                    <td><?php echo $item->prix_vente_v;?></td>
                                                    <td><?php echo $item->quantite_vendu; ?></td>
                                                    <td><?php echo $item->prix_vente_v*$item->quantite_vendu; ?></td>
                                                        </tr>
                                                <?php 
                                                    }
                                                ?>

                                                
                                            </tbody>^

                                            <tfoot>
                                                <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line "><h4>Total</h4></td>
                                                    <td class="no-line"><h3 style='margin:0px;' class="text-primary"><?php echo $total_prix." FCFA"; ?></h3></td>
                                                </tr>
                                            </tfoot>
                                        </table>




                                    </div>
                                </div>
                            </div>
                        </section>
                </div>



                        </section></div>



            </section>
        </section>
        <!-- END CONTENT -->