<?php
if (isset($_POST['saveBtn'])) {
    $parent_menu = $_POST['parent_menu'];
    $title = $_POST['title'];
    $productContent = $_POST['productContent'];
    $id = $_POST['id'];

    $update = ("UPDATE content SET content='$productContent', parent_menu='$parent_menu',title='$title' WHERE id='$id' ");
    $excQry = mysqli_query($con, $update);
}
?>
<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Content</h1>
            </div>                   
            <?php
            if (isset($_GET['cid'])) {
                $cid = $_GET['cid'];
                $getContent = ("SELECT * FROM content WHERE id='$cid'");
                $data = mysqli_query($con, $getContent);
                $row = mysqli_fetch_array($data);
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">                       
                    <div class="form-group">
                        <label>Select Menu</label>

                        <select name="parent_menu" id="parent_menu" class="form-control" required>
                            <option value="<?php echo $row['parent_menu'] ?>" ><?php echo $row['parent_menu'] ?></option>
                            <option value="Time and Crops">Time and Crops</option>
                            <option value="Modern System of Plough">Modern System of Plough</option>
                            <option value="Deases Crops and Solution">Deases Crops and Solution</option>
                            <option value="Gov Solution">Gov Solution</option>
                            <option value="Non Gov Solutions">Non Gov Solutions</option>
                            <option value="Digital System of Marketing">Digital System of Marketing</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label>Enter  Title</label>                        
                        <input class="form-control" name="id" type="hidden" value="<?php echo $row['id'] ?>">
                        <input class="form-control" name="title" type="text" value="<?php echo $row['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Enter Product Content</label>
                        <textarea name="productContent" class="ckeditor" ><?php echo $row['content'] ?></textarea>  
                    </div>
                    <!--<div class="form-group">
                        <label>Distributor Image </label>
                        <input type="file" name="file" class="form-control">
                    </div>-->

                    <div class="box-footer button_submit"  >
                        <button type="submit" name="saveBtn" class="btn btn-success pull-left" >Update Content</button>                               
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<br/>