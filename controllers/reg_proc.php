<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    require_once 'classes/database.php';
    require_once 'classes/user.php';
    
    //Проверка есть ли пустые поля
    
    if (empty($_POST['name'])) exit ('Поле не заполнено');
    if (empty($_POST['nickname'])) exit ('Поле не заполнено');
    if (empty($_POST['password'])) exit ('Поле не заполнено');
    if (empty($_POST['password_too'])) exit ('Поле не заполнено');
        
    //Проверка равенства двух полей паролей
    if (strnatcmp($_POST['password'], $_POST['password_too']) != 0 ) exit ('Пароли не совпадают!');
        
    $user = new User();    
    $user->setName( trim($_POST['name']) );
    $user->setUsername( trim($_POST['nickname']) );
    $temp_password = trim($_POST['password']);
    $hash = password_hash($temp_password, PASSWORD_DEFAULT);
    $user->setUser_password($hash);
    try{
        $db = new Database();
        $link = $db->ConnectedToDB();

        $sql = "INSERT INTO users (users_name, nickname, password)
                VALUES (:users_name, :nickname, :password)";
        
        $sql_check = "SELECT * FROM users WHERE nickname = :nickname";
        
        //Проверка существования пользователя
        $result = $link->prepare($sql_check);
        $result->execute(['nickname' => $user->getUsername()]);
        $check_user = $result->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($check_user)){
            header("Location: ../index.php");
            exit('Такой пользователь существует');
        }
        
        $result = $link->prepare($sql);
        $result->execute(['users_name'=>$user->getName(), 'nickname'=>$user->getUsername(), 
                            'password'=>$user->getUser_password()]);
        echo 'Регистрация успешна';
        //@Todo Перейти на страницу TaskBoard
    }
    catch (PDOException $e){
        echo 'Error: '.$e->getMessage();
    }
    $link = NULL;
    $db = NULL;
    