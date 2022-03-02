<?php
function find_user_login_password(string $login,string $password):array{
    //ORM est partie recuperer les fichier json et nous retourne les utilisateurs
    $users=json_to_array("users");
    foreach ($users as $user) {
    if( $user['login']==$login && $user['password']==$password)
    return $user;
    }
    return [];
    }