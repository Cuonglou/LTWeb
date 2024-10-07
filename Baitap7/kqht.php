<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Học Tập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2{
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: aqua;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 7px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 30%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[readonly] {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>KẾT QUẢ HỌC TẬP</h2>

    <form method="post">
        <label for="hk1">Điểm HK1:</label>
        <input type="text" id="hk1" name="hk1" value="<?php echo isset($_POST['hk1']) ? $_POST['hk1'] : ''; ?>">

        <label for="hk2">Điểm HK2:</label>
        <input type="text" id="hk2" name="hk2" value="<?php echo isset($_POST['hk2']) ? $_POST['hk2'] : ''; ?>">

        <label for="diemtb">Điểm TB:</label>
        <input type="text" id="diemtb" name="diemtb" readonly value="<?php 
            if (isset($_POST['hk1']) && isset($_POST['hk2'])) {
                $hk1 = floatval($_POST['hk1']);
                $hk2 = floatval($_POST['hk2']);
                $diemtb = ($hk1 + $hk2 * 2) / 3;
                echo round($diemtb, 2); // Làm tròn điểm TB
            }
        ?>">

        <label for="ketqua">Kết quả học lực:</label>
        <input type="text" id="ketqua" name="ketqua" readonly value="<?php 
            if (isset($diemtb)) {
                if ($diemtb >= 5) {
                    echo "Được lên lớp";
                } else {
                    echo "Ở lại lớp";
                }
            }
        ?>">

        <label for="xeploai">Xếp loại:</label>
        <input type="text" id="xeploai" name="xeploai" readonly value="<?php 
            if (isset($diemtb)) {
                if ($diemtb >= 8) {
                    echo "Giỏi";
                } elseif ($diemtb >= 6.5 && $diemtb < 8) {
                    echo "Khá";
                } elseif ($diemtb >= 5 && $diemtb < 6.5) {
                    echo "Trung bình";
                } else {
                    echo "Yếu";
                }
            }
        ?>">

        <input type="submit" value="Xem kết quả">
    </form>
</div>

</body>
</html>