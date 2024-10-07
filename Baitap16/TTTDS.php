<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Toán Trên Dãy Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6b3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffcc99;
            padding: 20px;
            border-radius: 5px;
            width: 400px;
            text-align: center;
            border: 2px solid #ff9900;
        }
        h2 {
            color: #b35900;
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .input-box {
            margin: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .input-box label {
            margin-right: 10px;
        }
        .input-box input {
            padding: 10px;
            width: 100px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff9900;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #cc7a00;
        }
        .output-box {
            margin-top: 20px;
            text-align: left;
        }
        .output-box label {
            display: block;
            margin-bottom: 5px;
            color: #b35900;
        }
        .output-box input {
            width: calc(100% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tính Toán Trên Dãy Số</h2>
    <form action="" method="POST">
        <div class="input-box">
            <label for="start">Số bắt đầu:</label>
            <input type="number" id="start" name="start" required placeholder="Nhập số bắt đầu">
        </div>
        <div class="input-box">
            <label for="end">Số kết thúc:</label>
            <input type="number" id="end" name="end" required placeholder="Nhập số kết thúc">
        </div>
        <input type="submit" value="Tính toán">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST["start"];
        $end = $_POST["end"];
        $sum = 0;
        $product = 1;
        $evenSum = 0;
        $oddSum = 0;

        for ($i = $start; $i <= $end; $i++) {
            $sum += $i; // Tính tổng các số
            $product *= $i; // Tính tích các số
            if ($i % 2 == 0) {
                $evenSum += $i; // Tính tổng các số chẵn
            } else {
                $oddSum += $i; // Tính tổng các số lẻ
            }
        }

        echo "
        <div class='output-box'>
            <label>Tổng các số:</label>
            <input type='text' readonly value='$sum'>
            <label>Tích các số:</label>
            <input type='text' readonly value='$product'>
            <label>Tổng các số chẵn:</label>
            <input type='text' readonly value='$evenSum'>
            <label>Tổng các số lẻ:</label>
            <input type='text' readonly value='$oddSum'>
        </div>";
    }
    ?>
</div>

</body>
</html>
