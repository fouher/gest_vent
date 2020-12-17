<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Customers List</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>

        <div class='col-lg-12'>
            <a href="<?php echo site_url('Client/page_ajout'); ?>"> <button type="button" class="btn btn-success">Register new Customer</button> </a>
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
                                                <div id="example-1_wrapper" class="dataTables_wrapper form-inline">
                                                   
                                                    <table id="example-1" class="table table-striped dt-responsive display dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 275px;"> </th>
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 275px;">Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 414px;">Description</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 217px;">Phone</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 175px;">Adresse</th>
                                                                <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 178px;">Id card</th>
                                                                <th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 275px;"> </th>
                                                            </tr>
                                                        </thead>



                                                        <tbody>
                                                            <?php
                                                                   $i=0;
							                             foreach ($clients as $client) { 
                                                                    $i++;
						                                                   ?>
                                                            <tr role="row" class="odd">
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo strtoupper($client->nom); ?></td>
                                                                <td><?php echo strtoupper($client->description); ?></td>
                                                                <td><?php echo strtoupper($client->telephone); ?></td>
                                                                <td><?php echo strtoupper($client->quartier); ?></td>
                                                                <td><?php echo strtoupper($client->cni); ?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url()."Client/page_modification/".$client->id; ?>"><i class="fa fa-edit"></i></a> &nbsp;

                                                                    <a href="#" class="hidden" id="delete_btn" data-id2="<?php echo base_url('Client/delete_client/').$client->id; ?>" data-toggle="modal" data-target=".bs-example-modal-default" onclick="pass_link(<?php echo $client->id; ?>)"><i class="fa fa-trash"></i></a> </td>
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
