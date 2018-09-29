<!DOCTYPE html>
<?php
	
	require('../../ver2/connect.php');
	
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            require ('nav.php');
        ?>

        <div id="page-wrapper">
             <img src="https://www.freewebheaders.com/wordpress/wp-content/gallery/medical/medical-doctor-stethoscope-and-office-sign-web-header.jpg" style=" width: 1235px; height: auto; position: absolute;">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 80px">
                    <h1 class="page-header" style="font-size: -webkit-xxx-large;padding-left: 200px;">Doctors Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Doctors List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr style="background-color:#003a6f!important; color:white;">
                                        <th>Name</th>
                                        <th>License Number</th>
                                        <th>Clinic Name</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                        $query = "SELECT * FROM user
                                                  LEFT JOIN doctors on doctors.user_id = user.user_id
                                                  LEFT JOIN location_clinic on location_clinic.doctor_id = doctors.doctor_id
                                                  LEFT JOIN clinic on clinic.clinic_id = location_clinic.clinic_id  
                                                  where user_level = '1'
                                                  Group BY user.user_id";
                                        $res = mysqli_query($mysql,$query);
                                        $ctr= 0;
                                        while($row = mysqli_fetch_row($res)){
                                            
                                            echo '
                                          
                                            <tr class="odd gradeX">
                                                    <td>'.$row[1].' '.$row[3].'</td>
                                                    <td>'.$row[16].'</td>
                                                    <td>'.$row[24].'</td>
                                                    <td class="center">'.$row[27].'</td>
                                                    <td class="center" id="'.++$ctr.'">
                                                        <select id="stat'.$ctr.'">';
                                                        if($row[12]==0){
                                                            echo '
                                                            <option value="1_'.$row[0].'">Active</option> 
                                                            <option selected value="0_'.$row[0].'">Deactivate/Ban</option>
                                                            <option value="-1_'.$row[0].'">Delete </option>';
                                                        } else if($row[12]==1){
                                                            echo '
                                                            <option selected value="1_'.$row[0].'">Active</option> 
                                                            <option  value="0_'.$row[0].'">Deactivate/Ban</option>
                                                            <option value="-1_'.$row[0].'">Delete </option>';
                                                        } else if($row[12]==-1){
                                                            echo '
                                                            <option value="1_'.$row[0].'">Active</option> 
                                                            <option  value="0_'.$row[0].'">Deactivate/Ban</option>
                                                            <option selected value="-1_'.$row[0].'">Delete </option>';
                                                        }
                                                        echo '
                                                        </select>    
                                                    </td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        var fullname;
        var e;
    $(document).ready(function() {
       
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    $('select').on("change",function(){
		var newStat = this.value;
		$.ajax({
			url: "../../ver2/requests/updateUserStat.php",
			type: 'POST',
		
			dataType: 'text json', // added data type
			data: {
                stat: newStat
			},
			success: function(res) {
				alert(res);
				
			}
    	});
    });


       
    </script>

</body>

</html>
