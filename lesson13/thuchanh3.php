<?php
class CustomException extends Exception {
    public function errorMessage() {
        $errorMsg = 'Error on line '.$this->getLine().'<br>'.' in '.$this->getFile()
            .'<br>'.': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

 $email = "someone@example...com";

 try {
     if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
         /* throw exception if email is not valid */
         throw new CustomException($email);
     }
 }
 catch (CustomException $e) {
     echo $e->errorMessage();
 }
?>