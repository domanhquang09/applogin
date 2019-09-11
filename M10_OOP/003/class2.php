<?php
class Student {


    /**
     *Khai báo các thuộc tính
     *của class
     *thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */

    /**
     * thuộc tính có giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * 1 - bên ngoài class
     * 2 - class kế thừa
     * 3 - bản thân trong class đó
     * @var string
     */


    protected $name1 = "demo public 1";


    public function getInfo() {
    echo "<br>" . __METHOD__;
    // Bên tron class
        return $this->name1;
    }
}

  class ChildStudent extends Student {
    public function getParentInfo() {
    echo "<br>" . __METHOD__;
    // truy cập thuộc tính bên trong của class kế thừa
        return $this->name1;
    }
  }
  /**
   *Bên ngoài class
   *
   */
$an = new Student();
//truy cập bên ngoài class
//echo "<br>" . $an->name1;

// truy cập từ bên trong class
echo "<br>" . $an->getInfo();

// truy cập clas kế thừa
$child = new ChildStudent();
echo "<br>" . $an->getParentInfo();
/*echo "<br>" . $an->name2;
echo "<br>" . $an->name3;
*/

 /**
  * kết luận: thuộc tính và phương thức cso gới hạn là protected
  * thì có thể truy cập từ bên trong class đó
  * và class kế thừa từ nó
  */

