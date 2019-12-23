<?php
include("db/dbFunctions.php");
include "db/session.php";
session_start();
$session = new Session();
$session->startSessionAsAdmin();
?>
<!--HTML-->
<?php
include 'content/html-header.php';
?>
<main>
    <section id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-md-4">
                    <form action="admin-login.php" method="post" class="login100-form validate-form flex-sb flex-w">
                        <span class="login100-form-title p-b-53">Sign in</span>
                        <a href="#" class="btn-face m-b-20"></a>
                        <a href="#" class="btn-google m-b-20"></a>
                        <div class="p-t-31 p-b-9">
                            <div class="wrap-input100 validate-input" data-validate="Usr is required">
                                <input class="input100" type="text" name="login">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="p-t-31 p-b-9">
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="password">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="container-login100-form-btn m-t-17">
                                    <input type="submit" class="login100-form-btn" value="Sign in" name="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php echo "<p style='padding: 10px; color:red; font-size:20px; margin:auto; width:300px;'>".$session->login."</p>";?>
                </div>
            </div>
        </div>
    </section>

    </section>
</main>

    <!--html-->
<?php
include 'content/html-footer.php';
?>