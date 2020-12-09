

        
          

          <div class="page-inner bg-light ">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div
                    class="d-flex justify-content-between align-items-center card-header"
                  >
                    <div>
                      <span>Category list</span>
                    </div>
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
                            <td> <a href="<?php echo base_url()."Type_infraction/page_details/".$categorie->id; ?>" ><i class="glyphicon glyphicon-eye-open"></i></a> &nbsp; 
                                                     <a href="<?php echo base_url()."Type_infraction/page_modification/".$categorie->id; ?>" ><i class="fa fa-edit"></i></a> &nbsp; 
                                                     <a href="#" id="delete_btn" data-id2=<?php echo base_url()."Type_infraction/suppression/"; ?>  data-toggle="modal" data-target=".bs-example-modal-default" onclick="pass_link(<?php echo $categorie->id; ?>)"><i class="fa fa-trash"></i></a> </td>
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