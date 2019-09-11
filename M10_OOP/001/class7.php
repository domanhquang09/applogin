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

    public $age = 21;

    public $location = "Ha noi";

    public $point = 7;

    /**
     *phương thức
     */
    // phương thức khởi tạo
    public function __construct()
    {
        echo "<br>" . __METHOD__;
        $this->name = $name_param;
        $this->age = $age-param;
    }

    public function printInfo() {
        echo "<br>" . __METHOD__;
        echo "<br>tên :" . $this->name;
        echo "<br>tuổi :" . $this->age;
        echo "<br>địa điểm :" . $this->location;
        echo "<br>điểm tổng kết:" . $this->point;
    }
}

// khởi tạo đối tượng từ class
$tuan = new Student("nguyen van a", 30);
echo "<pre>";
print_r($tuan);
echo "</pre>";

