<div id="page-wrapper">
    <br/>
    <!-- /.row -->
    
    <form id=""  method="post" action="" >
        <div class="row">

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create A New User:
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        Country Details



                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

            <!-- /.col-lg-12 -->

        </div>
    </form>    
    <!-- /.row -->
</div>








<div class="col-lg-4"> 
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-flag fa-fw"></i> Total Country                            
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                $countryName = $report->getCountryName();
                foreach ($countryName as $val) {
                    echo '<li class="left clearfix"> ' . $val['countryName'] . '</li>';
                }
                ?>
            </ul>
        </div>

    </div>

</div>

<div class="col-lg-4"> 
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-tasks fa-fw"></i> Total Country                            
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                $skillSetName = $report->getSkillSetName();
                //print_r($skillSetName);
                foreach ($skillSetName as $val) {
                    echo '<li class="left clearfix"> ' . $val['skillsetDescription'] . '</li>';
                }
                ?>
            </ul>
        </div>

    </div>

</div>


<div class="col-lg-4"> 
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-space-shuttle fa-fw"></i> Total Aircraft                            
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                $aircraftName = $report->getAircraftTypeName();
                //print_r($skillSetName);
                foreach ($aircraftName as $val) {
                    echo '<li class="left clearfix"> ' . $val['aircraft_name'] . '</li>';
                }
                ?>
            </ul>
        </div>

    </div>

</div>

<div class="col-lg-4"> 
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-male fa-fw"></i> Total Inspector                           
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                $aircraftName = $report->getInspectorName();
                foreach ($aircraftName as $val) {
                    $id = $val['id'];
                    $tbl = $val['table'];
                    $idAndTbl = $id . $tbl;
                    //echo '<li class="left clearfix"><a class="openModal" data-id="'.$val['id'].'" data-toggle="modal" href="#myModal">'.$val['name'].'</a></li>';
                    ?>				    
                    <li class="left clearfix"><a href="#" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $idAndTbl; ?>" id="getUser" > <?php echo $val['name']; ?></a>  </li>  
                    <?php
                }
                ?>

            </ul>

        </div>

    </div>

</div>





<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 

            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button> 
                <h4 class="modal-title">
                    <i class="glyphicon glyphicon-user"></i> User Profile
                </h4> 
            </div> 
            <div class="modal-body"> 

                <div id="modal-loader" style="display: none; text-align: center;">
                    <img src="ajax-loader.gif">
                </div>                            
                <!-- content will be load here -->                          
                <div id="dynamic-content"></div>                             
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
            </div> 

        </div> 
    </div>
</div><!-- /.modal -->    

</div>




</div>


<script>
    $(document).ready(function () {

        $(document).on('click', '#getUser', function (e) {

            e.preventDefault();

            var uid = $(this).data('id');   // it will get id of clicked row

            $('#dynamic-content').html(''); // leave it blank before ajax call
            $('#modal-loader').show();      // load ajax loader

            $.ajax({
                url: 'fetchUserDetails.php',
                type: 'POST',
                data: 'id=' + uid,
                dataType: 'html'
            })
                    .done(function (data) {
                        console.log(data);
                        $('#dynamic-content').html('');
                        $('#dynamic-content').html(data); // load response 
                        $('#modal-loader').hide();		  // hide ajax loader	
                    })
                    .fail(function () {
                        $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                        $('#modal-loader').hide();
                    });

        });

    });

</script>
