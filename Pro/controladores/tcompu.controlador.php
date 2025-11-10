<?php
class ControladorTomografiaCompu {
    static public function ctrVerTabla() {
        $respuesta = ModeloTomografiaCompu::mdlMostrarTabla();
        return $respuesta;
    }

    static public function ctrRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion, $identificador) {
        $respuesta = ModeloTomografiaCompu::mdlRegistrarTabla($nombre, $identidad, $examen, $fecha, $estado, $departamento, $creacion, $identificador);
        return $respuesta;
    }

    static public function ctrCreacionCambio($id, $creacion) {
        $respuesta = ModeloTomografiaCompu::mdlCreacionCambio($id, $creacion);
        return $respuesta;
    }

    static public function ctrCambioEstado($id, $estado) {
        $respuesta = ModeloTomografiaCompu::mdlEstadoCambio($id, $estado);
        return $respuesta;
    }

      // Función para actualizar la diferencia de tiempo de creación a estado 1
    static public function ctrActualizarDiferenciaEstado1($id) {
        $respuesta = ModeloTomografiaCompu::mdlActualizarDiferenciaEstado1($id);
        return $respuesta;
    }

    // Función para actualizar la diferencia de tiempo de estado 1 a estado 2
    static public function ctrActualizarDiferenciaEstado2($id) {
        $respuesta = ModeloTomografiaCompu::mdlActualizarDiferenciaEstado2($id);
        return $respuesta;
    }

    static public function ctrActualizarPacienteDatos($id, $nombre, $identidad, $examen) {
        $respuesta = ModeloTomografiaCompu::mdlPacienteDatosActualizados($id, $nombre, $identidad, $examen);
        return $respuesta;
    }

    static public function ctrGuardarFechaEspera($id, $fechaespera) {
        $respuesta = ModeloTomografiaCompu::mdlGuardarFechaEspera($id, $fechaespera);
        return $respuesta;
    }

    static public function ctrGuardarFechaFinal($id, $fechafinal) {
        $respuesta = ModeloTomografiaCompu::mdlGuardarFechaFinal($id, $fechafinal); // Corregido: llamando a mdlGuardarFechaFinal
        return $respuesta;
    }
}
?>
