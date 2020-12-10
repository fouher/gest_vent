<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Add Customers page</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">

            <a href="<?php echo site_url('Client'); ?>"> <button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</button> </a>
            <section class="box">
                <header class="panel_header">

                </header>

                <section class="box ">

                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <form method="post" action="<?php echo base_url('Client/ajout_client');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Customer Name:</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Customer Name">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Description:</label>
                                        <input type="text" class="form-control" name="description" id="Nom" placeholder="Description:">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Phone number</label>
                                        <input type="phone" class="form-control" name="telephone" id="telephone" placeholder="Phone number">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Adresse/street:</label>
                                        <input type="text" class="form-control" name="quartier" id="quartier" placeholder="Adresse/street">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">ID card:</label>
                                        <input type="text" class="form-control" name="cni" id="cni" placeholder="ID card">
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
