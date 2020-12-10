<!-- START CONTENT -->
<section id="main-content" class=" ">

    <?php 
            $id = $produit->id;
            $code = $produit->code;
            $nom= $produit->nom;
            $description= $produit->description;
            $idcategorie = $produit->idcategorie;
            $quantite = $produit->quantite;
            $seuil= $produit->seuil;
            $prix_achat= $produit->prix_achat;    
            $prix_vente= $produit->prix_vente;  
        ?>
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title"> Update product : <?php echo $nom; ?></h1>
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

                                <form method="post" action="<?php echo base_url('Produit/update_product');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Product code:</label>
                                        <input value="<?php echo $code; ?>" type="text" class="form-control" name="code" id="code" placeholder="code of the product">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Product name:</label>
                                        <input value="<?php echo $nom; ?>" type="text" class="form-control" name="nom" id="Nom" placeholder="Name of the product">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Description</label>
                                        <input value="<?php echo $description; ?>" type="text" class="form-control" name="description" id="Nom" placeholder="description">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Category name:</label>
                                        <select name="idcategorie" class="form-control" required>
                                            <?php
                                                           foreach($categorie  as $item) {
                                                            if($item->id==$idcategorie){
                                                                echo "<option value=$item->id selected>$item->nom</option>";
                                                            }else{
                                                                echo "<option value=$item->id>$item->nom</option>";
                                                            }
                                                        }
                                                         ?>


                                        </select>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Quantity:</label>
                                        <input value="<?php echo $quantite; ?>" type="text" class="form-control" name="quantite" id="Nom" placeholder="quantity of the product">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Seuil:</label>
                                        <input value="<?php echo $seuil; ?>" type="text" class="form-control" name="seuil" id="Nom" placeholder="seuil">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Sale_price:</label>
                                        <input value="<?php echo $prix_achat; ?>" type="text" class="form-control" name="prix_achat" id="Nom" placeholder="sale price">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">buy_price:</label>
                                        <input value="<?php echo $prix_vente; ?>" type="text" class="form-control" name="prix_vente" id="Nom" placeholder="buy price">
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
