<?php

require_once "../controladores/turnero.controlador.php";
require_once "../modelos/turnero.modelo.php";

class ajaxTurnero{

    
    public function VerDataTurnero(){
            

        $respuesta = ControladorTurnero::ctrVerTurnero();

        echo json_encode($respuesta);

    } 


}

$respuesta = new ajaxTurnero();
$respuesta ->VerDataTurnero();
