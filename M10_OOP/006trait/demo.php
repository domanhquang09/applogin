<?php


class ClassicPhone {
    /**
     * gọi điện
     */
    public function callVoice() {
        echo "<br>" .__METHOD__;
    }
    /**
     * Nhận cuộc gọi
     */
    public function receiveVoice() {
        echo "<br>" . __METHOD__;
    }

}

/**
 * khai báo trait
 * trait Ipod
 *
 */
trait Ipod {
    public function listenMusic() {
        echo "<br>". __METHOD__;
    }
}

 trait Radio {
    public function ListenRadio() {
        echo "<br>" . __METHOD__;
    }
 }

 trait Computer {
    public function sendEmail() {
        echo "<br>" . __METHOD__;
    }

    public function wordOffice(){
        echo "<br>" . __METHOD__;
    }
    public function playGame() {
        echo "<br>" . __METHOD__;
    }
 }

 class Smartphone extends ClassicPhone{
    /**
     * nhứng trait vào trong class
     * để sủ dụng đa kế thừa
     */
    use Ipod, Radio, Computer;
 }
 /**
  * Khởi tạo đối tượng smartphone
  */
 $samsung = new Smartphone();
 $samsung->callVoice();
 $samsung->receiveVoice();
 $samsung->listenMusic();
 $samsung->ListenRadio();
 $samsung->playGame();