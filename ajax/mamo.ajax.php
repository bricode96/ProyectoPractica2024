<?php
require_once "../controladores/mamo.controlador.php";
require_once "../modelos/mamo.modelo.php";

class ajaxMamografia {
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
        $respuesta = ControladorMamografia::ctrVerTabla();
        echo json_encode($respuesta);
    }

    public function RegistrarTabla() {
        $respuesta = ControladorMamografia::ctrRegistrarTabla(
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
        $respuesta = ControladorMamografia::ctrCreacionCambio($this->id, $this->creacion);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function EstadoCambioPX() {
        $respuesta = ControladorMamografia::ctrCambioEstado($this->id, $this->estado);
        if ($this->estado == 1) {
            // Calcular y actualizar la diferencia de tiempo desde la creación hasta estado 1
            ControladorMamografia::ctrActualizarDiferenciaEstado1($this->id);
        } elseif ($this->estado == 2) {
            // Calcular y actualizar la diferencia de tiempo desde estado 1 hasta estado 2
            ControladorMamografia::ctrActualizarDiferenciaEstado2($this->id);
        }
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function ActualizarDatosPaciente() {
        $respuesta = ControladorMamografia::ctrActualizarPacienteDatos(
            $this->id,
            $this->nombre,
            $this->identidad,
            $this->examen
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Espera() {
        $respuesta = ControladorMamografia::ctrGuardarFechaEspera($this->id, $this->fechaespera);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Final() {
        $respuesta = ControladorMamografia::ctrGuardarFechaFinal($this->id, $this->fechafinal);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
}

// Manejo de las acciones AJAX
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxMamografia();
    $respuesta->VerTabla();
} else {
    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxMamografia();
        $insertar->nombre = $_POST["nombremm"];
        $insertar->identidad = $_POST["identidadmm"];
        $insertar->fecha = $_POST["fechamm"];
        $insertar->estado = $_POST["estado"];
        $insertar->departamento = $_POST["departamentomm"];
        $insertar->examen = $_POST["examenmm"];
        $insertar->creacion = $_POST["creacion"];
        $insertar->RegistrarTabla();
    }

    if ($_POST["accion"] == "actualizar") {
        $actualizar = new ajaxMamografia();
        $actualizar->id = $_POST["idmm"];
        $actualizar->nombre = $_POST["nombremm"];
        $actualizar->identidad = $_POST["identidadmm"];
        $actualizar->examen = $_POST["examenmm"];
        $actualizar->ActualizarDatosPaciente();
    }

    if ($_POST["accion"] == "cambiocreacion") {
        $cambiocreacion = new ajaxMamografia();
        $cambiocreacion->id = $_POST["idmm"];
        $cambiocreacion->creacion = $_POST["creacion"];
        $cambiocreacion->CreacionCambioPx();
    }

    if ($_POST["accion"] == "cambioestado") {
        $cambioestado = new ajaxMamografia();
        $cambioestado->id = $_POST["idmm"];
        $cambioestado->estado = $_POST["estado"];
        $cambioestado->EstadoCambioPX();
    }

    if ($_POST["accion"] == "guardarFechaEspera") {
        $EsperaFecha = new ajaxMamografia();
        $EsperaFecha->id = $_POST["idmm"];
        $EsperaFecha->fechaespera = $_POST["fechaEspera"];
        $EsperaFecha->Fecha_Espera();
    }

    if ($_POST["accion"] == "guardarFechaFinal") {
        $FechaFinal = new ajaxMamografia();
        $FechaFinal->id = $_POST["idmm"];
        $FechaFinal->fechafinal = $_POST["fechaFinal"];
        $FechaFinal->Fecha_Final();
    }
}
?>
