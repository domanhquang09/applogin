<?php
include_once "app/controllers/controllers.php";
include_once "app/controllers/backend/index.php";
include_once  "app/controllers/backend/post.php";
include_once  "app/controllers/frontend/index.php";
include_once  "app/controllers/frontend/post.php";

/**
 *muốn khởi tạo một đối tượng từ class
 *IndexController nằm trong folder app/controllers/backend
 * Việc đầu tiên ?
 */

// cách 1 sử dụng đầy đủ namspace khi khởi tạo đối tượng
$indexController = new \App\Controllers\Backend\IndexController();
$indexController->getInfo();


$indexController1 = new \App\Controllers\Backend\IndexController();
$indexController1->getInfo();