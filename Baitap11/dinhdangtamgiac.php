<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận Dạng Tam Giác</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8e1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffcc80;
            border-radius: 8px;     
            padding: 20px;
            width: 320px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            color: #d84315;
            font-family: 'Arial', sans-serif;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        label {
            font-size: 16px;
            color: #5d4037;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background-color: #ef6c00;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #d84315;
        }
        .result {
            background-color: #ffecb3;
            color: #bf360c;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>NHẬN DẠNG TAM GIÁC</h2>
        <form method="POST" action="">
            <label for="side1">Cạnh 1:</label>
            <input type="number" id="side1" name="side1" min="1" required>
            <label for="side2">Cạnh 2:</label>
            <input type="number" id="side2" name="side2" min="1" required>
            <label for="side3">Cạnh 3:</label>
            <input type="number" id="side3" name="side3" min="1" required>
            <button type="submit">Nhận dạng</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $side1 = $_POST["side1"];
            $side2 = $_POST["side2"];
            $side3 = $_POST["side3"];

            // Kiểm tra điều kiện để tạo thành tam giác
            if (($side1 + $side2 > $side3) && ($side1 + $side3 > $side2) && ($side2 + $side3 > $side1)) {
                if ($side1 == $side2 && $side2 == $side3) {
                    $result = "Tam giác đều";
                } elseif ($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
                    $result = "Tam giác cân";
                } elseif ($side1 * $side1 == $side2 * $side2 + $side3 * $side3 || $side2 * $side2 == $side1 * $side1 + $side3 * $side3 || $side3 * $side3 == $side1 * $side1 + $side2 * $side2) {
                    $result = "Tam giác vuông";
                } else {
                    $result = "Tam giác thường";
                }
            } else {
                $result = "Không phải là tam giác hợp lệ!";
            }

            echo '<div class="result">Loại tam giác: ' . $result . '</div>';
        }
        ?>
    </div>
</body>
</html>
