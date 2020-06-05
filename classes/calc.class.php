<?php

class Calc{
    //Properties
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $getOperator,int $getNumOne, int $getNumTwo){
        $this->operator = $getOperator;
        $this->num1 = $getNumOne;
        $this->num2 = $getNumTwo;
    }

    public function calculator(){
        switch( $this->operator ){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
            break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
            break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
            break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
            break;
            default;
                echo "Error!";
            break;
        }
    }
}