<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương Tùy Chọn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2{
            background-color: #5158a4;
            padding: 15px;
            border-radius: 7px;
            color: #f9f9f9;
        }
        .form-container {
            margin: 20px auto;
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 5px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result-box {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: #e3f2fd;
        }
        .error {
            color: red;
        }
        table {
            margin-top: 10px;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            vertical-align: top;
            min-width: 120px;
        }
        .table-wrapper {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    
    <div class="form-container">
    <h2>IN BẢNG CỬU CHƯƠNG</h2>
        <label for="start">Bắt đầu từ (1 - 10):</label>
        <input type="number" id="start" min="1" max="10" value="7"><br><br>

        <label for="end">Kết thúc tại (1 - 10):</label>
        <input type="number" id="end" min="1" max="10" value="10"><br><br>

        <button onclick="printMultiplicationTable()">In bảng cửu chương</button>

        <p id="error" class="error"></p>
    </div>

    <div class="result-box" id="result"></div>

    <script>
        function printMultiplicationTable() {
            let start = parseInt(document.getElementById('start').value);
            let end = parseInt(document.getElementById('end').value);
            let resultDiv = document.getElementById('result');
            let errorDiv = document.getElementById('error');

            // Kiểm tra nếu số nhập vào không hợp lệ
            if (start < 1 || end > 10 || start > end) {
                errorDiv.innerHTML = "Vui lòng nhập số bắt đầu từ 1 đến 10, và số kết thúc phải lớn hơn hoặc bằng số bắt đầu.";
                resultDiv.innerHTML = '';  // Xóa kết quả cũ
                return;
            } else {
                errorDiv.innerHTML = '';  // Xóa thông báo lỗi nếu nhập đúng
            }

            let resultHTML = '';

            // Vòng lặp lồng nhau để in bảng cửu chương từ 'start' đến 'end'
            for (let i = start; i <= end; i++) {
                resultHTML += '<div class="table-wrapper"><strong>Bảng cửu chương ' + i + ':</strong><br>';
                for (let j = 1; j <= 10; j++) {
                    resultHTML += `${i} x ${j} = ${i * j}<br>`;
                }
                resultHTML += '</div>';
            }

            resultDiv.innerHTML = resultHTML;  // Hiển thị kết quả
        }
    </script>
</body>
</html>
