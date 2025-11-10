<?php
require_once "conexion.php";

class ModeloFluroscopia{
    
    // Mostrar la tabla de ultrasonidos
    static public function mdlMostrarTabla() {
        $stmt = Conexion::conectar()->prepare("SELECT idfl, identidadfl, nombrefl, examenfl, fechafl, departamentofl, estado, 'X' as acciones FROM fluroscopia WHERE creacion = 1");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt = null; // Liberar recursos
        return $result;
    }

    // Registrar un nuevo fluroscopia
    static public function mdlRegistrarTabla($nombre, $identidad, $fecha, $estado, $departamento, $examen, $creacion, $identificador) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO fluroscopia(nombrefl, identidadfl, fechafl, estado, departamentofl, examenfl, creacion, identificadorfl) VALUES (:nombrefl, :identidadfl, :fechafl, :estado, :departamentofl, :examenfl, :creacion, :identificadorfl)");

        $stmt->bindParam(":nombrefl", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadfl", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":fechafl", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        $stmt->bindParam(":departamentofl", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":examenfl", $examen, PDO::PARAM_STR);
        $stmt->bindParam(":creacion", $creacion, PDO::PARAM_STR);
        $stmt->bindParam(":identificadorfl", $identificador, PDO::PARAM_STR);


        // Comentario de depuración, debe eliminarse o comentarse en producción
        echo "Nombre: $nombre, Identidad: $identidad, Fecha: $fecha, examenfl: $examen, Estado: $estado, Departamento: $departamento, Creacion: $creacion";

        if($stmt->execute()) {
            return "Guardado exitosamente";
        } else {
            return "Error, no se almaceno";
        }

        $stmt = null; // Liberar recursos
    }

    // Actualizar datos del paciente
    static public function mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen) {
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET nombrefl = :nombrefl, identidadfl = :identidadfl, examenfl = :examenfl WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nombrefl", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadfl", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":examenfl", $examen, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Actualizado exitosamente";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    // Cambiar el valor de creacion
    static public function mdlCreacionCambio($id, $creacion) {
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET creacion = :creacion WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET estado = :estado WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET diferencia_creacion_estado1 = TIMESTAMPDIFF(SECOND, fechafl, fechaespera) WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde la creación hasta estado 1 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde la creación hasta estado 1";
        }

        $stmt = null; // Liberar recursos
    }

    // Función para calcular y actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function mdlActualizarDiferenciaEstado2($id) {
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET diferencia_estado1_estado2 = TIMESTAMPDIFF(SECOND, fechaespera, fechafinal) WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde estado 1 hasta estado 2 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde estado 1 hasta estado 2";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaEspera($id, $fechaespera) {
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET fechaespera = :fechaespera WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaespera", $fechaespera, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaFinal($id, $fechafinal) {
        $stmt = Conexion::conectar()->prepare("UPDATE fluroscopia SET fechafinal = :fechafinal WHERE idfl = :idfl");

        $stmt->bindParam(":idfl", $id, PDO::PARAM_INT);
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
