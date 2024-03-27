<?php
require_once('calculate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Calculator</title>
</head>
<body>
    <!-- Form ẩn -->
    <form method="GET" action="" style="display: none;" name="myForm">
        <input name='a' id="a" type="text">
        <input name='b' id="b" type="text">
        <input name='cal' id= "cal" type="text">
    </form>
    <div class="maytinhbotui">
        <!-- Màn hình -->
        <div id="manhinh">
            <div class="pheptinh"><?=$a.$cal.$b?></div>
            <div class="ketqua"><?=$result?></div>
        </div>
        <div>
            <button class="btn" onclick="resetData()">CE</button>
            <button class="btn">(</button>
            <button class="btn">)</button>
            <button class="btn" onclick="setPhepTinh('%')">%</button>
        </div>
        <div>
            <button class="btn" onclick="setValue(7)">7</button>
            <button class="btn" onclick="setValue(8)">8</button>
            <button class="btn" onclick="setValue(9)">9</button>
            <button class="btn" onclick="setPhepTinh('/')">/</button>
        </div>
        <div>
            <button class="btn" onclick="setValue(4)">4</button>
            <button class="btn"onclick="setValue(5)">5</button>
            <button class="btn" onclick="setValue(6)">6</button>
            <button class="btn" onclick="setPhepTinh('x')">x</button>
        </div>
        <div>
            <button class="btn" onclick="setValue(1)">1</button>
            <button class="btn" onclick="setValue(2)">2</button>
            <button class="btn" onclick="setValue(3)">3</button>
            <button class="btn" onclick="setPhepTinh('-')">-</button>
        </div>

        <div>
            <button class="btn" onclick="setValue(0)">0</button>
            <button class="btn">.</button>
            <button class="btn dau-bang" onclick="submitForm()">=</button>
            <button class="btn" onclick="setPhepTinh('+')">+</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>