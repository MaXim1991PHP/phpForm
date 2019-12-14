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
    }
}