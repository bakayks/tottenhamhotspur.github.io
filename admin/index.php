<?php
include '../db/db.php';
$db = new db();
$conn = $db->conn;
$sql = "SELECT * FROM admins WHERE active = 1;";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    if ($row['active'] == 1) {
        include 'html-header.php';
        include "nav-top.php";
        $db = new db();
        $connect = $db->conn;
        $query = "SELECT * FROM matches";
        $result = $connect->query($query);
        echo '
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Админ панель</h2>
                    <img src="https://thetheodores.org/sites/default/files/pictures/picture-1-1486774242.png" width="400" alt="">
                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">120 New</p>
                            <p class="text-muted">Messages</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">30 Tasks</p>
                            <p class="text-muted">Remaining</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">240 New</p>
                            <p class="text-muted">Notifications</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">3 Orders</p>
                            <p class="text-muted">Pending</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    1
                </div>


            </div>

        </div>

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <<!--HTML-->';
        include 'html-footer.php';
        exit;
    }else{
        echo "Вы не админ! Уходите!";
    }
}
echo "Вы не админ! Уходите!";
?>

