<?php
$a = $b = $cal = '';
$result = 0;
if(!empty($_GET)) {
    if(isset($_GET['a'])) {
        $a = $_GET['a'];
    }
    if(isset($_GET['b'])) {
        $b = $_GET['b'];
    }
    if(isset($_GET['cal'])) {
        $cal = $_GET['cal'];
    }
}
switch ($cal) {
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case 'x':
        $result = $a * $b;
        break;
    case '/':
        if(is_int($a / $b)) { // Nếu là số nguyên
            $result = $a / $b;
        } else {
            $result = round($a / $b, 5); // Nếu là số thập phân thì làm tròn 5 chữ số sau dấu phẩy
        }
        break;
    case '%':
        $result = $a % $b;
        break;
}
