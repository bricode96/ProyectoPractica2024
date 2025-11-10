<?php
class ControladorMamografia {
    static public function ctrVerTabla() {
        $respuesta = ModeloMamografia::mdlMostrarTabla();
        return $respuesta;
    }

    static public function ctrRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion) {
        $respuesta = ModeloMamografia::mdlRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion);
        return $respuesta;
    }

    static public function ctrCreacionCambio($id, $creacion) {
        $respuesta = ModeloMamografia::mdlCreacionCambio($id, $creacion);
        return $respuesta;
    }

    static public function ctrCambioEstado($id, $estado) {
        $respuesta = ModeloMamografia::mdlEstadoCambio($id, $estado);
        return $respuesta;
    }

      // Función para actualizar la diferencia de tiempo de creación a estado 1
      static public function ctrActualizarDiferenciaEstado1($id) {
        $respuesta = ModeloMamografia::mdlActualizarDiferenciaEstado1($id);
        return $respuesta;
    }

    // Función para actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function ctrActualizarDiferenciaEstado2($id) {
        $respuesta = ModeloMamografia::mdlActualizarDiferenciaEstado2($id);
        return $respuesta;
    }

    static public function ctrActualizarPacienteDatos($id, $nombre, $identidad, $examen) {
        $respuesta = ModeloMamografia::mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen);
        return $respuesta;
    }

    static public function ctrGuardarFechaEspera($id, $fechaespera) {
        $respuesta = ModeloMamografia::mdlGuardarFechaEspera($id, $fechaespera);
        return $respuesta;
    }

    static public function ctrGuardarFechaFinal($id, $fechafinal) {
        $respuesta = ModeloMamografia::mdlGuardarFechaFinal($id, $fechafinal); // Corregido: llamando a mdlGuardarFechaFinal
        return $respuesta;
    }
}
?>
