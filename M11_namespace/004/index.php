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

// nạp namspace bằng use cách 2
use \App\Controllers\Backend\IndexController;


$indexController = new IndexController();
