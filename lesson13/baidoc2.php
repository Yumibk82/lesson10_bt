<?php
class CustomException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on line' . $this->getLine() . 'in' . $this->getFile() . ':<br>' . $this->getMessage() . '<br> is not a valid Email address';
        return $errorMsg;
    }
}
$email="someone@exsample...com";
try {
    if (filer_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        throw new CustomException($email);
    }
}
catch (CustomException $e){
    echo $e->errorMessage();
}