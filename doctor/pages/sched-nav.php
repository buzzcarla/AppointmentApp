<nav style="margin-bottom: 0; background-color: #003a6f!important; height: 50px;">
    <div class="navbar-header">
        <img src="icon.png" style="height: 40px; position: absolute; padding-left: 20px;padding-top: 10px;"></img>
       <?php echo '<a class="navbar-brand" href="index.php" style="padding-left: 90px;color: white!important; position: absolute; top: 15px; font-weight: 600; font-size: larger;">Finding Doctors: Doctor '.$_SESSION['fname'].' '.$_SESSION['lname'].'</a>' ?>;

    </div>
    
    <div>
        <div >
            <ul style="float: right;position: relative;padding: 15px 20px;">
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Back to Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>