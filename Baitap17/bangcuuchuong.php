<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .result-box {
            margin-top: 20px;
            background-color: #e0f7fa;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Bảng Cửu Chương</h1>
    <label for="number">Cửu chương (từ 1 đến 9):</label>
    <input type="number" id="number"  required placeholder ="Nhập bảng cửu chương">
    <button onclick="generateTable()">Thực hiện</button>

    <div class="result-box">
        <h3>Kết Quả</h3>
        <p id="result"></p>
        <p id="error" class="error"></p>
    </div>

    <script>
        function generateTable() {
            let num = document.getElementById('number').value;
            let result = '';
            let error = '';

            // Kiểm tra số nhập vào phải nằm trong khoảng từ 1 đến 9
            if (num < 1 || num > 9) {
                error = 'Vui lòng nhập số từ 1 đến 9.';
                document.getElementById('error').innerHTML = error;
                document.getElementById('result').innerHTML = ''; // Xóa kết quả cũ nếu có
                return;
            } else {
                document.getElementById('error').innerHTML = ''; // Xóa thông báo lỗi nếu nhập đúng
            }

            // Tính bảng cửu chương từ 1 đến 9
            for (let i = 1; i <= 9; i++) {
                result += `${num} x ${i} = ${num * i}<br>`;
            }

            document.getElementById('result').innerHTML = result;
        }
    </script>
</body>
</html>
