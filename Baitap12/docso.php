<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #64b5f6;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            color: #0d47a1;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        label {
            font-size: 16px;
            color: #01579b;
        }
        input[type="text"] {
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
        }
        button {
            padding: 10px;
            background-color: #1976d2;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0d47a1;
        }
        .result {
            background-color: #ffeb3b;
            color: #d32f2f;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ĐỌC SỐ</h2>
        <form method="POST" action="">
            <label for="number">Nhập số (0 -> 9):</label>
            <input type="text" id="number" name="number" required pattern="[0-9]">
            <button type="submit">=></button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            // Tạo mảng để chuyển đổi số thành chữ
            $numbersInWords = [
                0 => "Không",
                1 => "Một",
                2 => "Hai",
                3 => "Ba",
                4 => "Bốn",
                5 => "Năm",
                6 => "Sáu",
                7 => "Bảy",
                8 => "Tám",
                9 => "Chín"
            ];

            if (is_numeric($number) && $number >= 0 && $number <= 9) {
                $result = $numbersInWords[$number];
            } else {
                $result = "Vui lòng nhập số từ 0 đến 9!";
            }

            echo '<div class="result">Bằng chữ: ' . $result . '</div>';
        }
        ?>
    </div>
</body>
