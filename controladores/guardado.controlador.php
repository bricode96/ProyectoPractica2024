<?php
class ControladorRayosX {
    static public function ctrVerTabla() {
        $respuesta = ModeloRayosX::mdlMostrarTabla();
        return $respuesta;
    }

    static public function ctrRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion) {
        $respuesta = ModeloRayosX::mdlRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion);
        return $respuesta;
    }

    static public function ctrCreacionCambio($id, $creacion) {
        $respuesta = ModeloRayosX::mdlCreacionCambio($id, $creacion);
        return $respuesta;
    }

    static public function ctrCambioEstado($id, $estado) {
        $respuesta = ModeloRayosX::mdlEstadoCambio($id, $estado);
        return $respuesta;
    }

      // Función para actualizar la diferencia de tiempo de creación a estado 1
      static public function ctrActualizarDiferenciaEstado1($id) {
        $respuesta = ModeloRayosX::mdlActualizarDiferenciaEstado1($id);
        return $respuesta;
    }

    // Función para actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function ctrActualizarDiferenciaEstado2($id) {
        $respuesta = ModeloRayosX::mdlActualizarDiferenciaEstado2($id);
        return $respuesta;
    }

    static public function ctrActualizarPacienteDatos($id, $nombre, $identidad, $examen) {
        $respuesta = ModeloRayosX::mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen);
        return $respuesta;
    }

    static public function ctrGuardarFechaEspera($id, $fechaespera) {
        $respuesta = ModeloRayosX::mdlGuardarFechaEspera($id, $fechaespera);
        return $respuesta;
    }

    static public function ctrGuardarFechaFinal($id, $fechafinal) {
        $respuesta = ModeloRayosX::mdlGuardarFechaFinal($id, $fechafinal); // Corregido: llamando a mdlGuardarFechaFinal
        return $respuesta;
    }
}
?>
