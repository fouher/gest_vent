<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Categories List</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>

        <div class='col-lg-12'>
            <a href="<?php echo site_url('Categorie/page_add_category'); ?>"> <button type="button" class="btn btn-success">Register new category</button> </a>
            <section class="box ">
                <div class="content-body">
                    <div class="row">
                        <div class="page-inner bg-light ">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="d-flex justify-content-between align-items-center card-header">

                                        </div>
                                        <div class="card-body">



                                            <div class="no-more-tables">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th class="numeric">Description</th>
                                                            <th class="numeric">/</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                          $i=0;
							            foreach ($categories as $categorie) { 
                                    $i++;
						            ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo strtoupper($categorie->nom); ?></td>
                                                            <td><?php echo strtoupper($categorie->description); ?></td>
                                                            <td> <a href="<?php echo base_url()."categorie/page_details/".$categorie->id; ?>"><i class="glyphicon glyphicon-eye-open"></i></a> &nbsp;
                                                                <a href="<?php echo base_url()."Categorie/page_modification/".$categorie->id; ?>"><i class="fa fa-edit"></i></a> &nbsp;

                                                                <a href="#" id="delete_btn" data-id2="<?php echo base_url('Categorie/delete_categorie/').$categorie->id; ?>" data-toggle="modal" data-target=".bs-example-modal-default" onclick="pass_link(<?php echo $categorie->id; ?>)"><i class="fa fa-trash"></i></a> </td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </section>
</section>




<!--modal default size-->
<div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog" aria-labelledby="myDefaultModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times-circle"></span></button>
                <h4 class="modal-title" id="myDefaultModalLabel">Delete a category</h4>
            </div>
            <div class="modal-body">
                Do you realy want to delete this item
            </div>
            <div class="modal-footer">
                <a id="modal_btn_del" href="#"><button type="button" class="btn btn-primary">Yes</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!--modal default size end-->

<script>
    function pass_link(lien) {
        var btn = document.getElementById('delete_btn');
        var btn_del = document.getElementById('modal_btn_del');
        btn_del.setAttribute('href', btn.getAttribute('data-id2') + lien);
    }

</script>
