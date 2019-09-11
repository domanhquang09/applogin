<?php

include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

/**
 *Class cho
 *bất kể class nào khi extend từ abstract class
 * thì phải viết lại code thực thi cho các method
 * abstract của class cha
 * abstract class : lớp trừu tượng
 * extends : kế thừa
 * implements : thực thi
 * method : phương thức
 */

class Cho extends Dongvat implements An , Keu , Sinhsan {

    public function tenloai() {
        echo "tôi là chó";
    }

    public function thongtin()
    {
       echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";

    }

    public function toinayangi()
    {
        // TODO: Implement toinayangi() method.
        echo "Chó nhà nghèo ăn cám, chớ nhà giàu ăn thịt bò";
    }
    public function keunhuthenao()
    {
        // TODO: Implement keunhuthenao() method.
        echo "chó kêu gâu gâu";
    }
    public function sinhsannhuthenao()
    {
        // TODO: Implement sinhsannhuthenao() method.
        echo "chó đẻ con. thời gian mang thai mỗi lứa 3 tháng";
    }

}
$dog = new Cho();
$dog->tenloai();