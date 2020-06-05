<?php
    declare(strict_types = 1);
    include 'class-autoload.inc.php';

    $oper = $_POST['oper'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    //Instance of Calc class
    $calc = new Calc($oper, (int)$num1, (int)$num2);
    

    try{
        echo $calc->calculator();
    }catch(TypeError $e){
        echo "Error!: " . $e->getMessage();
    }

    //echo "<br>" . get_class($calc) . "<br>"; //Return the name of the class of an object
    //print_r(get_class_vars('Calc')) . "<br>"; //Get the default properties of the class
    //print_r(get_class_methods('Calc')) . "<br>";

   

?>