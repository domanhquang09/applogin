<?php

/**
 * class ( lớp )
 * object ( đối tượng )
 * instance ( thể hiện của một class ) đối tuọng cụ thể
 * class người
 * đối tượng hay instnce là tuấn
 */

class Student {
    /**
     *thuôc tính trong hướng đối tượng
     *là tính chất của class đó
     */

    public $name;

    public $age;

    public $loaction;

    public $point;
    /**
     * phương thức đầu tiên của class
     * phương thức khởi tạo __construct(0)
     * từ class mà không cần gọi trực tiếp
     * hàm thì nằm ngoài class
     * còn phương thức method nằm trong class
     * method chính là hàm bên trong class
     */

    public function  __construct($name_param, $age_param, $loaction_param)
    {
        // gán tham số truyền vào thuộc tính của class

        /**
         * trong class đẻ gọi đến chính class thì ta dùng từ khóa $this
         * đẻ gọi thuốc tính $this->>tên_thuộc_tính nhưng chú ý là tên thuộc tính
         * không có $
         * $this->$name ( viết sai )
         * $this->name (viết đúng )
         */

        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $loaction_param;

    }

    /**
     *xây dựng phương thức khác
     */
    public function printInto() {
        echo "<br> __METHOD__ " . __METHOD__;
        echo "<br>Tên của sinh viên : " . $this->name;
        echo "<br>tuổi của sinh viên : " . $this->age;
        echo "<br>Quê hương của sinh viên : " . $this->location;
    }

    /**
     *Phương thức tính ddierm trung bình
     * @param $point_arr_param
     * @return bool
     */
    public function calculatePoint($point_arr_param) {
        /**
         * is-array() kiểm tra biến có phải một mảng hay không
         *!empty() check không rỗng
         * empty() check rỗng
         * ! toán tử ! phủ định ngược lại
         */
        if (is_array($point_arr_param) && !empty($point_arr_param)) {
            $count= 0;
            $total = 0;
            foreach ($point_arr_param as $key => $value) {
                // $total = $total +value;
                $total += $value;
                $count++;
            }
            $point = $total/$count;
            $this->point=$point;
        }
        return false;
    }
     }// kết thúc class

/**
 * khởi tạo đối tượng cụ thể của class
 * sử dụng từ khóa new tên-class()
 */
$tuan = new Student("tuấn", "21","bắc ninh");
echo "<br> Gọi đến method printInfo()";
/**
 * Gọi một phương thức
 */
$tuan->printInfo();
/**
 * Gọi 1 số thuộc tính bên trong class
 */
echo "<br> In ra tên của sinh viên bên ngoài class " . $tuan->name;
echo "<br> In ra tuổi của sinh viên bên ngoài class " . $tuan->age;
echo "<br> In ra quê hương của sinh viên bên ngoài class " . $tuan->location;
echo "<br> In ra cấu trúc của class";
/**
 * Xem cấu trúc của 1 class
 * thì sử dụng hàm print_r()
 */
echo "<pre>";
print-r($tuan);
echo "</pre>";
// gọi đến phương thức calculatePoint()
$point = array(
'java' => 5,
    'database' => 3,
    'php' => 6,
    'html' => 2,
    'oop' => 7,
    '.net' => 9
);
// gọi bằng phương thức cảu class
$tuan->calculatePoint($point);
echo "<br>diem trung binh : " . $tuan->point;



