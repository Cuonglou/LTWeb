<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số chia hết cho A và B</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Số chia hết cho A và B</h2>
        <form method="POST" action="">
            <label for="N">Nhập N:</label>
            <input type="text" id="N" name="N" required>

            <label for="A">Nhập A:</label>
            <input type="text" id="A" name="A" required>

            <label for="B">Nhập B:</label>
            <input type="text" id="B" name="B" required>

            <button type="submit">Tìm số</button>
        </form>

        <?php
        // This block executes when the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get input values
            $N = intval($_POST['N']);
            $A = intval($_POST['A']);
            $B = intval($_POST['B']);

            $result = [];

            // Loop through numbers and find those divisible by both A and B
            for ($i = 1; $i <= $N; $i++) {
                if ($i % $A == 0 && $i % $B == 0) {
                    $result[] = $i;
                }
            }

            // Display the result
            if (!empty($result)) {
                echo "<div class='result'><strong>Các số nhỏ hơn N chia hết cho A và B:</strong><br>" . implode(", ", $result) . "</div>";
            } else {
                echo "<div class='result'><strong>Không có số nào chia hết cho cả A và B!</strong></div>";
            }
        }
        ?>
    </div>
</body>
</html>
