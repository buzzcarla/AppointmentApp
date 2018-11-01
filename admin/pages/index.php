<!DOCTYPE html>
<!-- Connect to DB -->
<?php
    require('../../ver2/connect.php');
    session_start();
?>
<html lang="en">
    <!-- head file -->
    <head>
        <?php
            require('head.php');
        ?>
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <?php 
                require ('nav.php');
            ?>
            <div id="page-wrapper">
                 <img class="admin-img" src="https://www.freewebheaders.com/wordpress/wp-content/gallery/medical/medical-doctor-stethoscope-and-office-sign-web-header.jpg" style=" width: 1235px; height: auto; position: absolute;">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 80px">
                        <h1 class="page-header admin-head-text" style="font-size: -webkit-xxx-large;padding-left: 200px;">Doctors Management</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Doctors List
                            </div>
                            <div class="panel-body">
                                <!-- DOCTORS MANAGEMENT TABLE -->
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
                                                      where user_level = '1' AND user_status != '-1'
                                                      Group BY user.user_id";
                                            $res = mysqli_query($mysql,$query);
                                            $ctr= 0;
                                            while($row = mysqli_fetch_row($res)){
                                                echo '
                                                <tr class="odd gradeX">
                                                    <td>'.$row[1].' '.$row[3].'</td>
                                                    <td><a href="./../../ver2/uploads/'.$row[16].'">Image Proof</a></td>
                                                    <td>'.$row[25].'</td>
                                                    <td class="center">'.$row[28].'</td>
                                                    <td class="center" id="'.++$ctr.'">
                                                        <select id="stat'.$ctr.'">';
                                                        if($row[11]==0){
                                                            echo '
                                                            <option value="1_'.$row[0].'">Active</option> 
                                                            <option selected value="0_'.$row[0].'">Deactivate/Ban</option>
                                                            <option value="-1_'.$row[0].'">Delete </option>';
                                                        } else if($row[11]==1){
                                                            echo '
                                                            <option selected value="1_'.$row[0].'">Active</option> 
                                                            <option  value="0_'.$row[0].'">Deactivate/Ban</option>
                                                            <option value="-1_'.$row[0].'">Delete </option>';
                                                        } 
                                                        echo '
                                                        </select>    
                                                    </td>
                                                </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../dist/js/sb-admin-2.js"></script>
        <!-- SCRIPT TO UPDATE TABLE -->
        <script>
            var fullname;
            var e;

        $(document).ready(function() {
            
            $('#dataTables-example').DataTable({
                responsive: true
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
                    alert("Update Successful.");
                }
            });
        });
        });
        
        </script>
    </body>
</html>