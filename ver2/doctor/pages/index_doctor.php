<!DOCTYPE html>
<!-- CONNECT TO DATABASE -->
<?php
    session_start();
    require('../../connect.php');
 
?>
<html lang="en">
<head>
    <!-- HEAD LINKS -->
    <?php
        require('head_doctor.php');
    ?>
</head>

<body>
    <div id="wrapper">
        <!-- NAVIGATION BAR -->
        <?php 
            require ('nav.php');
        ?>
        <div id="page-wrapper">
             <img class="admin-img" src="https://www.freewebheaders.com/wordpress/wp-content/gallery/medical/medical-doctor-stethoscope-and-office-sign-web-header.jpg" style=" width: 1235px; height: auto; position: absolute;">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 80px">
                    <h1 class="page-header admin-head-text" style="font-size: -webkit-xxx-large;padding-left: 200px;">Booking Management</h1>
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
                                        //1 ----- PENDING
                                        //2 ----- ACCEPTED
                                        //3 ----- NOTIFIED
                                        //4 ----- DECLINED
                                        $query = "SELECT * FROM user
                                                  LEFT JOIN booking_list on booking_list.user_id = user.user_id
                                                  WHERE booking_list.doctor_id ='".$_SESSION['docid']."' AND booking_list.book_date >= DATE(NOW())
                                                  Group BY booking_list.booking_id";
                                        $res = mysqli_query($mysql,$query);
                                        $ctr= 0;
                                        if($res){

                                  
                                            while($row = mysqli_fetch_row($res)){
                                                echo '
                                                <tr class="odd gradeX">
                                                        <td>'.$row[1].' '.$row[3].'</td>
                                                        <td>'.$row[16].'</td>
                                                        <td>'.date('h:i:s A',strtotime($row[16])).'</td>
                                                        <td class="center">'.$row[18].'</td>
                                                        <td class="center" id="'.++$ctr.'">
                                                            <select id="stat'.$ctr.'">';
                                                        if($row[17]==1){
                                                            echo '
                                                            <option value="2_'.$row[13].'">ACCEPTED</option> 
                                                            <option selected value="1_'.$row[13].'">PENDING</option>
                                                            <option value="4_'.$row[13].'">DECLINED </option>';
                                                        } else if($row[17]==2){
                                                            echo '
                                                            <option selected value="2_'.$row[13].'">ACCEPTED</option> 
                                                            <option  value="1_'.$row[13].'">PENDING</option>
                                                            <option value="4_'.$row[13].'">DECLINED </option>';
                                                        } else if($row[17]==4){
                                                            echo '
                                                            <option value="2_'.$row[13].'">ACCEPTED</option> 
                                                            <option  value="1_'.$row[13].'">PENDING</option>
                                                            <option selected value="4_'.$row[13].'">DECLINED </option>';
                                                        }
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
            url: "../../ver2/requests/updateBookStat.php",
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