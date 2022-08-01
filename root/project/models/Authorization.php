<?php

namespace Project\Models;

use \Core\Model;

class Authorization extends Model
{
//    private function generateSalt()
//    {
//        $salt = '';
//        $saltLength = 8;
//
//        for ($i = 0; $i < $saltLength; $i++) {
//            $salt .= chr(mt_rand(33, 126));
//        }
//
//        return $salt;
//    }

    public function dataVerification($login, $password)
    {

        $login = $_POST['login'];
//        $salt = $this->generateSalt();
        $password = ($_POST['password']);

        $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
        $user = $this->findOne($query);

        if (!empty($user)) {
            return true;
        }
    }
}