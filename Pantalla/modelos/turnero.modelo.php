<?php
require_once "conexion.php";

class ModeloTurnero {

    static public function mdlMostrarTurnero() {
        $stmt = Conexion::conectar()->prepare(
            "SELECT idrx, nombrerx, identidadrx, departamentorx, identificadorrx, fecharx as fecha_creacion FROM rayosx WHERE creacion = 1 AND estado NOT IN (1, 2)
            UNION ALL
            SELECT idul, nombreul, identidadul, departamentoul, identificadorul, fechaul as fecha_creacion FROM ultrasonido WHERE creacion = 1 AND estado NOT IN (1, 2)
            UNION ALL
            SELECT idfl, nombrefl, identidadfl, departamentofl, identificadorfl, fechafl as fecha_creacion FROM fluroscopia WHERE creacion = 1 AND estado NOT IN (1, 2)
            UNION ALL
            SELECT idmm, nombremm, identidadmm, departamentomm, identificadormm, fechamm as fecha_creacion FROM mamografia WHERE creacion = 1 AND estado NOT IN (1, 2)
            UNION ALL
            SELECT idrm, nombrerm, identidadrm, departamentorm, identificadorrm, fecharm as fecha_creacion FROM resonancia_magnetica WHERE creacion = 1 AND estado NOT IN (1, 2)
            UNION ALL
            SELECT idtc, nombretc, identidadtc, departamentotc, identificadortc, fechatc as fecha_creacion FROM tomografia_computarizada WHERE creacion = 1 AND estado NOT IN (1, 2)"
        );

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }
}
?>
