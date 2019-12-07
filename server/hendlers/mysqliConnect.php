
<?php

function getUsers() {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "websitephp");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение с MySQL.");
    }
    $dataUsers = $DB->query('select username,age,email from users');

    $users = $dataUsers->fetch_all(MYSQLI_ASSOC);
    //var_dump($users);
    mysqli_close($DB);
    return $users;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "websitephp");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение с MySQL.");
    }
     
    
    $sql = "INSERT INTO users (username, email, `passvord`, phone, age) ";
    $sql .= "VALUES('{$data['name']}','{$data['email']}',{$data['password']},'{$data['phone']}',{$data['age']})"; //konkatenaciya php
    
    $resultQuery = $DB->query($sql);

    mysqli_close($DB);
    return $resultQuery;
}
//$user =[
//   "username"=>'vasa-1',
  //  "email"=>'vasa-1@gmail.com',
 //   "passvord"=>'56565656',
 //   "phone"=>'+380956786767',
 //   "age"=>'54',
//];

//addUser($user);