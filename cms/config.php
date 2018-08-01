<?php
$db_host = "localhost"; // Giữ mặc định là localhost
$db_name    = 'ngthucco_data';// Can thay doi
$db_username    = 'ngthucco'; //Can thay doi
$db_password    = 'Thuc123*/';//Can thay doi
@mysql_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối database");
@mysql_select_db("{$db_name}") or die("Không thể chọn database");
?>