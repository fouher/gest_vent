<!-- START CONTENT -->
<section id="main-content" class=" ">



    <?php foreach($categorie as $cat)
        {
            $id = $cat->id;
            $nom = $cat->nom;
            $description =$cat->description;
           
        }
?>
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Update <?php echo $nom; ?> category</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">

            <a href="<?php echo site_url('Categorie'); ?>"> <button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</button> </a>
            <section class="box">
                <header class="panel_header">

                </header>

                <section class="box ">

                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <form method="post" action="<?php echo base_url('categorie/update');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Category name:</label>
                                        <input type="text" class="form-control" name="nom" id="Nom" placeholder="Name of the category" value="<?php echo $nom; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="description">Description of the category</label>
                                        <div class="controls">
                                            <textarea class="form-control autogrow" cols="5" name="description" id="description" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 54px;" value="<?php echo $description; ?>"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo $id; ?>" name="id" />
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
