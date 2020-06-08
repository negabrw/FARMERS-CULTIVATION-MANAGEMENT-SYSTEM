<link rel="stylesheet" href="dist/css/home_delivery_tree_custom.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Total Order View:         
        </h1>

        <ol class="breadcrumb">
            <li><i class="fa fa-pencil-square-o"></i> Customer Profile</li>
            <li>Customer Profile Index</li>
        </ol>
    </section>
    <?php
    $data = $crud->getAllUserInfo();
    ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <br/>
                    <div class=" table-responsive">                      
                        <table  class="table table-bordered">
                            <tr align="center">
                                <td><strong>Serial</strong></td>
                                <td><strong>User Name</strong></td>
                                <td><strong>Full Name</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Contact No</strong></td>
                                <td><strong>Change password</strong></td>
                               
                                
                            </tr>
                            <?php
                            $sl = 1;
                            foreach ($data as $val) {
                                ?>
                                <form  action="" method="POST">
                                    <tr align="center">
                                        <td><?= $sl++; ?></td>
                                        <td><?= $val['user_name']; ?></td>
                                        <td><?= $val['full_name']; ?></td>
                                        <td><?= $val['email']; ?></td>
                                        <td><?= $val['contact_no']; ?></td> 
                                        <td><a href="?route=action_userChangePassword&uid=<?= $val['admin_id']; ?>">Change Password</a></td> 
                                        
                                    </tr>
                                </form>
                            <?php } ?>
                        </table> 
                    </div>

                    <br/>
                </div>
            </div>            
        </div>
    </section>
</div>

