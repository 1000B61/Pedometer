<?php
class Pedometer{
    private $datum;
    private $steps;
    
    public function __construct($datum1){
        $this->datum=$datum1;
        $this->steps=0;
    }
    public function incrementSteps(){
        $this->steps++;
    }
    public function toString(){
        echo ("Am " .$this->datum ." bin ich " .$this->steps ." Schritte gegangen.");
    }
}