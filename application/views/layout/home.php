<!-- START CONTENT -->
<section id="main-content" class=" ">
            <section class="wrapper main-wrapper" >

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




                        </div>
                    </section>
                </div>



            </section>
</section>
        <!-- END CONTENT -->