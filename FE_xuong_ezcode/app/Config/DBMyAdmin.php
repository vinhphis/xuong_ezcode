<?php

namespace App\Config;
use PDO;
class DBMyAdmin
{
    protected $conn, $stmt;

    public function getConnect()
    {
        $this->conn = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . NAMEDB
                . ";charset=" . DBCHARSET,
            USERNAME,
            PASSW
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
