<?php
class Vuon {

    public $cannang = 50;

    public $chieucao = 150;

    public $tuoi = 50;

    /**
     * @return int
     */
    public function adn(){
        echo "<br>" . __METHOD__;
    }
}

 class Nguoi
 {
     public $hocchieu;
     public $sodienthoai;
     public $email;
     public function didulich() {
         echo "<br>". __METHOD__;
     }

     public function demokethua() {
         echo "<br>". __METHOD__;
         echo "<br>" . $this->cannang;
         echo "<br>" . $this->chieucao;
         echo "<br>" . $this->tuoi;
     }
 }

 $an = new Ngươi();
$an->demokethua();