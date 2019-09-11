<?php
class Student {
    public function demo2() {
        echo "DEMO 1";
    }
}

class Student {
    public function demo2() {
        echo "DEMO 2";
    }
}

/**
 * cannot declare class student, because the name is alreadyin use in
 * khi mà 2 class , 2 function trùng tên nhau
 * bị xung đột bị lỗi
 * => để giải quyết vấn đề trung tên
 * người ta sử dụng namespace (không gian tên)
 *
 */
$student = new Student();