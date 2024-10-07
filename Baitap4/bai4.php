<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cạnh Huyền Tam Giác Vuông</title>
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
    <h2>CẠNH HUYỀN TAM GIÁC VUÔNG</h2>
    <form method="post" action="">
        <label for="sideA">Cạnh A:</label>
        <input type="number" id="sideA" name="sideA" placeholder="Nhập cạnh A" required>

        <label for="sideB">Cạnh B:</label>
        <input type="number" id="sideB" name="sideB" placeholder="Nhập cạnh B" required>

        <label for="hypotenuse">Cạnh huyền:</label>
        <input type="text" id="hypotenuse" name="hypotenuse" placeholder="Cạnh huyền" value="<?php echo isset($hypotenuse) ? $hypotenuse : ''; ?>" readonly>

        <button type="submit">Tính</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sideA = $_POST['sideA'];
            $sideB = $_POST['sideB'];

            // Tính cạnh huyền
            $hypotenuse = sqrt(pow($sideA, 2) + pow($sideB, 2));
        }
    ?>
</div>

</body>
</html>