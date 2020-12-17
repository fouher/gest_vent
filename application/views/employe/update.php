<!-- START CONTENT -->
<section id="main-content" class=" ">


    <?php foreach($employes as $client)
        {
            $id = $client->id;
            $nom= $client->nom;
            $username= $client->username;
            $telephone = $client->telephone;
            $quartier = $client->quartier;
            $password= $client->password;
            $sexe= $client->sexe;
            $role= $client->role;
           
        }
?>

    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Update Customer page</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">

            <a href="<?php echo site_url('Employe'); ?>"> <button type="button" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</button> </a>
            <section class="box">
                <header class="panel_header">

                </header>

                <section class="box ">

                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <form method="post" action="<?php echo base_url('Employe/update_client');?>">
                                    <div class="form-group">
                                        <label class="form-label" for="Nom">Name:</label>
                                        <input type="text" value="<?php echo $nom; ?>" class="form-control" name="nom" id="nom" placeholder="Customer Name">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="username">Username:</label>
                                        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username" id="username" placeholder="Description:" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="password">Password:</label>
                                        <input type="password" value="<?php echo $password; ?>" class="form-control" name="password" id="password" placeholder="Description:" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="telephone">Phone number</label>
                                        <input value="<?php echo $telephone; ?>" type="number" class="form-control" name="telephone" id="telephone" placeholder="Phone number" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="quartier">Adresse/street:</label>
                                        <input value="<?php echo $quartier; ?>" type="text" class="form-control" name="quartier" id="quartier" placeholder="Adresse/street">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="sexe">Sexe</label>
                                        <select class="form-control" name="sexe" id="sexe">
                                            <option value="male" <?php if ($sexe == "male") {echo "selected";} ?>> Man</option>
                                            <option value="female" <?php if ($sexe == "female") {echo "selected"; }?>>Women</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="role">Access level</label>
                                        <select class="form-control" name="role" id="role" required> 
                                            <option value="Admin" <?php if ($sexe == "Admin") {echo 'selected = "selected"';} ?>>Administrator</option>
                                            <option value="user" <?php if ($sexe == "user") {echo 'selected = "selected"';} ?>>Simple User</option>
                                        </select>
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
