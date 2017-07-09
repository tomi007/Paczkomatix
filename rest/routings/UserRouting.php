<?php

try {
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET': //Pobieranie
            if (isset($param[2]) && is_numeric($param[2])) {
                //pojedynczy
                $result = User::load($param[2]);
            } else {
                //wszystkich
                $result = User::loadAll();
            }

            echo json_encode($result);


            break;

        case 'POST': //Dodanie
        case 'PUT':

            $user = new User($_POST['id'],
                $_POST['name'],
                $_POST['surname'],
                $_POST['address_id'],
                $_POST['credits'],
                $_POST['password']
            );
            if (empty($_POST['id'])) {
                $user->save();
            } else {
                $user->update();
            }
            echo json_encode($user);

            break;

        case 'DELETE':
            $user = User::load($param[2]);
            $user->delete();
            break;


    }

}catch(Exception $e){
    echo json_encode(['error' => $e->getMessage()]);
}

