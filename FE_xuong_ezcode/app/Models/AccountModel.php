<?php

namespace App\Models;

use App\Config\DBMyAdmin;

class AccountModel extends DBMyAdmin
{
    protected $NameTable = "account";
    public function selectAllAccount()
    {
        $sql = "SELECT * FROM $this->NameTable ";
        return $this->getData($sql);
    }
    public function checkAccount($username, $password)
    {
        $sql = "SELECT * FROM $this->NameTable where username = '$username' and password = '$password'";
        return $this->getData($sql,false);
    }
    public function addAccount($hoten, $sdt, $username, $password, $email)
    {
        $sql = "INSERT INTO $this->NameTable(hoten,sdt,username,password,email,action)
        VALUE('$hoten','$sdt','$username','$password','$email','1')";
        return $this->getData($sql);
    }
}
