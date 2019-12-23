<?php
include "content/html-header.php";
include "content/header.php";
?>

    <main>
        <?php
        include "db/db.php";
        $db = new db();
        $conn = $db->conn   ;
        $id = $_GET['id'];
        $SQL = "SELECT * FROM news where id = '$id'";
        $result = $conn->query($SQL);
        while($row = $result->fetch_assoc()){
            ?>
            <section id="part2" style="padding-bottom: 50px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 " style="padding-top: 50px">
                            <img src="<?php echo $row["image"] ?>"  alt="" style="width: 500px; height: 300px; margin-top: 50px">
                            <h3 style="padding-top: 30px; color: black"><?php echo $row["tittle"] ?></h3>
                            <p class="text-left" style="padding-top: 30px; font-size:16px; color: black"><?php echo $row["text"] ?></p>
                            <p><?php echo $row["data_news"] ?></p>
                        </div>

                    </div>
                </div>
            </section>
            <?php
        }
        ?>

    </main>


<?php include("content/footer.php");
include "content/html-footer.php";
?>
