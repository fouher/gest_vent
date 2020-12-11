<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">List of products</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">

            <a href="<?php echo site_url('Produit/page_ajout'); ?>"> <button type="button" class="btn btn-success">Register a new product</button> </a>
            <section class="box">
                <header class="panel_header">

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="r2_graph1 db_box">
                                <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Seuil</th>
                                            <th>Buy price</th>
                                            <th>Sale price</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                                    $i=0;
                                                    foreach ($produit as $item) { 
                                                        $i++;
                                                ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->code;?></td>
                                            <td><?php echo $item->nom;?></td>
                                            <td><?php echo $item->description;?></td>
                                            <td><?php echo $item->quantite;?></td>
                                            <td><?php echo $item->seuil;?></td>
                                            <td><?php echo $item->prix_achat;?></td>
                                            <td><?php echo $item->prix_vente;?></td>
                                            <td>
                                                <!-- <a href="<?php //echo base_url()."Vehicule/page_details/".$item->id; ?>" ><i class="glyphicon glyphicon-eye-open"></i></a> --> &nbsp;
                                                <a href="<?php echo base_url()."Produit/page_modification/".$item->id; ?>"><i class="fa fa-edit"></i></a> &nbsp;
                                                <a href="<?php echo base_url()."Produit/delete_produit/".$item->id ;?>" data-toggle="modal" data-target=".bs-example-modal-default" onclick="return onDelete()"><i class="fa fa-trash"></i></a> </td>
                                        </tr>
                                        <?php 
                                                    }
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


    <div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog" aria-labelledby="myDefaultModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times-circle"></span></button>
                    <h4 class="modal-title" id="myDefaultModalLabel">Delete a product</h4>
                </div>
                <div class="modal-body">
                    Do you really want to delete this product ?
                </div>
                <div class="modal-footer">
                    <?php 
                                                                    foreach ($produit as $item) { 
                                                                ?>
                    <a href="<?php echo base_url('Produit/delete_produit/').$item->id; }?>"><button type="button" class="btn btn-primary">Yes</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- END CONTENT -->

<!--modal default size end for site-->