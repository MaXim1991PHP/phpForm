<?php
if ($method === 'POST') {
    if ($route === '/registration') {
        $request = json_decode(file_get_contents('php://input'), true);
        $isValid = valid($request);
        if ($isValid) {
            $responceSuccess = [
                'result' => true,
                'message' => 'registration successful, go to login',
            ];
            
            $responceFail = [
                'result' => false,
                'message' => 'email or phone already exists',
            ];
            
            $request['age'] = 25;
            
            $isSave = addUser($request);
            
            if($isSave) {
                echo json_encode($responceSuccess);
            } else {
                echo json_encode($responceFail);
            }
            
            
        } else {
            $responce = [
                'result' => false,
                'message' => $isValid,
            ];
            echo json_encode($responce);
        }
    };
     if ($route === '/login') { 
         $email = $_POST['email'];
          $password = $_POST['passvord'];
         
         $User = getUser($email);
         /*if not exists user in database or password is not correct
          send page login with error
          */
         if(empty($User)|| empty($User[0])||$password !== $User[0]['passvord']){
             $error = 'User not found, enter correct email';
             include './views/header.php';
             include './views/login.php';
             include './views/footer.php';
             die;
          
         }
             $_SESSION['user'] = $User[0];
             
             $isAdmin = $User[0]['email']==='admai@gmail.com';
             
             if($isAdmin) {
             header("Location: /users");
             } else {
                 header("Location: /");
             }
       D($User);
         
    
     }
}