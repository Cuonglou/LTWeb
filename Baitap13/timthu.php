<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Thứ Trong Tuần</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f8bbd0;
            border-radius: 8px;
            padding: 20px;
            width: 350px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            color: #d81b60;
            margin-bottom: 20px;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        label {
            display: inline;
            font-size: 16px;
            color: #880e4f;
        }
        input[type="number"] {
            padding: 8px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            width: 50%;
            padding: 10px;
            background-color: #d81b60;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: block;
            margin: 0 auto;

        }
        button:hover {
            background-color: #ad1457;
        }
        .result {
            background-color: #fce4ec;
            color: #d50000;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>TÌM THỨ TRONG TUẦN</h2>
        <form method="POST" action="">
            <label for="day">Ngày:</label>
            <input type="number" id="day" name="day" min="1" max="31" required>
            <label for="month">Tháng:</label>
            <input type="number" id="month" name="month" min="1" max="12" required>
            <label for="year">Năm:</label>
            <input type="number" id="year" name="year" min="1000" max="9999" required>
            <button type="submit">Tìm thứ trong tuần</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];

            // Kiểm tra tính hợp lệ của ngày tháng năm
            if (checkdate($month, $day, $year)) {
                // Tạo đối tượng DateTime từ ngày tháng năm nhập vào
                $date = DateTime::createFromFormat('d/m/Y', "$day/$month/$year");
                // Lấy thứ trong tuần
                $weekday = $date->format('l');

                // Chuyển đổi thứ từ tiếng Anh sang tiếng Việt
                $daysInVietnamese = [
                    'Monday'    => 'Thứ Hai',
                    'Tuesday'   => 'Thứ Ba',
                    'Wednesday' => 'Thứ Tư',
                    'Thursday'  => 'Thứ Năm',
                    'Friday'    => 'Thứ Sáu',
                    'Saturday'  => 'Thứ Bảy',
                    'Sunday'    => 'Chủ Nhật'
                ];

                $result = "Ngày $day tháng $month năm $year là ngày " . $daysInVietnamese[$weekday];
            } else {
                $result = "Ngày tháng năm không hợp lệ!";
            }

            echo '<div class="result">' . $result . '</div>';
        }
        ?>
    </div>
</body>
</html>
