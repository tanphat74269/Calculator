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
    case '*':
        $result = $a * $b;
        break;
    case '/':
        $result = $a / $b;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="icon" href="./favicon.jpg" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Form ẩn -->
    <form method="GET" action="" style="display: none" name="myForm">
        <input name='a' id="a" type="text">
        <input name='b' id="b" type="text">
        <input name='cal' id= "cal" type="text">
    </form>
    <div id="maytinh">
        <!-- Màn hình -->
        <div id="manhinh">
            <div class="pheptinh"><?=$a.$cal.$b?></div>
            <div class="ketqua"><?=$result?></div>
        </div>
        <!-- Các nút bấm -->
        <div id="nutbam">
            <div class="nut" style="padding: 6px; line-height: 28px" onclick="resetData()">Xóa</div>
            <div class="nut" value="0" onclick="setValue(0)">0</div>
            <div class="nut" value="+" onclick="setPhepTinh('+')">+</div>
            <div class="nut" value="-" style="padding-right: 17px"  onclick="setPhepTinh('-')">-</div>
            <div class="nut" value="7" onclick="setValue(7)">7</div>
            <div class="nut" value="8" onclick="setValue(8)">8</div>
            <div class="nut" value="9" onclick="setValue(9)">9</div>
            <div class="nut" value="*" onclick="setPhepTinh('*')">*</div>
            <div class="nut" value="4" onclick="setValue(4)">4</div>
            <div class="nut" value="5" onclick="setValue(5)">5</div>
            <div class="nut" value="6" onclick="setValue(6)">6</div>
            <div class="nut" value="/" style="padding-right: 19px" onclick="setPhepTinh('/')">/</div>
            <div class="nut" value="1" onclick="setValue(1)">1</div>
            <div class="nut" value="2" onclick="setValue(2)">2</div>
            <div class="nut" value="3" onclick="setValue(3)">3</div>
            <div class="nut" value="=" onclick="submitForm()">=</div>
        </div>
    </div>
    
    <script>
        option = 1;

        function resetData() {
            if($('#a').val() == '') {
                submitForm();
            } else {
                option = 1;
                $('#a').val('');
                $('#b').val('');
                $('#cal').val('');
            }
            buildCal();
        }

        function setValue(num) {
            if(option == 1) {
                $('#a').val($('#a').val() + num);
            } else {
                $('#b').val($('#b').val() + num);
            }
            buildCal();
        }

        function setPhepTinh(phepTinh) {
            $('#cal').val(phepTinh);
            option = 2;
            buildCal();
        }

        function submitForm() {
            $('[name=myForm]').submit();
        }

        function buildCal() {
            $('.pheptinh').html($('#a').val() + $('#cal').val() + $('#b').val());
        }
    </script>
</body>
</html>