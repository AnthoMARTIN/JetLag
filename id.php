<?php

"AUTHENTIFICATION"""

"""""VERIFIER L'EXISTENCE DE L'UTILISATEUR PAR SON IDENTIFIANT"""

function getUserByLogin(String $login):array |bool
{
    $connection = dbConnection();
    $sql = 'select user.mail, user.password from mydb.user where user.mail = :login';
    $query = $connection→prepare($sql);
    $query→execute([
        'login ⇒ $login,'
    ]);
    return $query→fetch() ?? false;
}

 """VERIFIER L'IDENTIFIANT ET LE MOT DE PASSE"""

function checkUser(string $email, string $password):bool
{
    if(!getUserByLogin($email)){
        return false;
    }
    if(!password_verify(
        $password,
        getUserByLogin($email)['password'],
    )){
        return false;
    }
    return true;
}

"""""VERIFIER L'AUTHENTIFICATION DE L'UTILISATEUR"""""

function processForm():void
{
    if(isSubmitted() && isValidLogininForm()){
        if(checkUser(
            getValues()['email'],
            getValues()['password']
        )){
            echo 'utilisateur authentifié';
        } else {
            echo 'utilisateur non authentifié';
        }
    }
}