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
                $targetDir = "slider_images/";
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                

                if (isset($_POST["saveBtn"]) && !empty($_FILES["file"]["name"])) {
                    // Allow certain file formats
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                            // Insert image file name into database
                            //$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
                           $insert = ("INSERT into slider (image) 
                                    VALUES ('" . $fileName . "' )");
                           $excQry=mysqli_query($con,$insert);                            
                            if ($excQry) {
                                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
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
                    $statusMsg = 'Please select a file to upload.';
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
                        <label>Insert Slider Image </label>
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