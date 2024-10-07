<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Nguyên Tố</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .form-container {
            margin: 20px auto;
            background-color: #ffecb3;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result-box {
            margin-top: 20px;
            background-color: #e3f2fd;
            padding: 10px;
            border-radius: 5px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>TÌM SỐ NGUYÊN TỐ</h1>
    <div class="form-container">
        <label for="number">Nhập N:</label>
        <input type="number" id="number" min="2" value="23"><br><br>

        <button onclick="findPrimes()">Tìm số nguyên tố</button>

        <p id="error" class="error"></p>
    </div>

    <div class="result-box" id="result"></div>

    <script>
        // Hàm kiểm tra một số có phải là số nguyên tố hay không
        function isPrime(num) {
            if (num < 2) return false;
            for (let i = 2; i <= Math.sqrt(num); i++) {
                if (num % i === 0) return false;
            }
            return true;
        }

        // Hàm tìm các số nguyên tố từ 2 đến N
        function findPrimes() {
            let n = parseInt(document.getElementById('number').value);
            let resultDiv = document.getElementById('result');
            let errorDiv = document.getElementById('error');

            // Kiểm tra nếu số nhập vào hợp lệ
            if (isNaN(n) || n < 2) {
                errorDiv.innerHTML = "Vui lòng nhập số nguyên lớn hơn hoặc bằng 2.";
                resultDiv.innerHTML = '';  // Xóa kết quả cũ
                return;
            } else {
                errorDiv.innerHTML = '';  // Xóa thông báo lỗi
            }

            let primes = [];
            for (let i = 2; i <= n; i++) {
                if (isPrime(i)) {
                    primes.push(i);
                }
            }

            // Hiển thị kết quả
            resultDiv.innerHTML = primes.length > 0 ? primes.join(' ') + " là các số nguyên tố <= " + n : "Không có số nguyên tố nào.";
        }
    </script>
</body>
</html>
