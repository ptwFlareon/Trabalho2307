<?php 

class Observer2 implements InterfaceObserver {

    private $id = 2;

    public function notify($id)
    {
        if($this->id == $id) {
            echo "O pedido " . $this->id . " está pronto!<br>";
        }
    }

}