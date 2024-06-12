<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (!isset($_SESSION['message'])){
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
?>

<header>
    <div class="inner_container">
        <button class="burger-menu">☰</button>
        <nav class="main-nav">
            <a href="#">Все</a>
            <a href="#">Разработка</a>
            <a href="#">Дизайн</a>
            <a href="#">Администрирование</a>
        <?php if($user_id):?>
            <a href="scripts/logout.php">Выход</a>
        <?php endif; ?>
        </nav>
        <div class="icons">
            <a href="search.php">
                <img src="assets/images/search-svgrepo-com.svg" alt="">
            </a>
            <a href="user.php">
                <img src="assets/images/profile-1341-svgrepo-com.svg" alt="">
            </a>
        </div>
    </div>
</header>

<div id="popup_message" class="<?= isset($message) ? "active" : "" ?>">
    <div class="center">
        <p><?= $message  ?></p>
    </div>
</div>
