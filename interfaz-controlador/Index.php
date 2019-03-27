<?php

require 'ControllerInterface.php';

require 'NameController.php';

require 'AgeController.php';

require 'EmailController.php';


/*$controller= new NameController;
echo $controller->get();
echo $controller->post();

$controller2= new AgeController;
echo $controller2->get();
echo $controller2->post();

$controller3= new EmailController;
echo $controller3->get();
echo $controller3->post();*/


$controlarray= [];

$controlarray['email']['POST'] = new EmailController;
$controlarray['email']['GET'] = new EmailController;    
$controlarray['name']['POST'] = new NameController;
$controlarray['name']['GET'] = new NameController;
$controlarray['age']['POST'] = new AgeController;
$controlarray['age']['GET'] = new AgeController;

$method = $_SERVER['REQUEST_METHOD'];

var_dump($method);

$controller = $_GET['controller'];
$a = $controlarray[$controller][$method];
$a->get();
$a->post();



switch ($controller) {
    case 'name':
        if($method == 'GET'){
            $a = $controlarray[$controller][$method];
            echo $a->get();

        }else{
            $a = $controlarray[$controller][$method];
            $a->post();
            
        }
        break;
        
    case 'email':
        if($method == 'GET'){
        $a = $controlarray[$controller][$method];
        echo $a->get();

        }else{
        $a = $controlarray[$controller][$method];
        $a->post();
        
        }
        break;

    case 'age':
        if($method == 'GET'){
        $a = $controlarray[$controller][$method];
        echo $a->get();

        }else{
        $a = $controlarray[$controller][$method];
        $a->post();
        
    }
        break;
    default:
        # code...
        break;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

</body>
</html>

