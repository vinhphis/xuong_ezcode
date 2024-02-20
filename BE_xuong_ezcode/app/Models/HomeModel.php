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
        $sql = "SELECT *,$this->TableCourse.action as act FROM $this->TableCourse 
        inner join category on category.id_category = $this->TableCourse.id_category";
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
    public function add($id_category, $name_course, $image_course, $price_course, $mota_course)
    {
        $sql = "INSERT INTO $this->TableCourse (id_category,name_course,image_course,price_course,mota_course,rating,action)
        VALUE('$id_category','$name_course','$image_course','$price_course','$mota_course','0','1')";
        return $this->getData($sql);
    }
    public function update($id_course, $id_category, $name_course, $image_course, $price_course, $mota_course)
    {
        if ($image_course != "")  $sql = "UPDATE $this->TableCourse SET  id_category ='$id_category', name_course ='$name_course', image_course ='$image_course', price_course ='$price_course', mota_course ='$mota_course' where id_course = $id_course";
        else  $sql = "UPDATE $this->TableCourse SET  id_category ='$id_category', name_course ='$name_course', price_course ='$price_course', mota_course ='$mota_course' where id_course = $id_course";

        return $this->getData($sql);
    }
    public function updateAction1($id_course)
    {
        $sql = "UPDATE $this->TableCourse SET action = 1 where id_course = $id_course";
        return $this->getData($sql);
    }
    public function updateAction0($id_course)
    {
        $sql = "UPDATE $this->TableCourse SET action = 0 where id_course = $id_course";
        return $this->getData($sql);
    }
}
