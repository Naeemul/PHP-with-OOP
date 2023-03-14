<?php
namespace App\classes;

class Series
{
    public $num1, $num2, $result=[];
    public function __construct($postArray)
    {
        $this->num1 = $postArray['num1'];
        $this->num2 = $postArray['num2'];
    }
    public function series()
    {
        if($this->num1 && $this->num2 ){
            for($i=$this->num1; $i<=$this->num2; $i++){
                array_push($this->result,$i);
            }
            return $this->result;
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



