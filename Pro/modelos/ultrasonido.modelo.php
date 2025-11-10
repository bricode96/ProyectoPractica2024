<?php
require_once "conexion.php";

class ModeloUltrasonido {
    
    // Mostrar la tabla de ultrasonidos
    static public function mdlMostrarTabla() {
        $stmt = Conexion::conectar()->prepare("SELECT idul, identidadul, nombreul, examenul, fechaul, departamentoul, estado, 'X' as acciones FROM ultrasonido WHERE creacion = 1");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt = null; // Liberar recursos
        return $result;
    }

    // Registrar un nuevo ultrasonido
    static public function mdlRegistrarTabla($nombre, $identidad, $fecha, $estado, $departamento, $examen, $creacion, $identificador) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO ultrasonido(nombreul, identidadul, fechaul, estado, departamentoul, examenul, creacion, identificadorul) VALUES (:nombreul, :identidadul, :fechaul, :estado, :departamentoul, :examenul, :creacion, :identificadorul)");

        $stmt->bindParam(":nombreul", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadul", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":fechaul", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        $stmt->bindParam(":departamentoul", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":examenul", $examen, PDO::PARAM_STR);
        $stmt->bindParam(":creacion", $creacion, PDO::PARAM_STR);
        $stmt->bindParam(":identificadorul", $identificador, PDO::PARAM_STR);

        // Comentario de depuración, debe eliminarse o comentarse en producción
        echo "Nombre: $nombre, Identidad: $identidad, Fecha: $fecha, examenul: $examen, Estado: $estado, Departamento: $departamento, Creacion: $creacion";

        if($stmt->execute()) {
            return "Guardado exitosamente";
        } else {
            return "Error, no se almaceno";
        }

        $stmt = null; // Liberar recursos
    }

    // Actualizar datos del paciente
    static public function mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen) {
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET nombreul = :nombreul, identidadul = :identidadul, examenul = :examenul WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nombreul", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadul", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":examenul", $examen, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Actualizado exitosamente";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    // Cambiar el valor de creacion
    static public function mdlCreacionCambio($id, $creacion) {
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET creacion = :creacion WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET estado = :estado WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET diferencia_creacion_estado1 = TIMESTAMPDIFF(SECOND, fechaul, fechaespera) WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde la creación hasta estado 1 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde la creación hasta estado 1";
        }

        $stmt = null; // Liberar recursos
    }

    // Función para calcular y actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function mdlActualizarDiferenciaEstado2($id) {
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET diferencia_estado1_estado2 = TIMESTAMPDIFF(SECOND, fechaespera, fechafinal) WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde estado 1 hasta estado 2 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde estado 1 hasta estado 2";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaEspera($id, $fechaespera) {
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET fechaespera = :fechaespera WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaespera", $fechaespera, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaFinal($id, $fechafinal) {
        $stmt = Conexion::conectar()->prepare("UPDATE ultrasonido SET fechafinal = :fechafinal WHERE idul = :idul");

        $stmt->bindParam(":idul", $id, PDO::PARAM_INT);
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
