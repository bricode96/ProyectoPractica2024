<?php
require_once "conexion.php";

class ModeloTomografiaCompu {
    
    
    static public function mdlMostrarTabla() {
        $stmt = Conexion::conectar()->prepare("SELECT idtc, identidadtc, nombretc, examentc, fechatc, departamentotc, estado, 'X' as acciones FROM tomografia_computarizada WHERE creacion = 1");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt = null; // Liberar recursos
        return $result;
    }

    static public function mdlRegistrarTabla($nombre, $identidad, $fecha, $estado, $departamento, $examen, $creacion) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO tomografia_computarizada(nombretc, identidadtc, fechatc, estado, departamentotc, examentc, creacion) VALUES (:nombretc, :identidadtc, :fechatc, :estado, :departamentotc, :examentc, :creacion)");

        $stmt->bindParam(":nombretc", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadtc", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":fechatc", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        $stmt->bindParam(":departamentotc", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":examentc", $examen, PDO::PARAM_STR);
        $stmt->bindParam(":creacion", $creacion, PDO::PARAM_STR);

        // Comentario de depuración, debe eliminarse o comentarse en producción
        echo "Nombre: $nombre, Identidad: $identidad, Fecha: $fecha, Examen: $examen, Estado: $estado, Departamento: $departamento, Creacion: $creacion";

        if($stmt->execute()) {
            return "Guardado exitosamente";
        } else {
            return "Error, no se almaceno";
        }

        $stmt = null; // Liberar recursos
    }

    // Actualizar datos del paciente
    static public function mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET nombretc = :nombretc, identidadtc = :identidadtc, examentc = :examentc WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nombretc", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadtc", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":examentc", $examen, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Actualizado exitosamente";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    // Cambiar el valor de creacion
    static public function mdlCreacionCambio($id, $creacion) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET creacion = :creacion WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);
        $stmt->bindParam(":creacion", $creacion, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Valor de creacion actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    // Cambiar el estado
    static public function mdlEstadoCambio($id, $estado) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET estado = :estado WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

     // Función para calcular y actualizar la diferencia de tiempo de creación a estado 1
     static public function mdlActualizarDiferenciaEstado1($id) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET diferencia_creacion_estado1 = TIMESTAMPDIFF(SECOND, fechatc, fechaespera) WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde la creación hasta estado 1 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde la creación hasta estado 1";
        }

        $stmt = null; // Liberar recursos
    }

    // Función para calcular y actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function mdlActualizarDiferenciaEstado2($id) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET diferencia_estado1_estado2 = TIMESTAMPDIFF(SECOND, fechaespera, fechafinal) WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde estado 1 hasta estado 2 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde estado 1 hasta estado 2";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaEspera($id, $fechaespera) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET fechaespera = :fechaespera WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaespera", $fechaespera, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaFinal($id, $fechafinal) {
        $stmt = Conexion::conectar()->prepare("UPDATE tomografia_computarizada SET fechafinal = :fechafinal WHERE idtc = :idtc");

        $stmt->bindParam(":idtc", $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechafinal", $fechafinal, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

}
?>
