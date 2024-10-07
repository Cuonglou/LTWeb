<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm USCLN và BSCNN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
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
        <h2>Ước Số Chung Lớn Nhất và Bội Số Chung Nhỏ Nhất</h2>
        <form method="POST" action="">
            <label for="soA">Số A:</label>
            <input type="text" id="soA" name="soA" required>

            <label for="soB">Số B:</label>
            <input type="text" id="soB" name="soB" required>

            <button type="submit">Tìm USCLN và BSCNN</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the values of A and B from the form
            $a = intval($_POST['soA']);
            $b = intval($_POST['soB']);

            // Function to calculate USCLN (GCD) using do-while loop
            function timUSCLN($a, $b) {
                do {
                    $temp = $a % $b;
                    $a = $b;
                    $b = $temp;
                } while ($b != 0);
                return $a;
            }

            // Function to calculate BSCNN (LCM)
            function timBSCNN($a, $b, $uscln) {
                return ($a * $b) / $uscln;
            }

            // Find USCLN and BSCNN
            $uscln = timUSCLN($a, $b);
            $bscnn = timBSCNN($a, $b, $uscln);

            // Display results
            echo "<div class='result'><strong>USCLN:</strong> $uscln <br><strong>BSCNN:</strong> $bscnn</div>";
        }
        ?>
    </div>
</body>
</html>
