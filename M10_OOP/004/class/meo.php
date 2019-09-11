<?php

include_once "../abstract/dongvat.php";
class meo extends Dongvat implements An , Keu , Sinhsan {


    public function tenloai() {
        echo "tôi là mèo";
    }
    public function thongtin() {
        echo "tôi là mèo có 4 chân hay nằm góc bếp";
    }
    public function toinayangi()
    {
        // TODO: Implement toinayangi() method.
    }
    public function keunhuthenao()
    {
        // TODO: Implement keunhuthenao() method.
    }
    public function sinhsannhuthenao()
    {
        // TODO: Implement sinhsannhuthenao() method.
    }
}
