<!DOCTYPE html>
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Users List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
