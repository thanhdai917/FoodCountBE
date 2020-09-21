<?php
class User extends DB
{
    public function login($email, $password)
    {
        $sql = "SELECT id,email,password FROM user
            where email = '" . $email . "'";
        $result = $this->queryOne($sql);
        if ($result) {
            $password_hashed = password_verify($password, $result['password']);
            if ($password_hashed) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function loginIsCokie($value){
        $sql = "SELECT * FROM user
            where email = '" . $value . "'";
        $result = $this->queryOne($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
