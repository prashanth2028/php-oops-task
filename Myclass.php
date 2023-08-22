<?php
class Myclass{
    public $rate=80000;
    public $color = 'red';
    public $offer = "30%";

    public function laptop(){
        // $this->color=$this->color;
        // $this->rate=$this->rate;
        // $this->offer=$this->offer;
        // $a = new Myclass();
 
     echo 'the asus laptop color is  '.$this->color .'  and price is  '.$this->rate. '  and today offer is  '.$this->offer ;
    }
}
$obj= new Myclass();
$obj->laptop();