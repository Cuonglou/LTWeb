<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thanh Toán Tiền Điện</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thanh Toán Tiền Điện</h2>
    
    <form method="post">
        <label for="ten">Tên chủ hộ:</label>
        <input type="text" id="ten" name="ten" value="<?php echo isset($_POST['ten']) ? $_POST['ten'] : ''; ?>" required>

        <label for="chi_so_cu">Chỉ số cũ:</label>
        <input type="text" id="chi_so_cu" name="chi_so_cu" value="<?php echo isset($_POST['chi_so_cu']) ? $_POST['chi_so_cu'] : ''; ?>" required>

        <label for="chi_so_moi">Chỉ số mới:</label>
        <input type="text" id="chi_so_moi" name="chi_so_moi" value="<?php echo isset($_POST['chi_so_moi']) ? $_POST['chi_so_moi'] : ''; ?>" required>

        <label for="don_gia">Đơn giá (VND):</label>
        <input type="text" id="don_gia" name="don_gia" value="<?php echo isset($_POST['don_gia']) ? $_POST['don_gia'] : ''; ?>" required>

        <label for="so_tien">Số tiền thanh toán:</label>
        <input type="text" id="so_tien" name="so_tien" readonly value="<?php 
            if (isset($_POST['chi_so_cu'], $_POST['chi_so_moi'], $_POST['don_gia'])) {
                $chi_so_cu = floatval($_POST['chi_so_cu']);
                $chi_so_moi = floatval($_POST['chi_so_moi']);
                $don_gia = floatval($_POST['don_gia']);
                if ($chi_so_moi > $chi_so_cu) {
                    $so_tien = ($chi_so_moi - $chi_so_cu) * $don_gia;
                    echo number_format($so_tien, 0, ',', '.'); // Định dạng số tiền
                } else {
                    echo "Chỉ số mới phải lớn hơn chỉ số cũ!";
                }
            }
        ?>">

        <input type="submit" value="Tính">
    </form>
</div>

</body>
</html>