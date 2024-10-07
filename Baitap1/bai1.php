<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #ff6600;
        }
        input[type="number"], input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="text"] {
            background-color: #e9ecef;
            border: none;
        }
        button {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            margin-top: 10px;
        }
        button:hover {
            background-color: #ff4500;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
    <form method="post" action="">
        <label for="length">Chiều dài:</label>
        <input type="number" id="length" name="length" placeholder="Nhập chiều dài" required>

        <label for="width">Chiều rộng:</label>
        <input type="number" id="width" name="width" placeholder="Nhập chiều rộng" required>

        <label for="area">Diện tích:</label>
        <input type="text" id="area" name="area" placeholder="Diện tích" value="<?php echo isset($area) ? $area : ''; ?>" readonly>

        <div class="button-container">
            <button type="submit">Tính</button>
        </div>
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $length = $_POST['length'];
            $width = $_POST['width'];
            $area = $length * $width;
        }
    ?>
</div>

</body>
</html>