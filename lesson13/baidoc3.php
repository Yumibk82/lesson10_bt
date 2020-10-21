<?php
class CustomException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on line' . $this->getLine() . 'in' . $this->getFile() . ':<br>' . $this->getMessage() . '<br> is not a valid email address';
        return $errorMsg;
    }
}
$email="someone@example.com";
try{
    if(filter_var($email,FILTER_VARIDATE_EMAIL)===FALSE){
        throw new CustomException($email);
    }
}
catch (CustomException $e){
    echo $e->errorMessage();
}
catch (Exception $e){
    echo $e->getMessage();
}
