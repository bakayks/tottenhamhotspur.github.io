<?php include "../db/dbFunctions.php";
$dbFunctions = new dbFunctions();
$db = new db();
$conn = $db->conn;
$id = $_GET["id"];
$SQL = "SELECT * FROM news where id = '$id'";
$result = $conn->query($SQL);
include "html-header.php";
include "nav-top.php";
while($row = $result->fetch_assoc()) {
    if ($_GET["id"]) {
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Редактирование новости</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr/>
                <div class="row">
                    <div class="col-md-7">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" style="opacity: 0" name="id" value="<?php echo $row["id"] ?>">
                                <img src="<?php echo $row["image"] ?>" width="300" alt=""><br>
                            </div>
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input class="form-control" name="title"
                                       value="<?php echo $row["tittle"] ?>">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" name="description" rows="2"><?php echo $row["description"] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" name="text" rows="10"><?php echo $row["text"] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ссылка на фото</label>
                                <input class="form-control" name="image" value="<?php echo $row["image"] ?>">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Submit Button</button>
                        </form>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr/>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        </div>';
        <?php
    }
    ?>
    <?php

    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $id = $_POST["id"];
        $description = $_POST["description"];
        $text = $_POST["text"];
        $img = $_POST["image"];
        $sql = 'UPDATE news SET id =' . $id . ', tittle ="' . $title . '", text = "' . $text . '", image ="' . $img . '", description ="' . $description . '" WHERE id = ' . $id . '.';
        if ($conn->query($sql) === TRUE) {
            echo '<meta http-equiv="Refresh" content="0; URL=http://tottenhamhotspur/admin/editNews.php?id='.$id.'">';
        } else {
            echo "Error updating record: " . $conn->error;
        }


    }
}
include 'html-footer.php';
?>