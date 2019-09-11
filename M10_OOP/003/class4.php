<?php

class Student1 {
    public $name = "nguyen van an";

    public function getInfo() {
        echo "<br>" . __METHOD__;
        echo "<br>" . $this->name;

    }
}

class Student2 {
    public static $name = "nguyen van an";

    /**
     * trong 1 method static thì không được sử dụng từ khóa $this
     * để gọi đến chính bản thân class đó
     * mà phải sử dụng từ khóa self
     * Khi muốn gọi đến một method hay 1 thuộc tính đucợ khai báo static
     * self::$tên_thuộc_tính và self::tên_phương_thúc()
     * chú ý là trong class thường khi truy cập đến thuộc tính static ví dụ
     * ví dụ $this->>name
     * nhưng trong method static thì khi gọi đến thuộc tính static ví dụ
     * self::$name
     */
    public static function getInfo() {
        echo "<br>" . __METHOD__;
        //echo "<br>" .$this->>name;
        echo "<br>" . self::$name;
        echo "<br>" . self::getInfo2();
    }
    public static function getInfo2() {
        echo "<br>" . __METHOD__;
    }
}

/**
 * Tai sao phải sư dụng từ khóa static ?
 * khi mà gọi 1method hay 1 cái thuộ tính từ class ở bên ngoài class đó
 *thì luôn phải khởi tạo 1 obiect đói tượng của class đó
 */
$student = new Student();
$student->getInfo();

/**
 * Khi sử dụng từ khoá static cho thuộc tính và phương thức
 * thì không cần thiết phải khởi tạo đối tượng
 */
echo "<br> --- " . Student2::$name;
Student::getInfo2();
Student::getInfo2();