<?php

class NameController implements ControllerInterface

{
    public $name;
    

    public function get()
    {
        
        if (isset( $_GET['name'] )){
            $this->name=$_GET['name'];
            return $this->name;
            
        }
        
    }
    public function post()
    {
          if (isset( $_POST['name'] )){
            $this->name=$_POST['name'];
            return $this->name;
            
        }
    }


}

?>