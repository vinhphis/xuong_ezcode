<?php

namespace App\Models;

use App\Config\DBMyAdmin;

class BillModel extends DBMyAdmin
{
    protected $TableName = "bill";
    public function selectBill($id_course, $id_account)
    {
        $sql = "SELECT * FROM $this->TableName where id_course = $id_course and id_account = $id_account ";
        return $this->getData($sql, false);
    }
    public function selectBillAccount($id_account)
    {
        $sql = "SELECT * FROM $this->TableName 
        INNER join account on account.id_account = bill.id_account
        INNER join course on course.id_course = bill.id_course
        where bill.id_account = $id_account";
        return $this->getData($sql);
    }
    public function addBill($id_course, $id_account)
    {
        $sql = "INSERT INTO $this->TableName( `id_course`, `id_account`, `action`) 
        VALUES ('$id_course','$id_account','1')";
        return $this->getData($sql, false);
    }
}
