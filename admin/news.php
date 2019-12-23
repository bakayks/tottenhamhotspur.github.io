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
                        <h2>Добавление новости:</h2>
                        <form action="news.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="title">Image URL</label>
                                <input class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="add_news">Добавить</button>
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
</html><?php
include 'html-footer.php';
        if(isset($_POST['add_news'])){
            $dbFunction = new dbFunctions();
            $dbFunction->addNews($_POST['title'], $_POST['image'], $_POST['text'], $_POST['description']);
            echo "НОВОСТЬ ДОБАВЛЕНА";
        }

        exit;
}else{
    echo "Вы не админ! Уходите!";
}
}

echo "Вы не админ! Уходите!";
?>
