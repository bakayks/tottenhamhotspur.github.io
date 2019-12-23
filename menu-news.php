    <!--HTML-->
    <?php
        include 'content/html-header.php';
    ?>
    <!--MENU-->
    <?php
    include 'content/header.php';
    ?>

    <section class="all-news" style="background-color: #ffffff; margin-top: 50px">
        <div class="content">
            <div class="container">
                <h1 style="color: #111836; padding-top: 50px">Новости:</h1>
                <div style="padding-top: 50px; padding-bottom: 50px" class="row">
                    <?php
                        include 'db/dbFunctions.php';
                        $dbFunction = new dbFunctions();
                        $dbFunction->showNews();
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


    <!--html-->
    <?php
    include 'content/html-footer.php';
    ?>