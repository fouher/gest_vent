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
                            <div class="col-md-4 col-sm-8 col-xs-12">
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

                </div>
            </section>
        </div>



    </section>
</section>
<!-- END CONTENT -->
