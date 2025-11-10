<?php
require_once "../controladores/tcompu.controlador.php";
require_once "../modelos/tcompu.modelo.php";

class ajaxTomografiaCompu {
    public $id;
    public $nombre;
    public $identidad;
    public $fecha;
    public $estado;
    public $departamento;
    public $examen;
    public $creacion;
    public $fechaespera;
    public $fechafinal;

    public function VerTabla() {
        $respuesta = ControladorTomografiaCompu::ctrVerTabla();
        echo json_encode($respuesta);
    }

    public function RegistrarTabla() {
        $respuesta = ControladorTomografiaCompu::ctrRegistrarTabla(
            $this->nombre,
            $this->identidad,
            $this->fecha,
            $this->estado,
            $this->departamento,
            $this->examen,
            $this->creacion
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function CreacionCambioPx() {
        $respuesta = ControladorTomografiaCompu::ctrCreacionCambio($this->id, $this->creacion);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function EstadoCambioPX() {
        $respuesta = ControladorTomografiaCompu::ctrCambioEstado($this->id, $this->estado);
        if ($this->estado == 1) {
            // Calcular y actualizar la diferencia de tiempo desde la creación hasta estado 1
            ControladorTomografiaCompu::ctrActualizarDiferenciaEstado1($this->id);
        } elseif ($this->estado == 2) {
            // Calcular y actualizar la diferencia de tiempo desde estado 1 hasta estado 2
            ControladorTomografiaCompu::ctrActualizarDiferenciaEstado2($this->id);
        }
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function ActualizarDatosPaciente() {
        $respuesta = ControladorTomografiaCompu::ctrActualizarPacienteDatos(
            $this->id,
            $this->nombre,
            $this->identidad,
            $this->examen
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Espera() {
        $respuesta = ControladorTomografiaCompu::ctrGuardarFechaEspera($this->id, $this->fechaespera);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Final() {
        $respuesta = ControladorTomografiaCompu::ctrGuardarFechaFinal($this->id, $this->fechafinal);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
}

// Manejo de las acciones AJAX
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxTomografiaCompu();
    $respuesta->VerTabla();
} else {
    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxTomografiaCompu();
        $insertar->nombre = $_POST["nombretc"];
        $insertar->identidad = $_POST["identidadtc"];
        $insertar->fecha = $_POST["fechatc"];
        $insertar->estado = $_POST["estado"];
        $insertar->departamento = $_POST["departamentotc"];
        $insertar->examen = $_POST["examentc"];
        $insertar->creacion = $_POST["creacion"];
        $insertar->RegistrarTabla();
    }

    if ($_POST["accion"] == "actualizar") {
        $actualizar = new ajaxTomografiaCompu();
        $actualizar->id = $_POST["idtc"];
        $actualizar->nombre = $_POST["nombretc"];
        $actualizar->identidad = $_POST["identidadtc"];
        $actualizar->examen = $_POST["examentc"];
        $actualizar->ActualizarDatosPaciente();
    }

    if ($_POST["accion"] == "cambiocreacion") {
        $cambiocreacion = new ajaxTomografiaCompu();
        $cambiocreacion->id = $_POST["idtc"];
        $cambiocreacion->creacion = $_POST["creacion"];
        $cambiocreacion->CreacionCambioPx();
    }

    if ($_POST["accion"] == "cambioestado") {
        $cambioestado = new ajaxTomografiaCompu();
        $cambioestado->id = $_POST["idtc"];
        $cambioestado->estado = $_POST["estado"];
        $cambioestado->EstadoCambioPX();
    }

    if ($_POST["accion"] == "guardarFechaEspera") {
        $EsperaFecha = new ajaxTomografiaCompu();
        $EsperaFecha->id = $_POST["idtc"];
        $EsperaFecha->fechaespera = $_POST["fechaEspera"];
        $EsperaFecha->Fecha_Espera();
    }

    if ($_POST["accion"] == "guardarFechaFinal") {
        $FechaFinal = new ajaxTomografiaCompu();
        $FechaFinal->id = $_POST["idtc"];
        $FechaFinal->fechafinal = $_POST["fechaFinal"];
        $FechaFinal->Fecha_Final();
    }
}
?>
