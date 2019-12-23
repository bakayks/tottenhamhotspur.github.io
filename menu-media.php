<!--HTML-->
<?php
include 'content/html-header.php';
?>
<!--MENU-->
<?php
include 'content/header.php';
?>

<div  style="margin-top: 70px">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">
        <div class="container">
            <div class="row">
                <?php
                include 'db/dbFunctions.php';
                $dbFunction = new dbFunctions();
                $dbFunction->showGalley();
                ?>
            </div>
        </div>


    </div>

</div>

<!--SPONSORS-->
<?php
include 'content/sponsors.php';
?>



<!--FOOTER-->
<?php
include 'content/footer.php';
?>


<!--html-->
<?php
include 'content/html-footer.php';
?>
