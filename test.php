<?php
require_once 'vendor/autoload.php';

class Data{
    
    protected  $data ;
    public function __construct(){
        $data = Faker\Factory::create();
        $this->data = $data;
        return $this->data;
    }
    public function fakeData(){
        echo $this->data->name()."<br>";
        echo $this->data->phoneNumber()."<br>";
        echo $this->data->address()."<br>";
        echo $this->data->email();
       
    }

}
$fakeData = new Data();
for ($i=0;$i<4;$i++) {
    $fakeData->fakeData();
}   



