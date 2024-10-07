<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container{
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #2da45b;
            text-align: left;
        }
        label{
            display: block;
            margin-bottom: 7px;
        }
        .form-container input {
            width: 100px;
            text-align: center;
            margin-bottom: 7px;
            
        }
        .form-container input [type = "num"] {
            padding-left: 100px;
        }
        

        
        

    </style>
</head>
<body>
<div class="form-container">
        <h2>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2>
        <form method="post" action="">
            Phương trình: 
            <input type="text" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : '2'; ?>"> x + 
            <input type="text" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : '1'; ?>"> = 0
        
            Nghiệm :    
            <input type="num" name="c" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lấy giá trị từ form
                $a = floatval($_POST['a']);
                $b = floatval($_POST['b']);
                
                // Giải phương trình ax + b = 0
                if ($a != 0) {
                    $c = -$b / $a;
                    echo "x = " . $c;
                } else {
                    if ($b == 0) {
                        echo "Phương trình có vô số nghiệm.";
                    } else {
                        echo "Phương trình vô nghiệm.";
                    }
                }
            } ?>" >  
            <button type="submit">Giải phương trình</button>
        </form>
        
        </div>
    </div>
</body>
</html>