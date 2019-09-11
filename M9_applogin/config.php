<?php
/** khai báo các hằng số để kết nối csdl

 */
define("DB_SEVER", "localhost");
define("DB_SEVER_USERNAME", "root");
define("DB_SEVER_PASSWORD", "");
define("DB_SEVER_NAME", "demoapplogin");
/**
 * mysql_connect() kết nối dữ liệu đến CSDL
 */
$connection= mysqli_connect(DB_SEVER, DB_SEVER_USERNAME, DB_SEVER_PASSWORD, DB_SEVER_NAME);

/**
 * kiểm tra xem kết nối dữ liệu có thành công không
 * nếu không thành công ngắt ct bằng câu lệnh die()
 */
if ($connection == false) {
    die("ERROR không thể kết nối đến CSDL" . mysqli_connect_error());
}