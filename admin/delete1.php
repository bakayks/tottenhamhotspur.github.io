<?php
$connect = mysqli_connect("localhost", "root", "", "tottenham");
if(isset($_POST["id"]))
{
    foreach($_POST["id"] as $id)
    {
        $query = "DELETE FROM matches WHERE id = '$id'";
        mysqli_query($connect, $query);
    }
}
?>