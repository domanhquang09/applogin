<?php

include_once "../abstract/dongvat.php";
class ga extends Dongvat implements An,Keu,Sinhsan {


    public function tenloai() {
        echo "tôi là gà";
    }
    public function thongtin() {
        echo "gà là loài 2 chân năng từ 1 đến 3 cân tùy giống gà";
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