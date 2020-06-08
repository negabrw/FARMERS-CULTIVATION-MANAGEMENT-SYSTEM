<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Content</h1>
            </div>                   
            <?php
            if (isset($_POST['saveBtn'])) {
                $statusMsg = '';
// File upload path 28 81 12 380
                $targetDir = "images/";
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                $parent_menu = $_POST['parent_menu'];
                
                $title = $_POST['title'];
                $productContent = $_POST['productContent'];

                if (isset($_POST["saveBtn"]) && !empty($_FILES["file"]["name"])) {
                    // Allow certain file formats
                    $allowTypes = array('jpg', 'png', 'jpeg');
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                            $insert = ("INSERT into content (content, parent_menu,title,image_url) 
                                    VALUES ('" . $productContent . "','" . $parent_menu . "','" . $title . "','" . $fileName . "' )");
                            $excQry = mysqli_query($con, $insert);
                            if ($excQry) {
                                $statusMsg = "The file " . $fileName . " has been uploaded successfullysssss.";
                            } else {
                                $statusMsg = "File upload failed, please try again.";
                            }
                        } else {
                            $statusMsg = "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                    }
                } else {
                    $insert = ("INSERT into content (content, parent_menu,title,image_url) 
                                    VALUES ('" . $productContent . "','" . $parent_menu . "','" . $product_menu . "','" . $product_sub_menu . "','" . $title . "','' )");
                            $excQry = mysqli_query($con, $insert);
                }

// Display status message
                echo $statusMsg;
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">                       
                    <div class="form-group">
                        <label>Select Menu</label>

                        <select name="parent_menu" id="parent_menu" class="form-control" required>
                            <option >None</option>
                            <option value="time-crops">Time and Crops</option>
                            <option value="modern-technology-of-crop-plough">Modern System of Plough</option>
                            <option value="crop-deseases-and-solutions">Deases Crops and Solution</option>
                            <option value="gov-help">Gov Solution</option>
                            <option value="non-gov-help">Non Gov Solutions</option>
                            <option value="digital-system-of-crop-marketing">Digital System of Marketing</option>
                            
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Enter  Title</label>
                        <input class="form-control" name="title" type="text" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label>Enter Product Content</label>
                        <textarea name="productContent" class="ckeditor" ></textarea>  
                    </div>
                    <div class="form-group">
                        <label>Distributor Image </label>
                        <input type="file" name="file" class="form-control">
                    </div>

                    <div class="box-footer button_submit"  >
                        <button type="submit" name="saveBtn" class="btn btn-success pull-left" >Save Content</button>                               
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