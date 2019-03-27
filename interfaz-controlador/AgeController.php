<?php

class AgeController implements ControllerInterface
{
    public $antiquity;

    public function get()
    {

        if (isset( $_GET['antiquity'] )){
            $this->antiquity=$_GET['antiquity'];
             $year=date('Y')-$this->antiquity;
             return $year;
        }

    }
    public function post()
    {
        if (isset( $_POST['antiquity'] )){
            $this->antiquity=$_POST['antiquity'];
             $year=date('Y')-$this->antiquity;
             return $year;
        }

    }

}





?>