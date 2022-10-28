<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstOperand = $_REQUEST['firstOperand'];
    $secondOperand = $_REQUEST['secondOperand'];
    $pheptinh = $_REQUEST['pheptinh'];

    class Calculator
    {
        public function calculate($firstOperand, $secondOperand, $pheptinh)
        {
            switch ($pheptinh) {
                case '+':
                    $ketqua = $firstOperand + $secondOperand;
                    echo $ketqua;
                    break;
                case '-':
                    $ketqua = $firstOperand - $secondOperand;
                    echo $ketqua;
                    break;

                case '*':
                    $ketqua = $firstOperand * $secondOperand;
                    echo $ketqua;
                    break;

                case '/':
                    if ($secondOperand != 0) {
                        $ketqua = $firstOperand / $secondOperand;
                        echo $ketqua;
                        break;
                    } else {
                        echo "Can not divide by ";
                    }
            }
        }
    }
    $objCalculator = new Calculator();
    echo $objCalculator->calculate($firstOperand, $secondOperand, $pheptinh);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method='post'>
        <label for=""> nhập firstOperand </label><br>
        <input type="text" name="firstOperand"><br>
        <label for="">Nhập secondOperand:</label><br>
        <input type="text" name="secondOperand"><br>


        <select name="pheptinh">
            <option value="+">cộng</option>
            <option value="-">trừ</option>
            <option value="*">nhân</option>
            <option value="/" selected>chia</option>
        </select>


        <input type="submit" value="Submit">
    </form>
</body>