<?php
    include 'db.php';
    class dbFunctions
    {
        public $db;

        function showMatch()
        {
            $this->db = new db;
            $conn = $this->db->conn;
            $sql = "SELECT * FROM matches ORDER BY date_match DESC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-4' style='margin-bottom: 20px'>";
                    echo '<div class="card" style="width: 100%; background-color:#111836; height: 300px">';
                    echo "<div style='width: 100%; height: 150px; overflow: hidden'>";
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
        }

        function showNews()
        {
            $this->db = new db;
            $conn = $this->db->conn;
            $sql = "SELECT * FROM news ORDER BY data_news DESC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-4' style='margin-bottom: 20px'>";
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
        }

        function addNews($tittle, $image, $text, $description)
        {
            $this->db = new db;
            $conn = $this->db->conn;
            $tek_data = date("Y-m-d");
            $sql = "INSERT INTO news(tittle,image,text,data_news,description) VALUES('$tittle','$image','$text', '$tek_data','$description');";

            $result = $conn->query($sql);

        }

        function addMatch($rival, $logo,$date, $result)
        {
            $this->db = new db;
            $conn = $this->db->conn;
            $sql = "INSERT INTO matches(rival,date_match,logo,result) VALUES('$rival','$date', '$logo','$result');";

            $result = $conn->query($sql);

        }

        function showGalley(){
            $this->db = new db;
            $conn = $this->db->conn;
            $sql = "select image from news";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '  
                      <figure class="col-md-4">
                        <a href="'.$row['image'].'" data-size="1600x1067">
                           <div  style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="'.$row['image'].'" class="img-fluid">
                          </div>
                        </a>
                      </figure>';
                }
            }
        }
    }
?>