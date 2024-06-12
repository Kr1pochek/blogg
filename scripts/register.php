<?php
    require_once "../vendor/autoload.php";
    use App\DB;
    if(isset($_POST["login"], $_POST["password"], $_POST["name"])){
        $db = new DB();
        session_start();
        if (!$db->check_new_login($_POST["login"])){
            $db->add_user($_POST["login"],$_POST["password"],$_POST["name"]);
            $_SESSION["message"]="Регистрация прошла успешно!";
        }
        else{
            session_start();
            $_SESSION["message"]="Такой логин занят!";
        }
    }
    header("location: " . $_SERVER["HTTP_REFERER"]);