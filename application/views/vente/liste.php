<!-- START CONTENT -->
<section id="main-content" class=" ">
            <section class="wrapper main-wrapper" style=''>

                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <h1 class="title">Sales History</h1>
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="col-lg-12">
                    <a href="<?php echo site_url('Vente/vue_ajout'); ?>"> <button type="button" class="btn btn-success">Register new sale</button> </a>
                        <section class="box ">
                            <header class="panel_header">
                                <h2><br>
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-success" style="font-size: 12px;" role="alert"> 
                                            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                                        </div>
                                        <?php }?>
                                        <!---- Error Message ---->
                                        <?php if ($this->session->flashdata('error')) { ?>
                                            <div class="alert alert-danger" style="font-size: 12px;" role="alert"> 
                                            <strong><?php echo $this->session->flashdata('error'); ?></strong>
                                        </div>
                                    <?php } ?>
                                </h2>
                            </header>
                            <div class="content-body">    <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">


                                        <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Unit Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total Price</th>
                                                    <th>Customer</th>
                                                    <th>Sale Date</th>
                                                    <th>Sold By</th>
                                                    <th>#</th>
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
                                                    <td><?php echo $item->prix_vente;?></td>
                                                    <td><?php echo $item->quantite_vendu; ?></td>
                                                    <td><?php echo $item->prix_vente*$item->quantite_vendu; ?></td>
                                                    <td><?php echo $item->nom_client; ?></td>
                                                    <td><?php echo $item->date_creation; ?></td>
                                                    <td><?php echo $item->nom_employe; ?></td>
                                                    <td> <!-- <a href="<?php //echo base_url()."Vehicule/page_details/".$item->id; ?>" ><i class="glyphicon glyphicon-eye-open"></i></a> --> &nbsp; 
                                                                <a href="#" ><i class="fa fa-eye"></i></a> &nbsp; 
                                                     </td>
                                                        </tr>
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
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