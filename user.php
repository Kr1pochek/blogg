<?php
    require_once "vendor/autoload.php";
    use App\DB;
    $db = new DB();
    session_start();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./assets/css/common.css">
    <?php if($user_id): ?>
        <link rel="stylesheet" href="./assets/css/new_post.css">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <?php else: ?>
        <link rel="stylesheet" href="./assets/css/user.css">
    <?php endif;?>
    <title>Блог</title>
</head>
<body>
<?php include "include/header.php";?>

<?php
    if($user_id){
        include "include/user_post.php";
    }
    else{
        include "include/user_login.php";
    }
?>


<div class="overlay"></div>

<?php include "include/footer.php";?>




<?php if($user_id): ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php else:?>

    <script src="assets/js/index.js"></script>
<?php endif;?>

</body>
</html>
