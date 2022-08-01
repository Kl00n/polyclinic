<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Authorization;

class AuthorizationController extends Controller
{
    public function authorizationPage(){
        $this->title = 'Авторизация';
        if (!empty($_POST['login']) and !empty($_POST['password'])){
            $authorization = New Authorization ;
            $user = $authorization->dataVerification($_POST['login'],$_POST['password']);
            if(!empty($user)) {
                $_SESSION["user"] = $user;
                header("Location: /staff/");
            }
            return $this->render('authorization/authorizationPage',['error'=>'Пароль или логин введены неверно']);
        }
        else{
            return $this->render('authorization/authorizationPage');
        }
    }
}