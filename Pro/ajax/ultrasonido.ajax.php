<?php
require_once "../controladores/ultrasonido.controlador.php";
require_once "../modelos/ultrasonido.modelo.php";

class ajaxUltrasonido {
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
        $respuesta = ControladorUltrasonido::ctrVerTabla();
        echo json_encode($respuesta);
    }

    public function RegistrarTabla() {
        $respuesta = ControladorUltrasonido::ctrRegistrarTabla(
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
        $respuesta = ControladorUltrasonido::ctrCreacionCambio($this->id, $this->creacion);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function EstadoCambioPX() {
        $respuesta = ControladorUltrasonido::ctrCambioEstado($this->id, $this->estado);
        if ($this->estado == 1) {
            // Calcular y actualizar la diferencia de tiempo desde la creación hasta estado 1
            ControladorUltrasonido::ctrActualizarDiferenciaEstado1($this->id);
        } elseif ($this->estado == 2) {
            // Calcular y actualizar la diferencia de tiempo desde estado 1 hasta estado 2
            ControladorUltrasonido::ctrActualizarDiferenciaEstado2($this->id);
        }
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function ActualizarDatosPaciente() {
        $respuesta = ControladorUltrasonido::ctrActualizarPacienteDatos(
            $this->id,
            $this->nombre,
            $this->identidad,
            $this->examen
        );
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Espera() {
        $respuesta = ControladorUltrasonido::ctrGuardarFechaEspera($this->id, $this->fechaespera);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function Fecha_Final() {
        $respuesta = ControladorUltrasonido::ctrGuardarFechaFinal($this->id, $this->fechafinal);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
}

// Manejo de las acciones AJAX
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxUltrasonido();
    $respuesta->VerTabla();
} else {
    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxUltrasonido();
        $insertar->nombre = $_POST["nombreul"];
        $insertar->identidad = $_POST["identidadul"];
        $insertar->fecha = $_POST["fechaul"];
        $insertar->estado = $_POST["estado"];
        $insertar->departamento = $_POST["departamentoul"];
        $insertar->examen = $_POST["examenul"];
        $insertar->creacion = $_POST["creacion"];
        $insertar->identificador = $_POST["identificadorul"];
        $insertar->RegistrarTabla();
    }

    if ($_POST["accion"] == "actualizar") {
        $actualizar = new ajaxUltrasonido();
        $actualizar->id = $_POST["idul"];
        $actualizar->nombre = $_POST["nombreul"];
        $actualizar->identidad = $_POST["identidadul"];
        $actualizar->examen = $_POST["examenul"];
        $actualizar->ActualizarDatosPaciente();
    }

    if ($_POST["accion"] == "cambiocreacion") {
        $cambiocreacion = new ajaxUltrasonido();
        $cambiocreacion->id = $_POST["idul"];
        $cambiocreacion->creacion = $_POST["creacion"];
        $cambiocreacion->CreacionCambioPx();
    }

    if ($_POST["accion"] == "cambioestado") {
        $cambioestado = new ajaxUltrasonido();
        $cambioestado->id = $_POST["idul"];
        $cambioestado->estado = $_POST["estado"];
        $cambioestado->EstadoCambioPX();
    }

    if ($_POST["accion"] == "guardarFechaEspera") {
        $EsperaFecha = new ajaxUltrasonido();
        $EsperaFecha->id = $_POST["idul"];
        $EsperaFecha->fechaespera = $_POST["fechaEspera"];
        $EsperaFecha->Fecha_Espera();
    }

    if ($_POST["accion"] == "guardarFechaFinal") {
        $FechaFinal = new ajaxUltrasonido();
        $FechaFinal->id = $_POST["idul"];
        $FechaFinal->fechafinal = $_POST["fechaFinal"];
        $FechaFinal->Fecha_Final();
    }
}
?>
