<!DOCTYPE html>
<html lang="en">
    <!-- global head file -->
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
                <img src="https://www.freewebheaders.com/wordpress/wp-content/gallery/medical/medical-doctor-stethoscope-and-office-sign-web-header.jpg" style=" width: 1235px; height: auto; position: absolute;">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 80px">
                        <h1 class="page-header" style="font-size: -webkit-xxx-large;padding-left: 200px;">Users Management</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Users List
                            </div>
                            <div class="panel-body">
                                <!-- User table -->
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr style="background-color:#003a6f!important; color:white;">
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Clinic Name</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <<td>Hello There</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>John Smith</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>John Smith</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>John Smith</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>John Doe</td>
                                            <td>12349823</td>
                                            <td>Mactan Doctors</td>
                                            <td class="center">Mactan, Lapu-Lapu, Cebu</td>
                                            <td class="center">Active</td>
                                        </tr>
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

        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>
    </body>
</html>
