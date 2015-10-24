<?php 
//提取字符串中的数字
function getNum($str)
 {
    return preg_replace('/\D/s', '', $str);
 // echo number('Hello 123 world 456 !!');
 // echo 123456
 }

?>