<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateuser.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordconf = '';
$table = 'users';

function userLogin($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'you are now logged in';
    $_SESSION['type'] = 'success';
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashbaord.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordconf']);
        $_POST['admin'] = 0;

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);


        // log user in
        userLogin($user);
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordconf = $_POST['passwordconf'];
    }
}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            userLogin($user);
            // loing and thenr redirect
        } else {
            array_push($errors, 'Wrong details entered');
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
}
