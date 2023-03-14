<?php
namespace App\classes;


class Calculator
{
    public $num1, $num2, $operator, $result;
    public function __construct($postArray)
    {
        $this->num1 = $postArray['num1'];
        $this->num2 = $postArray['num2'];
        $this->operator = $postArray['operator'];
    }
    public function calculate()
    {
        if($this->num1 && $this->num2 ){
            if("addition" == $this->operator)
                return $this->result = $this->num1+$this->num2;
            elseif("subtraction" == $this->operator)
                return $this->result = $this->num1-$this->num2;
            elseif("multiplication" == $this->operator)
                return $this->result = $this->num1*$this->num2;
            elseif("division" == $this->operator)
                return $this->result = $this->num1/$this->num2;
        }
        elseif(!$this->num1 && !$this->num2){
            return "First Number and Second Number Required";
        }
        elseif(!$this->num1){
            return "First Number Required";
        }
        elseif(!$this->num2){
            return "Second Number Required";
        }
    }

}

