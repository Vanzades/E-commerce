<?php

include_once('models/LoginModel.php');

class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    // Mengubah login_validation untuk menggunakan nama
    public function login_validation($email, $sandi)
    {
        return $this->model->login_validation($email, $sandi);
    }

    // Mengubah addUsers untuk menggunakan nama
    public function addUsers($nama, $email, $sandi)
    {
        return $this->model->addUsers($nama, $email, $sandi);
    }
}
