<?php


// khai báo class
class Student {


    /**
     *Khai báo câc thuộc tính
     *của class
     *thuộc tính chỉ tính chất đặc biệt
     *của class đó
     */

    public $name;

    public $age;

    public $location;

    public $point;
}

// khởi tạo đối tượng từ class
$tuan = new Student();

/**
 * muốn in ra cấu trức một đối tượng
 */
echo "<pre>";
print_r($tuan);
echo "</pre>";