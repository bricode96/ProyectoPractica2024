<?php
require_once "../controladores/rm.controlador.php";
require_once "../modelos/rm.modelo.php";

class ajaxResonanciaMagnetica {
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
    public $identificador;

    public function VerTabla() {
        $respuesta = ControladorResonanciaMagnetica::ctrVerTabla();
        echo json_encode($respuesta);
    }

    public function RegistrarTabla() {
        $respuesta = ControladorResonanciaMagnetica::ctrRegistrarTabla(
            $this->nombre,
            $this->identidad,
            $this->fecha,
            $this->estado,
            $this->departamento,
            $this->examen,
            $this->creacion,
            $this->identificador,
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function CreacionCambioPx() {
        $respuesta = ControladorResonanciaMagnetica::ctrCreacionCambio($this->id, $this->creacion);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function EstadoCambioPX() {
        $respuesta = ControladorResonanciaMagnetica::ctrCambioEstado($this->id, $this->estado);
        if ($this->estado == 1) {
            // Calcular y actualizar la diferencia de tiempo desde la creación hasta estado 1
            ControladorResonanciaMagnetica::ctrActualizarDiferenciaEstado1($this->id);
        } elseif ($this->estado == 2) {
            // Calcular y actualizar la diferencia de tiempo desde estado 1 hasta estado 2
            ControladorResonanciaMagnetica::ctrActualizarDiferenciaEstado2($this->id);
        }
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function ActualizarDatosPaciente() {
        $respuesta = ControladorResonanciaMagnetica::ctrActualizarPacienteDatos(
            $this->id,
            $this->nombre,
            $this->identidad,
            $this->examen
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Espera() {
        $respuesta = ControladorResonanciaMagnetica::ctrGuardarFechaEspera($this->id, $this->fechaespera);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Final() {
        $respuesta = ControladorResonanciaMagnetica::ctrGuardarFechaFinal($this->id, $this->fechafinal);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
}

// Manejo de las acciones AJAX
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxResonanciaMagnetica();
    $respuesta->VerTabla();
} else {
    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxResonanciaMagnetica();
        $insertar->nombre = $_POST["nombrerm"];
        $insertar->identidad = $_POST["identidadrm"];
        $insertar->fecha = $_POST["fecharm"];
        $insertar->estado = $_POST["estado"];
        $insertar->departamento = $_POST["departamentorm"];
        $insertar->examen = $_POST["examenrm"];
        $insertar->creacion = $_POST["creacion"];
        $insertar->identificador = $_POST["identificadorrm"];
        $insertar->RegistrarTabla();
    }

    if ($_POST["accion"] == "actualizar") {
        $actualizar = new ajaxResonanciaMagnetica();
        $actualizar->id = $_POST["idrm"];
        $actualizar->nombre = $_POST["nombrerm"];
        $actualizar->identidad = $_POST["identidadrm"];
        $actualizar->examen = $_POST["examenrm"];
        $actualizar->ActualizarDatosPaciente();
    }

    if ($_POST["accion"] == "cambiocreacion") {
        $cambiocreacion = new ajaxResonanciaMagnetica();
        $cambiocreacion->id = $_POST["idrm"];
        $cambiocreacion->creacion = $_POST["creacion"];
        $cambiocreacion->CreacionCambioPx();
    }

    if ($_POST["accion"] == "cambioestado") {
        $cambioestado = new ajaxResonanciaMagnetica();
        $cambioestado->id = $_POST["idrm"];
        $cambioestado->estado = $_POST["estado"];
        $cambioestado->EstadoCambioPX();
    }

    if ($_POST["accion"] == "guardarFechaEspera") {
        $EsperaFecha = new ajaxResonanciaMagnetica();
        $EsperaFecha->id = $_POST["idrm"];
        $EsperaFecha->fechaespera = $_POST["fechaEspera"];
        $EsperaFecha->Fecha_Espera();
    }

    if ($_POST["accion"] == "guardarFechaFinal") {
        $FechaFinal = new ajaxResonanciaMagnetica();
        $FechaFinal->id = $_POST["idrm"];
        $FechaFinal->fechafinal = $_POST["fechaFinal"];
        $FechaFinal->Fecha_Final();
    }
}
?>
