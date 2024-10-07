<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaeok</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #00897b;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: white;
        }
        .container h2 {
            text-align: center;
            font-family: 'Arial', sans-serif;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        label {
            font-size: 16px;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background-color: #004d40;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #00796b;
        }
        .result {
            background-color: #c8e6c9;
            color: black;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>TÍNH TIỀN KARAOKE</h2>
        <form method="POST" action="">
            <label for="start">Giờ bắt đầu:</label>
            <input type="number" id="start" name="start" min="0" max="23" required>
            <label for="end">Giờ kết thúc:</label>
            <input type="number" id="end" name="end" min="0" max="23" required>
            <button type="submit">Tính tiền</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = $_POST["start"];
            $end = $_POST["end"];

            // Kiểm tra giờ hợp lệ
            if ($start < 0 || $start > 23 || $end < 0 || $end > 23 || $start >= $end) {
                echo '<div class="result">Giờ không hợp lệ!</div>';
            } else {
                $total = 0;

                for ($i = $start; $i < $end; $i++) {
                    // Từ 9h sáng đến 17h chiều: 30,000 VND/giờ
                    if ($i >= 9 && $i < 17) {
                        $total += 30000;
                    } 
                    // Từ 17h chiều đến 24h: 45,000 VND/giờ
                    else if ($i >= 17 && $i <= 23) {
                        $total += 45000;
                    } 
                    // Từ 0h đến 9h sáng: 60,000 VND/giờ
                    else {
                        $total += 60000;
                    }
                }
                echo '<div class="result">Tiền thanh toán: ' . number_format($total) . ' VND</div>';
            }
        }
        ?>
    </div>
</body>
</html>