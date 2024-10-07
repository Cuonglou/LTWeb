<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Lớn Hơn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background-color: #fff3cd;
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
    </style>
</head>
<body>

<div class="container">
    <h2>TÌM SỐ LỚN HƠN</h2>
    <form method="post" action="">
        <label for="numberA">Số A:</label>
        <input type="number" id="numberA" name="numberA" placeholder="Nhập số A" required>

        <label for="numberB">Số B:</label>
        <input type="number" id="numberB" name="numberB" placeholder="Nhập số B" required>

        <label for="largerNumber">Số lớn hơn:</label>
        <input type="text" id="largerNumber" name="largerNumber" placeholder="Số lớn hơn" value="<?php echo isset($largerNumber) ? $largerNumber : ''; ?>" readonly>

        <button type="submit">Tìm</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numberA = $_POST['numberA'];
            $numberB = $_POST['numberB'];

            // Tìm số lớn hơn
            $largerNumber = ($numberA > $numberB) ? $numberA : $numberB;
        }
    ?>
</div>

</body>
</html>