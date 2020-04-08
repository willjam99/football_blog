<?php 
function validateUser($user)
{
    
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username Issue (field empty)');
    }
    
    if (empty($user['email'])){
        array_push($errors, 'Email Issue (field empty)');
    }
    if (empty($user['password'])){
        array_push($errors, 'password Issue (field empty)');
    }

    if (($user['passwordconf'] !== $_POST['password'])){
        array_push($errors, 'passwords do not match');
    }
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if(isset($existingUser)){
        array_push($errors, 'Email has alreaady been used!');
    }
    return $errors;
}
function validateLogin($user)
{
    
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username Issue (field empty)');
    }
    
    if (empty($user['password'])){
        array_push($errors, 'password Issue (field empty)');
    }

    return $errors;
}