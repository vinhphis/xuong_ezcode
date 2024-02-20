<?php

namespace App\Models;

use App\Config\DBMyAdmin;

class CategoryModel extends DBMyAdmin
{
    protected $NameTable = "category";
    public function selectAllCategory()
    {
        $sql = "SELECT * FROM $this->NameTable 
        
        ";
        return $this->getData($sql);
    }
    public function checkAccount($username, $password)
    {
        $sql = "SELECT * FROM $this->NameTable where username = '$username' and password = '$password'";
        return $this->getData($sql, false);
    }
    public function add($name_course, $image_course)
    {
        $sql = "INSERT INTO $this->NameTable(name_category,image_category,action)
        VALUE('$name_course','$image_course','1')";
        return $this->getData($sql);
    }
}
