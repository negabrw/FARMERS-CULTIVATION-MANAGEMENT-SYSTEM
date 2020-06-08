<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Subscription User</h1>
            </div>                   

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">          
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>NID/DOB NO</th>
                                <th>Village</th>
                                <th>Upazila</th>
                                <th>District</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						$getUser="SELECT * FROM farmer_info WHERE is_active=1";
						$excQry=mysqli_query($con,$getUser);
						$sl=1;
						while($row=mysqli_fetch_array($excQry)){
						?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $row['name']; ?> </td>
                                <td><?php echo $row['mobile_no']; ?> </td>
                                <td><?php echo $row['nid_or_dob_no']; ?> </td>
                                <td><?php echo $row['village']; ?> </td>
                                <td><?php echo $row['upozila']; ?> </td>
                                <td><?php echo $row['district']; ?> </td>
                            </tr>
                            <?php
							}
							?>
                        </tbody>
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