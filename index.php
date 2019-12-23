    <!--HTML-->
    <?php
    include 'content/html-header.php';
    ?>

    <!--MENU-->
    <?php
        include 'content/header.php';
    ?>
    <div class="image" style="margin-top: 70px">
        <div class="row">
            <div class="col-lg-12">
                <img style="width: 100%; height: 100vh" src="/img/13957112-0-image-a-160_1558826892460.jpg" alt="TOTTENHAM" width="100%">
            </div>
        </div>

    </div>

    <section class="all-news" style="background-color: #ffffff; margin-top: 50px">
        <div class="content">
            <div class="container">
                <h1 style="color: #111836; padding-top: 50px">Последние новости:</h1>
                <div style="padding-top: 50px; padding-bottom: 50px" class="row">
    <?php
        include "db/dbFunctions.php";
        $db = new db();
            $conn = $db->conn;
            $sql = "SELECT * FROM news order by data_news desc limit 2";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-6' style='margin-bottom: 20px'>";
                    echo '<div class="card" style="width: 100%; background-color:#111836;">';
                    echo "<div style='width: 100%; height: 150px; overflow: hidden'>";
                    echo '<img src=' . $row["image"] . ' class="card-img-top" alt="image" style="width:100%; height:auto;">';
                    echo "</div>";
                    echo '<div style="opacity:0.8;" class="card-body">';
                    echo "<div style='width:100%; height:100px; overflow: hidden'>";
                    echo '<h5 class=' . '"card-title"' . 'style="color:#ffffff">' . $row["tittle"] . '</h5>';
                    echo "</div>";
                    echo '<p class=' . '"card-text"' . 'style="color:#ffffff;overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;">' . $row["text"] . '</p>';
                    echo '<a class="btn btn-dark" href="readmore.php?id=' . $row["id"] . '" style="color: white">Читать далее...</a>';
                    echo '<span style="color: white; float: right;">' . $row["data_news"] . '</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
             ?>
                </div>
            </div>
        </div>
    </section>

    <section class="all-news" style="background-color: #ffffff; margin-top: 50px">
        <div class="content">
            <div class="container">
                <h1 style="color: #111836; padding-top: 50px">Последние матчи:</h1>
                <div style="padding-top: 50px; padding-bottom: 50px" class="row">
    <?php
            $db = new db();
            $conn = $db->conn;
            $sql = "SELECT * FROM matches order by date_match desc limit 2";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-6' style='margin-bottom: 20px'>";
                    echo '<div class="card" style="width: 100%; background-color:#111836; height: 400px">';
                    echo "<div style='width: 100%; height: 300px; overflow: hidden'>";
                    echo '<img src="../img/logo.png" class="card-img-top" alt="image" style="width:40%; height:auto;">';
                    echo '<img src="https://previews.123rf.com/images/illizium/illizium1904/illizium190400104/121672676-vs-versus-letters-vector-logo-isolated-on-transparent-background-vs-versus-symbol-for-confrontation-.jpg" class="card-img-top" alt="image" style="width:10%; margin-right: 20px; height:auto;">';
                    echo '<img src=' . $row["logo"] . ' class="card-img-top" alt="image" style="width:40%; height:auto;">';
                    echo "</div>";
                    echo '<div style="opacity:0.8;" class="card-body">';
                    echo "<div style='width:100%; overflow: hidden'>";
                    echo '<h5 class=' . '"card-title"' . 'style="color:#ffffff">Тоттенхэм против ' . $row["rival"] . '</h5>';
                    echo "</div>";
                    echo "<div style='width:100%; overflow: hidden'>";
                    echo '<h5 class=' . '"card-title"' . 'style="color:#ffffff">Результат: ' . $row["result"] . '</h5>';
                    echo "</div>";
                    echo '<span style="color: white; float: right;">' . $row["date_match"] . '</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
             ?>
                </div>
            </div>
        </div>
    </section>

    <!--SPONSORS-->
    <?php
        include 'content/sponsors.php';
    ?>




    <!--FOOTER-->
    <?php
        include 'content/footer.php';
    ?>


    <!--HTML-->
    <?php
        include 'content/html-footer.php';
    ?>