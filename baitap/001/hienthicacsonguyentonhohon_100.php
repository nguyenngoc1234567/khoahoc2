<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $abc = $_REQUEST['number'];
    $count = 0;
    for ($i = 2; $i <= $abc; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo $i;
            echo '<br>';
        }
        $count = 0;
    }
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
    <form action="" method="post">
      <label for ="">nha so </label>
      <input type="text"name="number"id="">
       
        <input type="submit" value="Login">
    </form>
</body>
</html>
