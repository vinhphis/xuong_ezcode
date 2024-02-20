<?php

namespace App\Models;

use App\Config\DBMyAdmin;

class HomeModel extends DBMyAdmin
{
    protected $TableCate = "category", $TableCourse = "course";
    public function selectAllCategory()
    {
        $sql = "SELECT * FROM $this->TableCate ";
        return $this->getData($sql);
    }
    public function selectAllCourse($price_course_free, $price_course)
    {
        $sql = "SELECT * FROM $this->TableCourse ";
        if (isset($price_course_free) && !empty($price_course_free)) {
            $sql .= "where price_course = 'mien phi'";
        }
        if (isset($price_course) && !empty($price_course)) {
            $sql .= "where price_course != 'Miễn Phí'";
        }

        return $this->getData($sql);
    }
    public function selectOneCourse($id_course, $price_course_free)
    {
        $sql = "SELECT * FROM $this->TableCourse where id_course = $id_course";
        if (isset($price_course_free) && !empty($price_course_free)) {
            $sql .= " and price_course = 'Miễn Phí'";
        }
        return $this->getData($sql, false);
    }
}
