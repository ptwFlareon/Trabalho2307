<?php 

class Observer1 implements InterfaceObserver {

    private $id = 1;

    public function notify($id)
    {
        if($this->id == $id) {
            echo "Pedido " . $this->id . " está pronto para retirada!<br>";
        }
    }

}