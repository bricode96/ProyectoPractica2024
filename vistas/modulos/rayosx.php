<h1></h1>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
    <h1>
        <i class="fas fa-x-ray nav-icon"></i>
        Rayos X
    </h1>
</div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="index.php">Radiologia</a>
                    </li>
                    <li class="breadcrumb-item active">CEMESA</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Botones -->
<section class="content" style="margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/mamografia.php')" class="btn btn-block btn-warning">
                    <i class="fas fa-microscope"></i> Mamografia
                </button>
            </div>
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/ultrasonido.php')" class="btn btn-block btn-danger">
                    <i class="fas fa-stethoscope"></i> Ultrasonido
                </button>
            </div>
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/tomografiacomputarizada.php')" class="btn btn-block btn-info">
                    <i class="fas fa-laptop-medical"></i> T.C.
                </button>
            </div>
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/resonanciamagnetica.php')" class="btn btn-block btn-success">
                    <i class="fas fa-magnet"></i> R.M.
                </button>
            </div>
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/fluroscopia.php')" class="btn btn-block btn-secondary">
                    <i class="fas fa-video"></i> Fluoroscopia
                </button>
            </div>
        </div>
    </div>
</section>
<br>
<!-- TABLE -->

<section class="content">
    <div class="container-fluid">
        <div class="btn-agregar-rayosx">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-rayosx" data-dismiss="modal">
                <i class="fas fa-plus-square"></i>
                Agregar Paciente
            </button>
        </div>   
        <table id="tablaRayosX" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width:5%;">No.</td>
                    <td>Nombre</td>
                    <td>Identidad</td>
                    <td style="width:15%;">Fecha</td>
                    <td style="width:20%; word-wrap: break-word;">Examen</td>
                    <td>Estado</td>
                    <td style="width:10%;">Acciones</td>

                </tr>
            </thead>
    </table>
    </div>
    
</section>

<!-- Añadir/Eliminar Modal -->


<div class="modal fade" id="modal-actualizar-rayosx">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- encabezado de modal -->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Pacientes de Rayos X</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- cuerpo de modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="hidden" id="idrayosx" name="rayosx" value="">
                            <label for="txtNombre">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="txtNombre" placeholder="Ingrese la nombre">
                    </div>
                    <div class="col-sm-10">
                    <div class="form-group">
                            <label for="txtIdentidad">Identidad</label>
                            <input class="form-control" type="text" name="identidad" id="txtIdentidad" placeholder="Ingrese la identidad">
                    </div>
                    </div>
                    <div class="col-sm-15">
                    <div class="form-group">
                            <label for="dleExamen">Examen</label>
                            <select name="examen" id="dleExamen" class="form-control" select2bs4>
                                <option value="0">Seleccione un examen</option>
                                <option value="1">ABDOMEN 1EXP</option>
                                <option value="2">ABDOMEN DE PIE-ACOSTADO 2EXP</option>
                                <option value="3">RECIEN NACIDO 1EXP</option>
                                <option value="4">RECIEN NACIDO AP/L 2EXP</option>
                                <option value="5">COLUMNA LUMBAR 1EXP</option>
                                <option value="6">COLUMNA LUMBAR AP/L 2EXP</option>
                                <option value="7">COLUMNA LUMBAR AP/L/DINAMICAS 4EXP</option>
                                <option value="8">ARTICULACIONES SACROILIACAS AP 1EXP</option>
                                <option value="9">ARTICULACIONES SACROILIACAS AP/OBLICUAS 3EXP</option>
                                <option value="10">CADERA ARTICULACION COXO-FEMORAL 1EXP</option>
                                <option value="11">CADERA INLET-OUTLET 2EXP</option>
                                <option value="12">CADERA RANA 1EXP</option>
                                <option value="13">PELVIS AP 1EXP</option>
                                <option value="14">SACRO-COXIS AP/L 2EXP</option>
                                <option value="15">SACRO COXIS AP 1EXP</option>
                                <option value="16">CRANEO AP/LATERAL 2EXP</option>
                                <option value="17">CRANEO AP/L TOWNE 3EXP</option>
                                <option value="18">HUESOS DE LA CARA CADWELL,WATERS 2EXP</option>
                                <option value="19">HUESOS PROPIOS DE NARIZ 1EXP</option>
                                <option value="20">MANDIBULA AP/L 2EXP</option>
                                <option value="21">MANDIBULA 1EXP</option>
                                <option value="22">MASTOIDES AP 1EXP</option>
                                <option value="23">MAXILAR SUPERIOR AP 1EXP</option>
                                <option value="24">MAXILAR SUPERIOR AP/L 2EXP</option>
                                <option value="25">ORBITAS AP 1EXP</option>
                                <option value="26">ORBITAS AP/L 2EXP</option>
                                <option value="27">ARTICULACIONES TEMPORO MANDIBULARES 4EXP</option>
                                <option value="28">ARCO CIGOMATICO AP 1EXP</option>
                                <option value="29">ARCO CIGOMATICO AP/L 2EXP</option>
                                <option value="30">MASTOIDES BILATERAL 4EXP</option>
                                <option value="31">AGUJERO OPTICO AP 1EXP</option>
                                <option value="32">AGUJERO OPTICO AP/L 2EXP</option>
                                <option value="33">ATLAS-AXIS PA 1EXP</option>
                                <option value="34">COLUMNA CERVICAL 1EXP</option>
                                <option value="35">COLUMNA CERVICAL AP/L 2EXP</option>
                                <option value="36">COLUMNA CERVICAL AP/LAT/DINAMICAS 4EXP</option>
                                <option value="37">CAVUM RINOFARINGEO 1EXP</option>
                                <option value="38">SENOS PARANASALES 3EXP</option>
                                <option value="39">SILLA TURCA AP/L 2EXP</option>
                                <option value="40">CRANEO 1EXP</option>
                                <option value="41">WATER 1EXP</option>
                                <option value="42">COLUMNA CERVICAL OBLICUAS 2EXP</option>
                                <option value="43">COLUMNA LUMBAR OBLICUAS 2EXP</option>
                                <option value="44">PLACA PANORAMICA DENTAL</option>
                                <option value="45">ANTEBRAZO O BRAZO 1EXP</option>
                                <option value="46">ANTEBRAZO O BRAZO 2EXP</option>
                                <option value="47">CODO AP/L 2EXP</option>
                                <option value="48">MUÑECA AP/L 2EXP</option>
                                <option value="49">ESCAFOIDES 3EXP</option>
                                <option value="50">MANO 1EXP</option>
                                <option value="51">MANO PA/OBLICUA 2EXP</option>
                                <option value="52">MANO PA/LAT/OBLICUA 3EXP</option>
                                <option value="53">PIE 1EXP</option>
                                <option value="54">CODO 1EXP</option>
                                <option value="55">HUMERO AP-LAT 2EXP</option>
                                <option value="56">HUMERO 1EXP</option>
                                <option value="57">COLUMNA TOTAL AP/L PANORAMICA 2EXP</option>
                                <option value="58">COLUMNA TOTAL PANORAMICA 1EXP</option>
                                <option value="59">PLACA ADICIONAL ADULTO 1EXP</option>
                                <option value="60">PLACA ADICIONAL NIÑO 1EXP</option>
                                <option value="61">MUÑECA AP 1EXP</option>
                                <option value="62">PIE AP-OBL 2EXP</option>
                                <option value="63">PIERNA 1EXP</option>
                                <option value="64">PIERNA AP-LAT 2EXP</option>
                                <option value="65">TELERADIOGRAFIA 1EXP</option>
                                <option value="66">RADIOMETRIA MIEMBROS INFERIORES (MEDICION MIEMBROS)</option>
                                <option value="67">FEMUR AP (MUSLO) 1EXP</option>
                                <option value="68">FEMUR AP/L (MUSLO) 2EXP</option>
                                <option value="69">RODILLA AP 1EXP</option>
                                <option value="70">RODILLA AP/L 2EXP</option>
                                <option value="71">RODILLA AP/L/AXIAL 3EXP</option>
                                <option value="72">TOBILLO AP 1EXP</option>
                                <option value="73">TOBILLO AP/L 2EXP</option>
                                <option value="74">ROTULA L-AXIAL ADULTO UNILATERAL</option>
                                <option value="75">ROTULA L-AXIAL ADULTO BILATERAL</option>
                                <option value="76">ROTULA CON ANGULO 30-45 Y 60 3EXP</option>
                                <option value="77">EDAD OSEA MANO 1EXP</option>
                                <option value="78">HIRTZ 1EXP</option>
                                <option value="79">PLACA MOVIL (PORTATIL)</option>
                                <option value="80">SERIE OSEA METABOLICA 7EXP</option>
                                <option value="81">SERIE OSEA METASTASICA 10EXP</option>
                                <option value="82">PROYECCIONES PARA IMPLANTES MAMARIOS (EKLUND) 4EXP</option>
                                <option value="83">PROYECCIONES MAMOGRAFICA ADICIONAL 1EXPO</option>
                                <option value="84">CLAVICULA AP 1EXP</option>
                                <option value="85">CLAVICULA BILATERAL 2EXP</option>
                                <option value="86">ESTERNON 1EXP</option>
                                <option value="87">ESTERNON CLAVICULAR 1EXP</option>
                                <option value="88">ESTERNON AP/LAT 2EXP</option>
                                <option value="89">HOMBRO AP 1EXP</option>
                                <option value="90">HOMBRO AP BILATERAL 2EXP</option>
                                <option value="91">HOMBRO AP - ROTACION INTERNA - EXTERNA 3EXP</option>
                                <option value="92">TORAX PA 1EXP</option>
                                <option value="93">TORAX PA/L 2EXP</option>
                                <option value="94">TORAX OSEO AP 1EXP</option>
                                <option value="95">TORAX OSEO AP/OBLICUO 3EXP</option>
                                <option value="96">COLUMNA DORSAL O TORÁCICA AP 1EXP</option>
                                <option value="97">COLUMNA DORSAL O TORÁCICA AP/LAT 2EXP</option>
                                <option value="98">COLUMNA DORSAL O TORACICA AP/LAT/DINAMICA 4EXP</option>
                                <option value="99">COLUMNA DORSAL O TORACICA OBLICUAS 2EXP</option>
                                <option value="100">HOMBRO AXILAR 1EXP</option>
                                <option value="101">PROTOCOLO DE TEP</option>
                                <option value="102">PLACA ADICIONAL MAGNIFICACION</option>
                            </select>
                    </div>
                    </div>
                    <div class="col-sm-15">
                    <div class="form-group">
                            <!--<label for="ddlEstado">Estado</label>-->
                            <button type="button" id="btnEstado" class="btn btn-info btn-block d-none" data-estado="0">ESPERA</button>
                    </div>
                    </div>
                    <div class="col-sm-20">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="departamento" id="txtDepartamento" value="Rayos X" readonly>
                    </div>
                    </div>
                    <div class="col-sm-20">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="creacion" id="txtCreacion" value="1">
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- pie de modal -->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Contenido del Encabezado -->

<section>   

    <script>

var examData = examData || {};

    $(document).ready(function(){

    var table = $("#tablaRayosX").DataTable({

    //Llamar la datatable //    
                  
            "ajax":{
                "url":"ajax/rayosx.ajax.php",
                "type":"POST",
                "dataSrc":""
                    },

    //Columna para el llenado de las columnas de estado y acciones //
            "columnDefs":[
                {
                "targets": 4, // El índice de la columna de 'examen'
                "sortable": false,
                "render": function(data, type, full, meta) {
                    var examenes = {
                        0: "Seleccione un examen",
                        1: "ABDOMEN 1EXP",
                        2: "ABDOMEN DE PIE-ACOSTADO 2EXP",
                        3: "RECIEN NACIDO 1EXP",
                        4: "RECIEN NACIDO AP/L 2EXP",
                        5: "COLUMNA LUMBAR 1EXP",
                        6: "COLUMNA LUMBAR AP/L 2EXP",
                        7: "COLUMNA LUMBAR AP/L/DINAMICAS 4EXP",
                        8: "ARTICULACIONES SACROILIACAS AP 1EXP",
                        9: "ARTICULACIONES SACROILIACAS AP/OBLICUAS 3EXP",
                        10: "CADERA ARTICULACION COXO-FEMORAL 1EXP",
                        11: "CADERA INLET-OUTLET 2EXP",
                        12: "CADERA RANA 1EXP",
                        13: "PELVIS AP 1EXP",
                        14: "SACRO-COXIS AP/L 2EXP",
                        15: "SACRO COXIS AP 1EXP",
                        16: "CRANEO AP/LATERAL 2EXP",
                        17: "CRANEO AP/L TOWNE 3EXP",
                        18: "HUESOS DE LA CARA CADWELL,WATERS 2EXP",
                        19: "HUESOS PROPIOS DE NARIZ 1EXP",
                        20: "MANDIBULA AP/L 2EXP",
                        21: "MANDIBULA 1EXP",
                        22: "MASTOIDES AP 1EXP",
                        23: "MAXILAR SUPERIOR AP 1EXP",
                        24: "MAXILAR SUPERIOR AP/L 2EXP",
                        25: "ORBITAS AP 1EXP",
                        26: "ORBITAS AP/L 2EXP",
                        27: "ARTICULACIONES TEMPORO MANDIBULARES 4EXP",
                        28: "ARCO CIGOMATICO AP 1EXP",
                        29: "ARCO CIGOMATICO AP/L 2EXP",
                        30: "MASTOIDES BILATERAL 4EXP",
                        31: "AGUJERO OPTICO AP 1EXP",
                        32: "AGUJERO OPTICO AP/L 2EXP",
                        33: "ATLAS-AXIS PA 1EXP",
                        34: "COLUMNA CERVICAL 1EXP",
                        35: "COLUMNA CERVICAL AP/L 2EXP",
                        36: "COLUMNA CERVICAL AP/LAT/DINAMICAS 4EXP",
                        37: "CAVUM RINOFARINGEO 1EXP",
                        38: "SENOS PARANASALES 3EXP",
                        39: "SILLA TURCA AP/L 2EXP",
                        40: "CRANEO 1EXP",
                        41: "WATER 1EXP",
                        42: "COLUMNA CERVICAL OBLICUAS 2EXP",
                        43: "COLUMNA LUMBAR OBLICUAS 2EXP",
                        44: "PLACA PANORAMICA DENTAL",
                        45: "ANTEBRAZO O BRAZO 1EXP",
                        46: "ANTEBRAZO O BRAZO 2EXP",
                        47: "CODO AP/L 2EXP",
                        48: "MUÑECA AP/L 2EXP",
                        49: "ESCAFOIDES 3EXP",
                        50: "MANO 1EXP",
                        51: "MANO PA/OBLICUA 2EXP",
                        52: "MANO PA/LAT/OBLICUA 3EXP",
                        53: "PIE 1EXP",
                        54: "CODO 1EXP",
                        55: "HUMERO AP-LAT 2EXP",
                        56: "HUMERO 1EXP",
                        57: "COLUMNA TOTAL AP/L PANORAMICA 2EXP",
                        58: "COLUMNA TOTAL PANORAMICA 1EXP",
                        59: "PLACA ADICIONAL ADULTO 1EXP",
                        60: "PLACA ADICIONAL NIÑO 1EXP",
                        61: "MUÑECA AP 1EXP",
                        62: "PIE AP-OBL 2EXP",
                        63: "PIERNA 1EXP",
                        64: "PIERNA AP-LAT 2EXP",
                        65: "TELERADIOGRAFIA 1EXP",
                        66: "RADIOMETRIA MIEMBROS INFERIORES MEDICION MIEMBROS",
                        67: "FEMUR AP (MUSLO) 1EXP",
                        68: "FEMUR AP/L (MUSLO) 2EXP",
                        69: "RODILLA AP 1EXP",
                        70: "RODILLA AP/L 2EXP",
                        71: "RODILLA AP/L/AXIAL 3EXP",
                        72: "TOBILLO AP 1EXP",
                        73: "TOBILLO AP/L 2EXP",
                        74: "ROTULA L-AXIAL ADULTO UNILATERAL",
                        75: "ROTULA L-AXIAL ADULTO BILATERAL",
                        76: "ROTULA CON ANGULO 30-45 Y 60 3EXP",
                        77: "EDAD OSEA MANO 1EXP",
                        78: "HIRTZ 1EXP",
                        79: "PLACA MOVIL PORTATIL",
                        80: "SERIE OSEA METABOLICA 7EXP",
                        81: "SERIE OSEA METASTASICA 10EXP",
                        82: "PROYECCIONES PARA IMPLANTES MAMARIOS EKLUND 4EXP",
                        83: "PROYECCIONES MAMOGRAFICA ADICIONAL 1EXPO",
                        84: "CLAVICULA AP 1EXP",
                        85: "CLAVICULA BILATERAL 2EXP",
                        86: "ESTERNON 1EXP",
                        87: "ESTERNON CLAVICULAR 1EXP",
                        88: "ESTERNON AP/LAT 2EXP",
                        89: "HOMBRO AP 1EXP",
                        90: "HOMBRO AP BILATERAL 2EXP",
                        91: "HOMBRO AP - ROTACION INTERNA - EXTERNA 3EXP",
                        92: "TORAX PA 1EXP",
                        93: "TORAX PA/L 2EXP",
                        94: "TORAX OSEO AP 1EXP",
                        95: "TORAX OSEO AP/OBLICUO 3EXP",
                        96: "COLUMNA DORSAL O TORÁCICA AP 1EXP",
                        97: "COLUMNA DORSAL O TORÁCICA AP/LAT 2EXP",
                        98: "COLUMNA DORSAL O TORACICA AP/LAT/DINAMICA 4EXP",
                        99: "COLUMNA DORSAL O TORACICA OBLICUAS 2EXP",
                        100: "HOMBRO AXILAR 1EXP",
                        101: "PROTOCOLO DE TEP",
                        102: "PLACA ADICIONAL MAGNIFICACION"
                        };
                    return examenes[data] || "Desconocido"; // Devolver el texto correspondiente o "Desconocido" si no se encuentra
                }
            },
                        {
                "targets": 5,
                "sortable": false,
                "render": function(data, type, full, meta) {
                    var estados = {
                        0: "<button type='button' class='btn btn-block btn-primary btnEstado' data-id='" + full.id + "' data-estado='0'>ESPERA</button>",
                        1: "<button type='button' class='btn btn-block btn-warning btnEstado' data-id='" + full.id + "' data-estado='1'>EXAMEN</button>",
                        2: "<button type='button' class='btn btn-block btn-danger btnEstado' data-id='" + full.id + "' data-estado='2'>TERMINADO</button>"
                    };
                    return estados[data] || "Desconocido";
                }
            },
                { 
                "targets":6,
                "sortable":false,
                "render": function (data, type, full, meta){
                return "<center>"+
                "<button type='button' class='btn btn-danger btn-sm btnEliminar'>"+
                "<i class='fas fa-trash'></i>"+
                "</button>"+
                "</center>";
                }
                },
                ],

    //Definicion de las columnas que se solicitan //

            "columns":[
                {"data": "idrx"},
                {"data": "nombrerx"},
                {"data": "identidadrx"},
                {"data": "fecharx"},
                {"data": "examenrx"},
                {"data": "estado"},
                {"data": "acciones"},
                ],

    // Traductor de lenguaje de ingles a español //

            "language":{
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colección",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                "1": "Copiada 1 fila al portapapeles",
                "_": "Copiadas %d fila al portapapeles"
                },
                "copyTitle": "Copiar al portapapeles",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                "-1": "Mostrar todas las filas",
                "1": "Mostrar 1 fila",
                "_": "Mostrar %d filas"
                },
                "pdf": "PDF",
                "print": "Imprimir"
                },
                "autoFill": {
                "cancel": "Cancelar",
                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                "fillHorizontal": "Rellenar celdas horizontalmente",
                "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                "add": "Añadir condición",
                "button": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "clearAll": "Borrar todo",
                "condition": "Condición",
                "conditions": {
                    "date": {
                        "after": "Despues",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vacío",
                        "equals": "Igual a",
                        "notBetween": "No entre",
                        "notEmpty": "No Vacio",
                        "not": "Diferente de"
                },
                "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
                },
                "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de"
                },
                "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
                }
                },
                "data": "Data",
                "deleteTitle": "Eliminar regla de filtrado",
                "leftTitle": "Criterios anulados",
                "logicAnd": "Y",
                "logicOr": "O",
                "rightTitle": "Criterios de sangría",
                "title": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Borrar todo",
                        "collapse": {
                            "0": "Paneles de búsqueda",
                            "_": "Paneles de búsqueda (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Sin paneles de búsqueda",
                        "loadMessage": "Cargando paneles de búsqueda",
                        "title": "Filtros Activos - %d"
                    },
                    "select": {
                        "1": "%d fila seleccionada",
                        "_": "%d filas seleccionadas",
                        "cells": {
                            "1": "1 celda seleccionada",
                            "_": "$d celdas seleccionadas"
                        },
                        "columns": {
                            "1": "1 columna seleccionada",
                            "_": "%d columnas seleccionadas"
                        }
                    },
                    "thousands": ".",
                    "datetime": {
                        "previous": "Anterior",
                        "next": "Proximo",
                        "hours": "Horas",
                        "minutes": "Minutos",
                        "seconds": "Segundos",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Cerrar",
                        "create": {
                            "button": "Nuevo",
                            "title": "Crear Nuevo Registro",
                            "submit": "Crear"
                        },
                        "edit": {
                            "button": "Editar",
                            "title": "Editar Registro",
                            "submit": "Actualizar"
                        },
                        "remove": {
                            "button": "Eliminar",
                            "title": "Eliminar Registro",
                            "submit": "Eliminar",
                            "confirm": {
                                "_": "¿Está seguro que desea eliminar %d filas?",
                                "1": "¿Está seguro que desea eliminar 1 fila?"
                            }
                        },
                        "error": {
                            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                        },
                        "multi": {
                            "title": "Múltiples Valores",
                            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                            "restore": "Deshacer Cambios",
                            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                        }
                    },
                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
                },
                "drawCallback": function(settings) {
                    updateExamSelect();
                   
                    
                },

                }); 
            //Botones guardar, editar y eliminar//

            //Funciones del cronometro LocalStorage//

            //ESTADO

            function updateExamSelect() {
                $(".examenSelect").each(function() {
                    var select = $(this);
                    var id = select.data("idrx");

                    var value = examData[id];

                    if (value !== undefined) {
                        // Cambiar el valor de estado aquí si es necesario
                        if (value === 0) {
                            select.val(1); // Cambiar de "ESPERA" a "EXAMEN"
                        } else if (value === 1) {
                            select.val(2); // Cambiar de "EXAMEN" a "TERMINADO"
                        } else {
                            select.val(value); // Mantener el valor actual
                        }
                    }
                });
            }


            $("#tablaRayosX tbody").on("click", ".btnEstado", function() {
                var data = table.row($(this).parents("tr")).data();
                var id = data["idrx"];
                var estado = data["estado"];

                var nuevoEstado = null;
                var mensajeConfirmacion = "";

                if (estado == 0) { 
                    nuevoEstado = 1; 
                    mensajeConfirmacion = "¿Seguro que deseas iniciar examen?";
                } else if (estado == 1) { 
                    nuevoEstado = 2; 
                    mensajeConfirmacion = "¿Seguro que deseas marcar como terminado?";
                } else if (estado == 2) { 
                    mensajeConfirmacion = "No se puede cambiar el estado una vez terminado.";
                }

                if (nuevoEstado !== null) {
                    var datos = new FormData();
                    datos.append('accion', "cambioestado");
                    datos.append('idrx', id);
                    datos.append('estado', nuevoEstado);

                    swal.fire({
                        title: "¡CONFIRMACION!",
                        text: mensajeConfirmacion,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "Confirmar",
                        cancelButtonText: "Cancelar"
                    }).then(resultado => {
                        if (resultado.value) {
                            // Guardar las fechas solo si se confirma el cambio de estado
                            if (estado == 0) {
                                var fechaEspera = new Date().toISOString(); // Obtener la fecha y hora actual
                                datos.append('fechaEspera', fechaEspera); // Agregar fecha y hora de espera
                                guardarFechaEspera(id, fechaEspera); // Llamar función para guardar la fecha de espera
                            } else if (estado == 1) {
                                var fechaFinal = new Date().toISOString(); // Obtener la fecha y hora actual
                                datos.append('fechaFinal', fechaFinal); // Agregar fecha y hora final
                                guardarFechaFinal(id, fechaFinal); // Llamar función para guardar la fecha final
                            }

                            // Realizar la llamada AJAX después de confirmar
                            $.ajax({
                                url: "ajax/rayosx.ajax.php",
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(respuesta) {
                                    table.ajax.reload(null, false);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.log("Error al cambiar estado: " + errorThrown);
                                }
                            });
                        }
                    });
                } else {
                    swal.fire({
                        title: "¡AVISO!",
                        text: mensajeConfirmacion,
                        icon: 'info',
                        confirmButtonText: "Aceptar"
                    });
                }
            });



            function guardarFechaEspera(id, fechaEspera) {
                // Obtener el offset de la zona horaria del cliente en minutos
                var offsetMinutes = new Date().getTimezoneOffset();

                // Crear una nueva fecha y ajustarla según el offset
                var fecha = new Date(fechaEspera);
                fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                // Formatear la fecha en un formato legible para enviar al servidor
                var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Función para enviar la fecha de espera al servidor
                $.ajax({
                    url: "ajax/rayosx.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaEspera",
                        idrx: id,
                        fechaEspera: fechaFormateada
                    },
                    success: function(respuesta) {
                        console.log("Fecha de espera guardada correctamente.");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("Error al guardar fecha de espera: " + errorThrown);
                    }
                });
            }

            function guardarFechaFinal(id, fechaFinal) {
                // Obtener el offset de la zona horaria del cliente en minutos
                var offsetMinutes = new Date().getTimezoneOffset();

                // Crear una nueva fecha y ajustarla según el offset
                var fecha = new Date(fechaFinal);
                fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                // Formatear la fecha en un formato legible para enviar al servidor
                var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Función para enviar la fecha final al servidor
                $.ajax({
                    url: "ajax/rayosx.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaFinal",
                        idrx: id,
                        fechaFinal: fechaFormateada
                    },
                    success: function(respuesta) {
                        console.log("Fecha final guardada correctamente.");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("Error al guardar fecha final: " + errorThrown);
                    }
                });
            }


            


    //Botones de guardar, eliminar y editar//

                $(".btn-agregar-rayosx").on('click', function() {
                    accion = "registrar";
                });

                $('#tablaRayosX tbody').on('click', '.btnEliminar', function() {
                    var data = table.row($(this).parents('tr')).data();
                    var estado = data["estado"];

                   
                    if (estado !== 2) {
                      
                        swal.fire("¡Error!", "Solo se puede eliminar una fila cuando el estado es 'Terminado'.", "error");
                        return;
                    }
                    swal.fire({
                        title: "¿Estás seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Sí, eliminarlo",
                        cancelButtonText: "Cancelar"
                    }).then(resultado => {
                        if (resultado.value) {
                           
                            var row = table.row($(this).parents('tr'));
                            row.remove().draw();

                          
                            var id = data["idrx"];
                            var creacion = $("#txtCreacion").val();

                            if (creacion == 1) {
                                var nuevaCreacion = 0;

                                var datos = new FormData();
                                datos.append('accion', "cambiocreacion");
                                datos.append('idrx', id);
                                datos.append('creacion', nuevaCreacion);
                                

                                $.ajax({
                                    url: "ajax/rayosx.ajax.php",
                                    method: "POST",
                                    data: datos,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(respuesta) {
                                        if (respuesta === 'ok') {
                                          
                                            table.ajax.reload(null, false);
                                        }
                                    }
                                });
                            }

                          
                            swal.fire("Eliminado", "El registro ha sido eliminado correctamente", "success");
                        }
                    });
                });


                $('#tablaRayosX tbody').on('click', '.btnEditar', function() {
                    var data = table.row($(this).parents('tr')).data();
                    accion = "actualizar";

                    $("#idrayosx").val(data["idrx"]);
                    $("#txtNombre").val(data["nombrerx"]);
                    $("#txtIdentidad").val(data["identidadrx"]);
                    $("#dleExamen").val(data["examenrx"]);
                    
                    console.log(data);
                    $('#modal-actualizar-rayosx').modal('show');
                });

                $("#btnGuardar").on('click', function() {
                    var id = $("#idrayosx").val(), 
                        nombre = $("#txtNombre").val(),
                        identidad = $("#txtIdentidad").val(),
                        estado = $("#btnEstado").data("estado"),
                        departamento = $("#txtDepartamento").val(),
                        examen = $("#dleExamen").val(),
                        creacion = $("#txtCreacion").val();

                    // Obtener el offset de la zona horaria del cliente en minutos
                    var offsetMinutes = new Date().getTimezoneOffset();

                    // Crear una nueva fecha y ajustarla según el offset
                    var fecha = new Date();
                    fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                    // Formatear la fecha en un formato legible para enviar al servidor
                    var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                    var datos = new FormData();
                    
                    datos.append('idrx', id);
                    datos.append('nombrerx', nombre);
                    datos.append('identidadrx', identidad);
                    datos.append('examenrx', examen);
                    datos.append('fecharx', fechaFormateada);
                    datos.append('estado', estado);
                    datos.append('departamentorx', departamento);
                    datos.append('creacion', creacion);
                    datos.append('accion', accion);

                    console.log("Datos enviados: ", {
                        idrx: id,
                        nombre: nombre,
                        identidadrx: identidad,
                        examen: examen,
                        fecha: fechaFormateada,
                        estado: estado,
                        departamentorx: departamento,
                        creacion: creacion,
                        accion: accion
                    });
                    
                    if (!nombre || !identidad || examen == 0) {
                        alert("Por favor complete todos los campos y/o seleccione un examen válido.");
                        return;
                    }

                    if (/\d/.test(nombre)) {
                        alert("El nombre no debe contener números.");
                        return;
                    }

                    if (!/^\d{13}$/.test(identidad)) {
                        alert("La identidad debe contener exactamente 13 dígitos y solo números.");
                        return;
                    }

                    if(identidad == "0000000000000"){
                        alert("Identidad no valida");
                        return;
                    }

                    swal.fire({
                        title: "¡CONFIRMAR!",
                        text: "Registrando",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "Si, deseo registrar",
                        cancelButtonText: "Cancelar"
                    }).then(resultado => {
                        if (resultado.value) {
                            $.ajax({
                                url: "ajax/rayosx.ajax.php",
                                method: "POST", 
                                data: datos, 
                                cache: false,
                                contentType: false, 
                                processData: false, 
                                success: function(respuesta) {
                                    swal.fire("¡Registro Exitoso!", "Registro ha sido agregado con éxito.", "success");
                                    $("#modal-actualizar-rayosx").modal('hide');

                                    console.log(respuesta);
                                    table.ajax.reload(null, false);

                                    $("#idrayosx").val(""); 
                                    $("#txtNombre").val("");
                                    $("#txtIdentidad").val("");
                                    $("#btnEstado").val("ESPERA");
                                    $("#txtDepartamento").val("Rayos X");
                                    $("#dleExamen").val("0");
                                    $("#txtCreacion").val("1");
                                }
                            });
                        }
                    });
                });


        })
   </script>
</section>