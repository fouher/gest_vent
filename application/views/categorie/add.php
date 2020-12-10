<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Add Categories page</h1>
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

                                <form method="post" action="<?php echo base_url('categorie/add_categorie');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Category name:</label>
                                        <input type="text" class="form-control" name="nom" id="Nom" placeholder="Name of the category">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="description">Description of the category</label>
                                        <div class="controls">
                                            <textarea class="form-control autogrow" cols="5" name="description" id="description" placeholder="Description here" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 54px;"></textarea>
                                        </div>
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
