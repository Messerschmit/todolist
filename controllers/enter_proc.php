<?php

    ini_set('display_error', 1);
    error_reporting(E_ALL);

    require_once 'classes/database.php';
    require_once 'classes/user.php';
    
//Проверка есть ли пустые поля
    
    if (empty($_POST['nickname'])) exit ('Поле не заполнено');
    if (empty($_POST['password'])) exit ('Поле не заполнено');
    
    $t_user_name = trim($_POST['nickname']);
    $t_password = trim($_POST['password']);

    try{
        $db = new Database();

        $link = $db->ConnectedToDB();

        $sql = "SELECT * FROM users WHERE nickname = :nickname";

        $result = $link->prepare($sql);
        
        $result->execute(['nickname' => $t_user_name]);
        
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        
//Проверка на наличие пользователя
        
        if (empty($rows)){
//          header("Location: ../index.php");
            echo 'Пользователя не существует';
            exit();
        }
        
        $user = new User();
        
        foreach ($rows as $value) {
            $user->setUser_id($value['users_id']);
            $user->setName($value['users_name']);
            $user->setUsername($value['nickname']);
            $user->setUser_password($value['password']);
        }
        
        //Проверка соответствия введенного пароля
        if( password_verify($t_password, $user->getUser_password()) ){
            //@TODO Goto TaskBoard
            echo 'Вход успешен';
        }else{
//          header("Location: ../index.php");
            echo 'Ошибка ввода имени пользователя или пароля';
            exit();
        }   
        
    }
    catch (PDOException $e){
        echo 'Error: '.$e->getMessage();
    }







