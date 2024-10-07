<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Năm Âm Lịch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #d6e9f8;
            padding: 20px;
            border-radius: 5px;
            width: 350px;
            text-align: center;
            border: 2px solid #000;
        }
        h2 {
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
            background-color: #003366;
            padding: 10px;
            border-radius: 5px;
            text-transform: uppercase;
        }
        .input-box {
            margin: 15px 0px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .input-box label {
            color: #000;
            font-weight: bold;
            margin-right: 10px;
            width: 40%;
            text-align: center;
        }
        .input-box input[type="text"] {
            padding: 10px;
            width: 55%;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: center;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ffcc00;
            color: #000;
            cursor: pointer;
            font-weight: bold;
            margin: 0px 10px;
        }
        input[type="submit"]:hover {
            background-color: #ff9900;
        }
        .output-box {
            margin: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .output-box input {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            width: 55%;
            text-align: center;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tính Năm Âm Lịch</h2>
    <form action="" method="POST">
        <div class="input-box">
            <label for="year">Năm dương lịch:</label>
            <label for="result">Năm âm lịch:</label>
            
        </div>
        <div class="input-box">
            <input type="text" id="year" name="year" required placeholder>
            <input type="submit" value="=>">
            <input type="text" id="result" name="result" readonly value="<?php echo isset($amLichYear) ? $amLichYear : ''; ?>">
        </div>
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $duongLichYear = $_POST["year"];
        
        function convertToLunarYear($year) {
            $can = '';
            $chi = '';
            
            // Tính Can (Thiên Can)
            switch ($year % 10) {
                case 0: $can = 'Canh'; break;
                case 1: $can = 'Tân'; break;
                case 2: $can = 'Nhâm'; break;
                case 3: $can = 'Quý'; break;
                case 4: $can = 'Giáp'; break;
                case 5: $can = 'Ất'; break;
                case 6: $can = 'Bính'; break;
                case 7: $can = 'Đinh'; break;
                case 8: $can = 'Mậu'; break;
                case 9: $can = 'Kỷ'; break;
            }
            
            // Tính Chi (Địa Chi)
            switch ($year % 12) {
                case 0: $chi = 'Thân'; break;
                case 1: $chi = 'Dậu'; break;
                case 2: $chi = 'Tuất'; break;
                case 3: $chi = 'Hợi'; break;
                case 4: $chi = 'Tý'; break;
                case 5: $chi = 'Sửu'; break;
                case 6: $chi = 'Dần'; break;
                case 7: $chi = 'Mão'; break;
                case 8: $chi = 'Thìn'; break;
                case 9: $chi = 'Tỵ'; break;
                case 10: $chi = 'Ngọ'; break;
                case 11: $chi = 'Mùi'; break;
            }

            return $can . ' ' . $chi;
        }

        $amLichYear = convertToLunarYear($duongLichYear);
        echo "<script>document.getElementById('result').value = '$amLichYear';</script>";
    }
    ?>
</div>

</body>
</html>
