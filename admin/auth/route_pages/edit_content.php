
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Content</h1>
            </div>                   
            <?php
            $getContent = ("SELECT * FROM content");
            $data = mysqli_query($con, $getContent);
            //echo "<pre>"; print_r($data); echo "</pre>";
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class=" table-responsive">                      
                    <table  class="table table-bordered">
                        <tr align="center">
                            <td><strong>Serial</strong></td>                               
                            <td><strong>Content</strong></td>
                            <td><strong>Menu</strong></td>
                            <td><strong>Edit</strong></td>


                        </tr>
                        <?php
                        $sl = 1;
                        foreach ($data as $val) {
                            ?>
                            <form  action="" method="POST">
                                <tr align="center">
                                    <td><?= $sl++; ?></td>
                                    <td><?= $val['content']; ?></td>
                                    <td><?= $val['parent_menu']; ?></td>

                                    <td><a href="?route=update_content&cid=<?= $val['id']; ?>">Edit</a></td> 

                                </tr>
                            </form>
                        <?php } ?>
                    </table> 
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<br/>



