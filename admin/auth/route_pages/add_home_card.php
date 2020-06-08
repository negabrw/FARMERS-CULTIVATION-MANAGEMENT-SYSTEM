<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Content</h1>
            </div>                   
            <?php
            if (isset($_POST['saveBtn'])) {
               
                $title = $_POST['title'];
				$short_description = $_POST['short_description'];
				$flag = $_POST['flag'];
				$insert = ("INSERT into home_card (title,short_description,flag) 
                                    VALUES ('" . $title . "','" . $short_description . "','" . $flag . "' )");
                $excQry = mysqli_query($con, $insert);
				if($excQry){
				echo "Data Added.";
				}
            
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">                       
                    
                    
                    <div class="form-group">
                        <label>Enter  Title</label>
                        <input class="form-control" name="title" type="text" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label>Card Short Description</label>
                        <textarea name="short_description" class="ckeditor" ></textarea>  
                    </div>
                     <div class="form-group">
                        <label>Flag</label>
                        <select name="flag" class="form-control" required>
                        <option >None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
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