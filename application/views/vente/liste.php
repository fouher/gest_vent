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




                                            
                            <div class="row hidden">

                                
<div class="col-md-6 col-sm-7 col-xs-12">
    <div class="r1_maingraph db_box">
        <span class='pull-right switch'>
            <i class='icon-default fa fa-line-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-bar-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-area-chart icon-xs'></i>
        </span>

        <div id="db_morris_line_graph" style="height:272px;width:95%;"></div>
        <div id="db_morris_area_graph" style="height:272px;width:90%;display:none;"></div>
        <div id="db_morris_bar_graph" style="height:272px;width:90%;display:none;"></div>
    </div>
</div>

</div> <!-- End .row -->


<div class="row hidden" >


<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="r2_graph1 db_box">



        <form id="rickshaw_side_panel">
            <section>
                <div id="legend"></div>
            </section>
        </form>

        <div id="chart_container" class="rickshaw_ext">
            <div id="chart"></div>
            <div id="timeline"></div>
        </div>

        <div id='rickshaw_side_panel' class="rickshaw_sliders">
            <section>
                <h5>Smoothing</h5>
                <div id="smoother"></div>
            </section>
            <section>
                <h5>Preview Range</h5>
                <div id="preview" class="rickshaw_ext_preview"></div>
            </section>
        </div>

    </div>

</div>

</div> <!-- End .row -->






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