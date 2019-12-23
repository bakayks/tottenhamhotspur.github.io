<nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: #0B0E1E; opacity: 0.9; padding:0;position: fixed;">
    <div class="container">
        <a class="navbar-brand nav-link" href="../index.php"><img src="../img/logo.png" alt="tottenham" style="width: 20%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="../index.php">ГЛАВНАЯ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="../menu-news.php">НОВОСТИ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="../menu-matches.php">МАТЧИ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="../tottenham.php">ТОТТЕНХЭМ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="../menu-media.php">МЕДИА</a></li>
                <li class="nav-item"><a class="nav-link text-white" data-toggle="modal" data-target="#SignInModal" style="color: white"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- MODAL REGISTRATION -->
<?php
    include './content/modal-registration.php';
?>

