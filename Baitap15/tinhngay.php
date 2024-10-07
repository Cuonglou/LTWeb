<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Ngày Trong Tháng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f8d7da;
            padding: 20px;
            border-radius: 5px;
            width: 350px;
            text-align: center;
            border: 2px solid #ff0000;
        }
        h2 {
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
            background-color: #ff6666;
            padding: 10px;
            border-radius: 5px;
            text-transform: uppercase;
        }
        .input-box {
            margin: 15px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 100px;
        }
        .input-box input {
            padding: 10px;
            width: 40px;
            margin: 0 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: center;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #f8f8f7;
            color: #000;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #99d5e4;
        }
        .output-box {
            margin-top: 20px;
            margin-right: 10px;
        }
        .output-box input {
            width: 70%;
            padding: 7px;
            border: 1px solid #b3a64c;
            border-radius: 5px;
            text-align: center;
            background-color: #eff18a;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>TÍNH NGÀY TRONG THÁNG</h2>
    <form action="" method="POST">
        <div class="input-box">
            <label for="month">Tháng/năm:</label>
            <input type="text" id="month" name="month" required placeholder="Tháng">
            <span>/</span>
            <input type="text" id="year" name="year" required placeholder="Năm">
        </div>
        <input type="submit" value="Tính số ngày">
    </form>

    <?php
    $days = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST["month"];
        $year = $_POST["year"];

        if (is_numeric($month) && is_numeric($year) && $month > 0 && $month <= 12) {
            // Sử dụng switch case để tính số ngày trong tháng
            switch ($month) {
                case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                    $days = 31;
                    break;
                case 4: case 6: case 9: case 11:
                    $days = 30;
                    break;
                case 2:
                    // Kiểm tra năm nhuận
                    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                        $days = 29; // Tháng 2 năm nhuận có 29 ngày
                    } else {
                        $days = 28; // Tháng 2 không nhuận có 28 ngày
                    }
                    break;
            }
            $days = "Tháng $month Năm $year Có $days Ngày";
        } else {
            $days = "Vui lòng nhập tháng và năm hợp lệ";
        }
    }
    ?>

    <div class="output-box">
        <input type="text" readonly value= "<?php echo isset($days) ? $days : ''; ?>" placeholder="Kết quả số ngày">
    </div>
</div>

</body>
</html>
