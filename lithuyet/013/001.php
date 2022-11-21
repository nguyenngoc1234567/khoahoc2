<?php
// class CustomException extends Exception
// {
//     public function errorMessage()
//     {
//         return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
//             . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
//     }
// }

// $email = "someone@example..com";

// try {
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         throw new CustomException($email);
//     }
// } catch (CustomException $e) {
//     echo $e->errorMessage();
// }


// function checkAge($age){
//    if ($age>= 18){
//       return true;

//    }else{
//       throw new Exception('bạn phai dủ 18 tuổi để thực hiện chức năng này');
//    }
// }
// try{
// checkAge(19);
// echo "bạn có thể sử sụng chức năng này";
// }catch(Exception $e ){
//    echo $e->getMessage();
// }
function chia2so($a,$b) {
   if ($b==0){
      throw new Exception("so chia bang 0");
   }
   echo $a/$b;
}
try{
   $a=4;
   $b=0;

}catch(Exception $e){

   echo $e->getMessage();
}finally{
   echo "thuc hien finally";

}
