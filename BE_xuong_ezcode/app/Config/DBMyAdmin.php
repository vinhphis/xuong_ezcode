<?php

namespace App\Config;

use PDO;

class DBMyAdmin extends env
{
    protected $conn, $stmt;

    public function getConnect()
    {
        $this->conn = new PDO(
            "mysql:host=" . $this->DBHOST
                . ";dbname=" . $this->NAMEDB
                . ";charset=" . $this->DBCHARSET,
            $this->USERNAME,
            $this->PASSW
        );
        return $this->conn;
    }


    // nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
    //sẽ chạy được các câi truy vấn như thêm sửa xóa
    function getData($query, $getAll = true)
    {
        $this->getConnect();
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute();
        if ($getAll) {
            return $this->stmt->fetchAll();
        }
        return $this->stmt->fetch();
    }
}
