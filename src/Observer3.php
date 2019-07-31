<?php 

class Observer3 implements InterfaceObserver {

    public function notify($id)
    {
        echo "Pedido " . $id . " não agendado!<br>";
    }

}