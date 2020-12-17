<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper">

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Dashboard</h1>
                </div>


            </div>
        </div>

        <div class="col-lg-12">
            <section class="box nobox">
                <div class="content-body">
                    <div class="row">
                        <a href="<?php echo base_url()."Produit"; ?>">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class="pull-left fa fa-shopping-cart icon-md icon-rounded icon-orange"></i>
                                    <div class="stats">
                                        <h4><strong> <?php echo $totalProduit->total_produit; ?> </strong></h4>
                                        <span>Total Products</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url()."Client"; ?>">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class="pull-left fa fa-users icon-md icon-rounded icon-warning"></i>
                                    <div class="stats">
                                        <h4><strong><?php echo $totalClient->total_client;?></strong></h4>
                                        <span>Total Customers</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url().""; ?>">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class="pull-left fa fa-users icon-md icon-rounded icon-primary"></i>
                                    <div class="stats">
                                        <h4><strong><?php echo $totalEmploye->total_employe ?></strong></h4>
                                        <span>Total Employe</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-10 col-xs-12">
                       
                        <div class="r2_graph1 db_box">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Number of product by category</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                        </section>
                                <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Number of Products</th>
                                             
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                             $i=0;
                                            foreach($nbrProduitByCategorie as $item) {

                                                $i++;
                                              
                                                ?>
                                        <tr >
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo  $item['nom_categorie'];?> </td>
                                            <td><?php echo  $item['nbr_produit']; ?></td>
                                        </tr>
                                      
                                        <?php 
                                                    }
                                                ?>                 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-10 col-xs-12">
                       
                        <div class="r2_graph1 db_box">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Stock to renew</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                        </section>
                                <table id="example-2" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Products</th>
                                            <th>Quantite</th>
                                            <th>Lower limit</th>
                                            
                                             
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                             $i=0;
                                            foreach($ProduitquantiteSeuil as $s) {
                                                $i++;
                                                if ($s->quantite <= $s->seuil){
                                                ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $s->nom ; ?>  </td>
                                            <td><?php echo $s->quantite  ; ?>  </td>
                                            <td><?php echo $s->seuil ;?></td>
                                        </tr>
                                      
                                        <?php 
                                            }}
                                                ?>         
                                    </tbody>
                                </table>

                            </div> 
                        </div>
                    </div>
                  
                </div>
            </section>
        </div>

    </section>
</section>
<!-- END CONTENT -->
