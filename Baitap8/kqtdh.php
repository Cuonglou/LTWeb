<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <style>
       body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    form {
      width: 400px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #5d3d80;
      text-align: left;
            
    } 
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"] {
      width: 100%;
      padding: 4px;
      margin-bottom: 10px;
      margin-right: 10px;
    }
    input[type="button"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="button"]:hover {
      background-color: #45a049;
    }
    </style>
</head>
<body>
    <form method="post">
    <h2>Kết quả thi đại học</h2>
        <label for="diemToan">Điểm Toán:</label>
        <input type="text" id="diemToan" name="diemToan" step="0.01" required>
        
        <label for="diemLy">Điểm Lý:</label>
        <input type="text" id="diemLy" name="diemLy" step="0.01" required>
        
        <label for="diemHoa">Điểm Hóa:</label>
        <input type="text" id="diemHoa" name="diemHoa" step="0.01" required>
        
        <label for="diemchuan">Điểm chuẩn: </label>
        <input type="text" name="diemChuan" value="20" readonly>
    </br>
        <button type="submit" name="submit">Xem kết quả</button>


        <?php
    if (isset($_POST['submit'])) {
        $diemToan = $_POST['diemToan'];
        $diemLy = $_POST['diemLy'];
        $diemHoa = $_POST['diemHoa'];
        $diemChuan = $_POST['diemChuan'];

        $tongDiem = $diemToan + $diemLy + $diemHoa;
        $ketQuaThi = ($diemToan > 0 && $diemLy > 0 && $diemHoa > 0 && $tongDiem >= $diemChuan) ? 'Đậu' : 'Rớt';

        echo "<p>Tổng điểm: $tongDiem</p>";
        echo "<p>Kết quả thi: $ketQuaThi</p>";
    }
    ?>
    </form>

    
</body>
</html>