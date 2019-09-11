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


    public $name1 = "demo public 1";
    protected $name2 = "demo protectes 2";
    private $name3 = "demo private 3";
    public function getInfo() {
    echo "<br>" . __METHOD__;
    // bên trong class
        return $this->name1;
    }
}

  class ChildStudent extends Student {
    public function getParrentInfo() {
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
echo "<br>" . $an->name1;
echo "<br>" . $an->getInfo();

$child = new ChildStudent();
echo "<br>" . $an->getParentInfo();
/*echo "<br>" . $an->name2;
echo "<br>" . $an->name3;
*/

 /**
  * Kết luận : thuộ tính và method có giới hạn truy cập là  public thì
  * có thể truy cập ở mọi nơi
  */

