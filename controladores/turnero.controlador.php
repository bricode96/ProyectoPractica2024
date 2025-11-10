<?php
    class ControladorTurnero{

        static public function ctrVerTurnero(){

            $respuesta = ModeloTurnero::mdlMostrarTurnero();

            return $respuesta;
        }


    }

?>