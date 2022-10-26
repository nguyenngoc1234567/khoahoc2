<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhapten = $_REQUEST['nhapso'];
class FizzBuzz
{
    public $status;
public function __construct(int $number)
{
    $isFizz = $number % 3 == 0;
    $isBuzz = $number % 5 == 0;

    if ($isFizz && $isBuzz) {
        $this->status = "FizzBuzz";
    } elseif ($isFizz) {
        $this->status = "Fizz";
    } elseif ($isBuzz) {
        $this->status = "Buzz";
    } else {
        $this->status = $number . "";
    }
}
    
}

$fizzBuzz = new FizzBuzz($nhapten);

echo $fizzBuzz->status;
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
 <form action=""method='post'>
 <label for="">nhapso </label><br>
   <input type="text"  name="nhapso" ><br>
   <input type="submit" value="Submit">
 </form>
 </body>

