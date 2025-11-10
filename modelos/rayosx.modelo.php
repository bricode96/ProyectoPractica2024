<?php
require_once "conexion.php";

class ModeloRayosX {
    
    // Mostrar la tabla de ultrasonidos
    static public function mdlMostrarTabla() {
        $stmt = Conexion::conectar()->prepare("SELECT idrx, identidadrx, nombrerx, examenrx, fecharx, departamentorx, estado, 'X' as acciones FROM rayosx WHERE creacion = 1");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt = null; // Liberar recursos
        return $result;
    }

    // Registrar un nuevo rayosx
    static public function mdlRegistrarTabla($nombre, $identidad, $fecha, $estado, $departamento, $examen, $creacion) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO rayosx(nombrerx, identidadrx, fecharx, estado, departamentorx, examenrx, creacion) VALUES (:nombrerx, :identidadrx, :fecharx, :estado, :departamentorx, :examenrx, :creacion)");

        $stmt->bindParam(":nombrerx", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadrx", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":fecharx", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
        $stmt->bindParam(":departamentorx", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":examenrx", $examen, PDO::PARAM_STR);
        $stmt->bindParam(":creacion", $creacion, PDO::PARAM_STR);

        // Comentario de depuración, debe eliminarse o comentarse en producción
        echo "Nombre: $nombre, Identidad: $identidad, Fecha: $fecha, examenrx: $examen, Estado: $estado, Departamento: $departamento, Creacion: $creacion";

        if($stmt->execute()) {
            return "Guardado exitosamente";
        } else {
            return "Error, no se almaceno";
        }

        $stmt = null; // Liberar recursos
    }

    // Actualizar datos del paciente
    static public function mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen) {
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET nombrerx = :nombrerx, identidadrx = :identidadrx, examenrx = :examenrx WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nombrerx", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":identidadrx", $identidad, PDO::PARAM_STR);
        $stmt->bindParam(":examenrx", $examen, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Actualizado exitosamente";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    // Cambiar el valor de creacion
    static public function mdlCreacionCambio($id, $creacion) {
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET creacion = :creacion WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET estado = :estado WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);
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
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET diferencia_creacion_estado1 = TIMESTAMPDIFF(SECOND, fecharx, fechaespera) WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde la creación hasta estado 1 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde la creación hasta estado 1";
        }

        $stmt = null; // Liberar recursos
    }

    // Función para calcular y actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function mdlActualizarDiferenciaEstado2($id) {
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET diferencia_estado1_estado2 = TIMESTAMPDIFF(SECOND, fechaespera, fechafinal) WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "Diferencia de tiempo desde estado 1 hasta estado 2 actualizada correctamente";
        } else {
            return "Error al actualizar la diferencia de tiempo desde estado 1 hasta estado 2";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaEspera($id, $fechaespera) {
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET fechaespera = :fechaespera WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaespera", $fechaespera, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "Estado Actualizado";
        } else {
            return "Error";
        }

        $stmt = null; // Liberar recursos
    }

    static public function mdlGuardarFechaFinal($id, $fechafinal) {
        $stmt = Conexion::conectar()->prepare("UPDATE rayosx SET fechafinal = :fechafinal WHERE idrx = :idrx");

        $stmt->bindParam(":idrx", $id, PDO::PARAM_INT);
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
