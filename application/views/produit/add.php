<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Add Product page</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">

            <a href="<?php echo site_url('Produit'); ?>"> <button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</button> </a>
            <section class="box">
                <header class="panel_header">

                </header>

                <section class="box ">

                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <form method="post" action="<?php echo base_url('Produit/ajout_produit');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Product code:</label>
                                        <input type="text" class="form-control" name="code" id="code" placeholder="code of the product">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Product name:</label>
                                        <input type="text" class="form-control" name="nom" id="Nom" placeholder="Name of the product">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Description</label>
                                        <input type="text" class="form-control" name="description" id="Nom" placeholder="description">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Category name:</label>
                                        <select name="idcategorie" class="form-control" required>
                                            <?php
                                                           foreach($categorie as $item) {

                                             echo "<option value=$item->id>$item->nom</option>";
                                                        }
                                                         ?>


                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Quantity:</label>
                                        <input type="text" class="form-control" name="quantite" id="Nom" placeholder="quantity of the product">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Seuil:</label>
                                        <input type="text" class="form-control" name="seuil" id="Nom" placeholder="seuil">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Sale_price:</label>
                                        <input type="text" class="form-control" name="prix_achat" id="Nom" placeholder="sale price">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">buy_price:</label>
                                        <input type="text" class="form-control" name="prix_vente" id="Nom" placeholder="buy price">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary ">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </section>

            </section>
        </div>



    </section>




</section>

<!-- END CONTENT -->
