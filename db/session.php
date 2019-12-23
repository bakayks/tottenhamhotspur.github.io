<?php
class Session
{
    function startSessionAsAdmin(){
        $db = new db();
        $conn = $db->conn;
        if ($_SESSION['admin'])
        {

            $sql = "UPDATE admins SET active = 0 WHERE active = 1";
            $conn->query($sql);
            session_destroy();
            header ("Location: ../admin-login.php");
            exit;
        }

        if ($_POST['submit']) {
            $db = new db();
            $conn = $db->conn;
            $sql = "SELECT * FROM admins";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row['login'] == $_POST['login'] and $_POST['login']) {
                        $login = $row['login'];
                        break;
                    }
                }
            }
            if ($login == $_POST['login'] AND $row['password'] == $_POST['password'] and $_POST['login']) {
                $sql = "UPDATE admins SET active = 1 WHERE login = '$login'";
                $conn->query($sql);
                $_SESSION['admin'] = $login;
                header('Location: admin/index.php');
                exit;
            } else $login = 'Login is incorrect';
        }

    }

    function destroySession(){
        if ($_SESSION['admin'])
        {
            session_unset();
            session_destroy();
            header ("Location: admin/index.php");
            exit;
        }
    }


}
?>