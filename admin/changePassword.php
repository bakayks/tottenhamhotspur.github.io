<?php
include 'html-header.php';
include 'nav-top.php';
$connect = mysqli_connect("localhost", "root", "", "tottenham");
$query = "SELECT * FROM admins where active = 1";
$result = mysqli_query($connect, $query);
echo "
       <form action='changePassword.php' method='POST'>
            <label>Старый логин</label>
            <input type='text' name='oldadmin' class='form-control'>
          
            <label>Новый логин</label>
            <input type='text' name='newadmin' class='form-control'>
         
            <label>Введите старый пароль</label>
            <input type='text' name='oldpassword' class='form-control'>
          
            <label>Введите новый пароль</label>
            <input type='password' name='newpassword' class='form-control'>
          
            <label>Повторите новый пароль</label>
            <input type='password' name='repeatnewpassword' class='form-control'>
            
          <input type='submit' name='submit' class='btn btn-dark' value='Изменить пароль'>
    </form>
    ";
while ($row = $result->fetch_assoc()) {
    if ($row['active'] == 1) {
        if ($_POST['submit']) {
            $oldpassword = ($_POST['oldpassword']);
            $newpassword = ($_POST['newpassword']);
            $repeatnewpassword = ($_POST['repeatnewpassword']);
            $oldadmin = ($_POST['oldadmin']);
            $newadmin = ($_POST['newadmin']);

            $oldpassworddb = $row['password'];
            $oldadmindb = $row['login'];

            if ($oldadmin == $oldadmindb) {
                echo "success!";
                $SQL = 'UPDATE admins SET login ="' . $newadmin. '" where active = 1';
                mysqli_query($connect, $SQL);
            } else {
                die("Old admin doesn't match!");

            }
            if ($oldpassword == $oldpassworddb) {
                if ($newpassword == $repeatnewpassword) {
                    echo "success!";
                    $SQL = 'UPDATE admins SET password ="' . $repeatnewpassword. '" where active = 1';
                    mysqli_query($connect, $SQL);
                } else
                    die("New passwords don't match!");
            } else {
                die("Old password doesn't match!");

            }
        }
    } else
        die("You must be logged in to change password");
}
include 'html-footer.php';
?>