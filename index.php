<?php 

class Cookie{
    private $type;

    public function setType($type){
        $types = array("Шоколадноу", "Ванильное", "Банановое");

        if(in_array($type, $types)){
            $this->type = $type;
        } else{
            $this->type = "У нас печенье больше нет!";
        }
    }
    public function setTyp(){
        return "Вкус печенье - " . $this->type;
    }
}

$typee = new Cookie();
$typee->setType("Шоколадное");
echo $typee->setTyp(); 