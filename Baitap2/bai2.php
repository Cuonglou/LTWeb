<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích và Chu Vi Hình Tròn</title>
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
    <h2>DIỆN TÍCH và CHU VI HÌNH TRÒN</h2>
    <form method="post" action="">
        <label for="radius">Bán kính:</label>
        <input type="number" id="radius" name="radius" placeholder="Nhập bán kính" required>

        <label for="area">Diện tích:</label>
        <input type="text" id="area" name="area" placeholder="Diện tích" value="<?php echo isset($area) ? $area : ''; ?>" readonly>

        <label for="circumference">Chu vi:</label>
        <input type="text" id="circumference" name="circumference" placeholder="Chu vi" value="<?php echo isset($circumference) ? $circumference : ''; ?>" readonly>

        <button type="submit">Tính</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $radius = $_POST['radius'];
            $area = pi() * pow($radius, 2); // Tính diện tích
            $circumference = 2 * pi() * $radius; // Tính chu vi
        }
    ?>
</div>

</body>
</html>