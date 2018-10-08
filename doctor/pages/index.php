<!DOCTYPE html>
<!-- CONNECT TO DATABASE -->
<?php
    require('../../ver2/connect.php');
?>
<html lang="en">
<head>
    <!-- HEAD LINKS -->
    <?php
        require('head.php');
    ?>
</head>

<body>
    <div id="wrapper">
        <!-- NAVIGATION BAR -->
        <?php 
            require ('nav.php');
        ?>
        <div id="page-wrapper">
             <img src="https://www.freewebheaders.com/wordpress/wp-content/gallery/medical/medical-doctor-stethoscope-and-office-sign-web-header.jpg" style=" width: 1235px; height: auto; position: absolute;">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 80px">
                    <h1 class="page-header" style="font-size: -webkit-xxx-large;padding-left: 200px;">Booking Management</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Booking List
                        </div>
                        <div class="panel-body">
                        <!-- BOOKING LIST TABLE -->
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr style="background-color:#003a6f!important; color:white;">
                                        <th>Patient Name</th>
                                        <th>Booking Date</th>
                                        <th>Time</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- QUERY FOR TABLE CONTENT -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS FILES USED IN THIS PAGE -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <!-- AJAX FOR UPDATING THE STATUS -->
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
            dataType: 'text json', 
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