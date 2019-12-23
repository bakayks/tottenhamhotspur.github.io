<?php
include '../db/dbFunctions.php';
$db = new db();
$conn = $db->conn;
$sql = "SELECT * FROM admins WHERE active = 1";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    if ($row['active'] == 1) {
        include 'html-header.php';
        include "nav-top.php";
        ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2>Добавление матчей:</h2>
                        <form action="match.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Лого клуба</label>
                                <input class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label>Противник</label>
                                <input class="form-control"  name="rival">
                            </div>
                            <div class="form-group">
                                <label>Дата матча</label>
                                <input class="form-control"  name="date_match">
                            </div>
                            <div class="form-group">
                                <label>Результат матча</label>
                                <input class="form-control"  name="result">
                            </div>
                            <button type="submit" class="btn btn-primary" name="add_match">Добавить</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <!-- /. ROW  -->
                <hr />


    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   
</body>
</html>
        <?php
        include 'html-footer.php';
        if(isset($_POST['add_match'])){
            $dbFunction = new dbFunctions();
            $dbFunction->addMatch($_POST['rival'], $_POST['logo'], $_POST['date_match'], $_POST['result']);
            echo "МАТЧ ДОБАВЛЕН";
        }

        exit;
    }else{
        echo "Вы не админ! Уходите!";
    }
}
echo "Вы не админ! Уходите!";
?>
