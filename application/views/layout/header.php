<?php  if(!isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in']!=true){redirect("Login");}
}else{
    if($_SESSION['logged_in']!=true){redirect("Login");}
}  ?>

<link rel="stylesheet" href=<?php echo base_url()."assets/css/app.css" ;  ?> />

<script src=<?php echo base_url()."assets/vendor/Chart.min.js";  ?>></script>
<!DOCTYPE html>
<html class=" ">

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 04:29:24 GMT -->

<head>
    <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Man Zon Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url()."assets/images/favicon.png" ;?> /> <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href=<?php echo base_url()."assets/images/apple-touch-icon-57-precomposed.png";?>> <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?php echo base_url()."assets/images/apple-touch-icon-114-precomposed.png";?>> <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=<?php echo base_url()."assets/images/apple-touch-icon-72-precomposed.png";?>> <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href=<?php echo base_url()."assets/images/apple-touch-icon-144-precomposed.png";?>> <!-- For iPad Retina display -->




    <!-- CORE CSS FRAMEWORK - START -->
    <link href=<?php echo base_url()."assets/plugins/pace/pace-theme-flash.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet" type="text/css" />
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap-theme.min.css";?> rel="stylesheet" type="text/css" />
    <link href=<?php echo base_url()."assets/fonts/font-awesome/css/font-awesome.css";?> rel="stylesheet" type="text/css" />
    <link href=<?php echo base_url()."assets/css/animate.min.css";?> rel="stylesheet" type="text/css" />
    <link href=<?php echo base_url()."assets/plugins/perfect-scrollbar/perfect-scrollbar.css";?> rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href=<?php echo base_url()."assets/plugins/morris-chart/css/morris.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/jquery-ui/smoothness/jquery-ui.min.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/graph.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/detail.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/legend.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/extensions.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/rickshaw.min.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/rickshaw-chart/css/lines.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/icheck/skins/minimal/white.css";?> rel="stylesheet" type="text/css" media="screen" /> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- Datatable css - START -->
    <link href=<?php echo base_url()."assets/plugins/datatables/css/jquery.dataTables.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css";?> rel="stylesheet" type="text/css" media="screen" />
    <link href=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css";?> rel="stylesheet" type="text/css" media="screen" />

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE CSS TEMPLATE - START -->
    <link href=<?php echo base_url()."assets/css/style.css";?> rel="stylesheet" type="text/css" />
    <link href=<?php echo base_url()."assets/css/responsive.css";?> rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->



</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area hidden-print' >
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- <li class="message-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-primary">7</span>
                        </a>
                        <ul class="dropdown-menu messages animated fadeIn">

                            <li class="list">

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Clarine Vassar</strong>
                                                    <span class="time small">- 15 mins ago</span>
                                                    <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Brooks Latshaw</strong>
                                                    <span class="time small">- 45 mins ago</span>
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Clementina Brodeur</strong>
                                                    <span class="time small">- 1 hour ago</span>
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-4.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Carri Busey</strong>
                                                    <span class="time small">- 5 hours ago</span>
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-5.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Melissa Dock</strong>
                                                    <span class="time small">- Yesterday</span>
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Verdell Rea</strong>
                                                    <span class="time small">- 14th Mar</span>
                                                    <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Linette Lheureux</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Araceli Boatright</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>

                    </li> -->

                    <li class="hidden-sm hidden-xs searchform">
                        <div class="input-group">
                            <span class="input-group-addon input-focus">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                        <i  class="fa fa-user"></i> 
                            <span> <?php echo $this->session->nom_employe; ?> <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">

                            <li class="last">
                                <a href="<?php echo site_url('Login/logout'); ?>">
                                    <i class="fa fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid">

        <!-- SIDEBAR - START -->
        <div class="page-sidebar hidden-print">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                <!-- USER INFO - START -->
                <div class="profile-info row">



                </div>
                <!-- USER INFO - END -->



                <ul class='wraplist'>


                    <li class="<?php if($this->uri->segment(1) == 'Home') { echo 'open'; } ?>">
                        <a href="<?php echo site_url('Home'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1) == 'Produit') { echo 'open'; } ?>">
                        <a href="<?php echo site_url('Produit'); ?>">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Products</span>

                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1) == 'Vente') { echo 'open'; } ?>">
                        <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Sales</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'vue_ajout') { echo 'active'; } ?>" href="<?php echo site_url('Vente/vue_ajout'); ?>">Record a sale</a>
                            </li>
                            <li class="">
                                <a class="<?php if($this->uri->segment(2) == '') { echo 'active'; } ?>" href="<?php echo site_url('Vente'); ?>">Sales history</a>
                            </li>
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'report') { echo 'active'; } ?>" href="<?php echo site_url('Vente/report'); ?>">Sales report</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($this->uri->segment(1) == 'Categorie' || $this->uri->segment(1) == 'Client' || $this->uri->segment(1) == 'Employe') { echo 'open'; } ?>">
                        <a href="javascript:;">
                            <i class="fa fa-gift"></i>
                            <span class="title">Parameter</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="<?php if($this->uri->segment(1) == 'Categorie') { echo 'open'; } ?>">
                                <a class="<?php if($this->uri->segment(1) == 'Categorie') { echo 'active'; } ?>" href="<?php echo site_url('Categorie'); ?>">Categorie</a>
                            </li>
                            <li class="<?php if($this->uri->segment(1) == 'Employe') { echo 'open'; } ?>">
                                <a class="<?php if($this->uri->segment(1) == 'Employe') { echo 'active'; } ?>" href="<?php echo site_url('Employe'); ?>">Users</a>
                            </li>
                            <li class="<?php if($this->uri->segment(1) == 'Client') { echo 'open'; } ?>">
                                <a class="<?php if($this->uri->segment(1) == 'Client') { echo 'active'; } ?>" href="<?php echo site_url('Client'); ?>">Customers</a>
                            </li>
                        </ul>
                    </li>



                </ul>

            </div>
            <!-- MAIN MENU - END -->



            <div class="project-info">

                <div class="block1">
                    <div class="data">
                        <span class='title'>New&nbsp;Orders</span>
                        <span class='total'>2,345</span>
                    </div>
                    <div class="graph">
                        <span class="sidebar_orders">...</span>
                    </div>
                </div>

                <div class="block2">
                    <div class="data">
                        <span class='title'>Visitors</span>
                        <span class='total'>345</span>
                    </div>
                    <div class="graph">
                        <span class="sidebar_visitors">...</span>
                    </div>
                </div>

            </div>



        </div>
        <!--  SIDEBAR - END -->









        <div class="row hidden hidden-print">

                                
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


<div class="row hidden hidden-print" >


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