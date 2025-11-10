<?php

require_once "conexion.php";

class ModeloTurnero {

    static public function mdlMostrarTurnero() {
        $stmt = Conexion::conectar()->prepare(
            "SELECT idrx, nombrerx, identidadrx, departamentorx, fecharx as fecha_creacion FROM rayosx WHERE creacion = 1
            UNION ALL
            SELECT idul, nombreul, identidadul, departamentoul, fechaul as fecha_creacion FROM ultrasonido WHERE creacion = 1
            UNION ALL
            SELECT idfl, nombrefl, identidadfl, departamentofl, fechafl as fecha_creacion FROM fluroscopia WHERE creacion = 1
            UNION ALL
            SELECT idmm, nombremm, identidadmm, departamentomm, fechamm as fecha_creacion FROM mamografia WHERE creacion = 1
            UNION ALL
            SELECT idrm, nombrerm, identidadrm, departamentorm, fecharm as fecha_creacion FROM resonancia_magnetica WHERE creacion = 1
            UNION ALL
            SELECT idtc, nombretc, identidadtc, departamentotc, fechatc as fecha_creacion FROM tomografia_computarizada WHERE creacion = 1"
        );
 
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }
}
?>
