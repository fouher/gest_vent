
<!DOCTYPE html>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 04:32:12 GMT -->
<head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin : Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url()."assets/images/favicon.png" ;?> /> <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href=<?php echo base_url()."assets/images/apple-touch-icon-57-precomposed.png";?> > <!-- For iPhone -->
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
        <link href=<?php echo base_url()."assets/plugins/datatables/css/jquery.dataTables.css";?> rel="stylesheet" type="text/css" media="screen"/>
        <link href=<?php echo base_url()."assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css";?> rel="stylesheet" type="text/css" media="screen"/>
        <link href=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css";?> rel="stylesheet" type="text/css" media="screen"/>
        <link href=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css";?> rel="stylesheet" type="text/css" media="screen"/>    

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href=<?php echo base_url()."assets/css/style.css";?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url()."assets/css/responsive.css";?> rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">

                                <h2><br>
                                    <?php if ($this->session->flashdata('deconnexion')) { ?>
                                        <div class="alert alert-warning" style="font-size: 12px;" role="alert"> 
                                            <strong><?php echo $this->session->flashdata('deconnexion'); ?></strong>
                                        </div>
                                        <?php }?>
                                        <!---- Error Message ---->
                                        <?php if ($this->session->flashdata('error')) { ?>
                                            <div class="alert alert-danger" style="font-size: 12px;" role="alert"> 
                                            <strong><?php echo $this->session->flashdata('error'); ?></strong>
                                        </div>
                                    <?php } ?>
                                </h2>

        <div class="login-wrapper">
            <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
                <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

                <form name="loginform" id="loginform" action="<?php echo base_url('Login/login');?>" method="post">
                    <p>
                        <label for="user_login">Username<br />
                            <input type="text" name="username" id="user_login" class="input" value="demo" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_pass">Password<br />
                            <input type="password" name="password" id="user_pass" class="input" value="demo" size="20" /></label>
                    </p>

                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
                </form>

            </div>
        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

        <!-- CORE JS FRAMEWORK - START -->
<script src=<?php echo base_url()."assets/js/jquery-1.11.2.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/js/jquery.easing.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/pace/pace.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/viewport/viewportchecker.js";?> type="text/javascript"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src=<?php echo base_url()."assets/plugins/rickshaw-chart/vendor/d3.v3.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/jquery-ui/smoothness/jquery-ui.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/rickshaw-chart/js/Rickshaw.All.js";?>></script>
<script src=<?php echo base_url()."assets/plugins/sparkline-chart/jquery.sparkline.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/easypiechart/jquery.easypiechart.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/morris-chart/js/raphael-min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/morris-chart/js/morris.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/gauge/gauge.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/icheck/icheck.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/js/dashboard.js";?> type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- Datatable script - START --> 
<script src=<?php echo base_url()."assets/plugins/datatables/js/jquery.dataTables.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js";?> type="text/javascript"></script>
<!-- datatable script - END --> 


<!-- CORE TEMPLATE JS - START -->
<script src=<?php echo base_url()."assets/js/scripts.js";?> type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->

<!-- Sidebar Graph - START -->
<script src=<?php echo base_url()."assets/plugins/sparkline-chart/jquery.sparkline.min.js";?> type="text/javascript"></script>
<script src=<?php echo base_url()."assets/js/chart-sparkline.js";?> type="text/javascript"></script>


    </body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2020 04:32:12 GMT -->
</html>



