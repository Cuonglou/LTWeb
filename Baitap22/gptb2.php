<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Hai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
        }
        .container {
            background-color: #FFDD99;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 50px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            color: #A0522D;
            background-color: #bacd6d;
            padding: 20px;
            border-radius: 10px;
        }
        label {
            font-size: 22px;
            margin-right: 10px;
        }
        input {
            width: 40px;
            padding: 5px;
            font-size: 18px;
            text-align: center;
            margin-right: 5px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #A52A2A;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
        .solution-box {
            background-color: #d1e7dd;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        .equation-box {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>GIẢI PHƯƠNG TRÌNH BẬC HAI</h2>
    <form method="post">
        <div class="equation-box">
            <label for="a">Phương trình: </label>
            <input type="number" name="a" required value=""> x<sup>2</sup>
            +
            <input type="number" name="b" required value=""> x
            +
            <input type="number" name="c" required value=""> = 0
        </div>
        <br>
        <button type="submit" class="button">Giải phương trình</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        if ($a == 0) {
            echo '<div class="result">Đây không phải là phương trình bậc hai (a phải khác 0).</div>';
        } else {
            $delta = $b * $b - 4 * $a * $c;

            echo '<div class="result">';
            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo '<div class="solution-box">Hai nghiệm phân biệt: x1 = ' . round($x1, 2) . ', x2 = ' . round($x2, 2) . '</div>';
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                echo '<div class="solution-box">Nghiệm kép: x = ' . round($x, 2) . '</div>';
            } else {
                echo '<div class="solution-box">Phương trình vô nghiệm.</div>';
            }
            echo '</div>';
        }
    }
    ?>
</div>

</body>
</html>
