<?php
// echo file_get_contents("https://www.bauto28.com/latest-date.php");
echo json_encode(json_decode(file_get_contents("https://www.bauto28.com/latest-date.php"),true),JSON_UNESCAPED_UNICODE);
?>