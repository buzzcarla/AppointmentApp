<!DOCTYPE html>
<html lang="en">
    <!-- head file -->
    <head>
        <?php
        session_start();
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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Profile</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Update Admin Information
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control" placeholder="Enter First Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input class="form-control" placeholder="Enter Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Photo</label>
                                                <input type="file">
                                            </div>
                                            <div class="form-group">
                                                <label>Radio Buttons</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Other
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-default">Update</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COMMON JS SCRIPTS -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>
        <script src="../dist/js/sb-admin-2.js"></script>
    </body>

</html>
