<?php

class EmailController implements ControllerInterface
{
    public $email;

    public function get()
    {
        if (isset( $_GET['email'] )){
            $this->email=$_GET['email'];
            return $this->email;
            
            
        }

    }
    public function post()
    {
        if (isset( $_POST['email'] )){
            $this->email=$_POST['email'];
            return $this->email;
            
            
        }
    }

}


?>