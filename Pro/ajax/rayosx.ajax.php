<?php
require_once "../controladores/rayosx.controlador.php";
require_once "../modelos/rayosx.modelo.php";

class ajaxRayosX {
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
        $respuesta = ControladorRayosX::ctrVerTabla();
        echo json_encode($respuesta);
    }

    public function RegistrarTabla() {
        $respuesta = ControladorRayosX::ctrRegistrarTabla(
            $this->nombre,
            $this->identidad,
            $this->fecha,
            $this->estado,
            $this->departamento,
            $this->examen,
            $this->creacion,
            $this->identificador
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function CreacionCambioPx() {
        $respuesta = ControladorRayosX::ctrCreacionCambio($this->id, $this->creacion);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function EstadoCambioPX() {
        $respuesta = ControladorRayosX::ctrCambioEstado($this->id, $this->estado);
        if ($this->estado == 1) {
            // Calcular y actualizar la diferencia de tiempo desde la creación hasta estado 1
            ControladorRayosX::ctrActualizarDiferenciaEstado1($this->id);
        } elseif ($this->estado == 2) {
            // Calcular y actualizar la diferencia de tiempo desde estado 1 hasta estado 2
            ControladorRayosX::ctrActualizarDiferenciaEstado2($this->id);
        }
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function ActualizarDatosPaciente() {
        $respuesta = ControladorRayosX::ctrActualizarPacienteDatos(
            $this->id,
            $this->nombre,
            $this->identidad,
            $this->examen
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Espera() {
        $respuesta = ControladorRayosX::ctrGuardarFechaEspera($this->id, $this->fechaespera);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Final() {
        $respuesta = ControladorRayosX::ctrGuardarFechaFinal($this->id, $this->fechafinal);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
}

// Manejo de las acciones AJAX
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxRayosX();
    $respuesta->VerTabla();
} else {
    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxRayosX();
        $insertar->nombre = $_POST["nombrerx"];
        $insertar->identidad = $_POST["identidadrx"];
        $insertar->fecha = $_POST["fecharx"];
        $insertar->estado = $_POST["estado"];
        $insertar->departamento = $_POST["departamentorx"];
        $insertar->examen = $_POST["examenrx"];
        $insertar->creacion = $_POST["creacion"];
        $insertar->identificador = $_POST["identificadorrx"];
        $insertar->RegistrarTabla();
    }

    if ($_POST["accion"] == "actualizar") {
        $actualizar = new ajaxRayosX();
        $actualizar->id = $_POST["idrx"];
        $actualizar->nombre = $_POST["nombrerx"];
        $actualizar->identidad = $_POST["identidadrx"];
        $actualizar->examen = $_POST["examenrx"];
        $actualizar->ActualizarDatosPaciente();
    }

    if ($_POST["accion"] == "cambiocreacion") {
        $cambiocreacion = new ajaxRayosX();
        $cambiocreacion->id = $_POST["idrx"];
        $cambiocreacion->creacion = $_POST["creacion"];
        $cambiocreacion->CreacionCambioPx();
    }

    if ($_POST["accion"] == "cambioestado") {
        $cambioestado = new ajaxRayosX();
        $cambioestado->id = $_POST["idrx"];
        $cambioestado->estado = $_POST["estado"];
        $cambioestado->EstadoCambioPX();
    }

    if ($_POST["accion"] == "guardarFechaEspera") {
        $EsperaFecha = new ajaxRayosX();
        $EsperaFecha->id = $_POST["idrx"];
        $EsperaFecha->fechaespera = $_POST["fechaEspera"];
        $EsperaFecha->Fecha_Espera();
    }

    if ($_POST["accion"] == "guardarFechaFinal") {
        $FechaFinal = new ajaxRayosX();
        $FechaFinal->id = $_POST["idrx"];
        $FechaFinal->fechafinal = $_POST["fechaFinal"];
        $FechaFinal->Fecha_Final();
    }
}
?>
