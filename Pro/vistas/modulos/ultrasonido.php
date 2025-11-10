<h1></h1>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
    <h1>
        <i class="fas fa-stethoscope nav-icon"></i>
        Ultrasonido
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
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/rayosx.php')" class="btn btn-block btn-primary">
                    <i class="fas fa-x-ray"></i> Rayos X
                </button>
            </div>
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/mamografia.php')" class="btn btn-block btn-warning">
                    <i class="fas fa-microscope"></i> Mamografia
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
        <div class="btn-agregar-ultrasonido">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-ultrasonido" data-dismiss="modal">
                <i class="fas fa-plus-square"></i>
                Agregar Paciente
            </button>
        </div>   
        <table id="tablaUltrasonido" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width:5%;">No.</td>
                    <td>Nombre</td>
                    <td>Identidad</td>
                    <td style="width:15%;">Fecha</td>
                    <td style="width:20%; word-wrap: break-word;">examenrx</td>
                    <td>Estado</td>
                    <td style="width:10%;">Acciones</td>

                </tr>
            </thead>
    </table>
    </div>
    
</section>

<!-- Añadir/Eliminar Modal -->

<!-- Modal de Ultrasonido -->
<div class="modal fade" id="modal-actualizar-ultrasonido">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- encabezado de modal -->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Pacientes de Ultrasonido</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- cuerpo de modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="hidden" id="idultrasonido" name="ultrasonido" value="">
                            <label for="txtNombre">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="txtNombre" placeholder="Ingrese el nombre">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="txtIdentidad">Identidad</label>
                            <input class="form-control" type="text" name="identidad" id="txtIdentidad" placeholder="Ingrese la identidad">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="checkbox" id="chkTerceraEdad" name="terceraEdad">
                            <label for="chkTerceraEdad">Paciente de tercera edad</label>
                        </div>
                    </div>
                </div>
                <div id="examenes-container">
                    <div class="row examen-group">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="dleExamen">Examen</label>
                                <select name="examen[]" class="form-control" select2bs4>
                                    <option value="0">Seleccione un examen</option>
                                    <option value="1">ULTRASONIDO DE HOMBRO</option>
                                    <option value="2">BIOPSIA HIGADO CON AGUJA TRUCUT PERCUTANEA GUIADA/USG</option>
                                    <option value="3">BIOPSIA MASA ABDOMINAL O RETROPERITONEAL C/ AGUJA TRUCUT USG</option>
                                    <option value="4">BIOPSIA PROSTATA TRANSRECTAL CON AGUJA TRUCUT GUIADA/USG</option>
                                    <option value="5">CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG</option>
                                    <option value="6">DRENAJE PERCUTANEO ABSCESO INTRA-ABDOMINAL SUBFRENICO /USG</option>
                                    <option value="7">NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)</option>
                                    <option value="8">PARACENTESIS GUIADA POR USG</option>
                                    <option value="9">USG PELVICO</option>
                                    <option value="10">USG OBSTETRICO</option>
                                    <option value="11">USG ABDOMEN INFERIOR</option>
                                    <option value="12">USG ABDOMEN SUPERIOR</option>
                                    <option value="13">USG ABDOMEN TOTAL</option>
                                    <option value="14">USG PROSTATA SUPRAPUBICO</option>
                                    <option value="15">USG TRANSRECTAL DE PROSTATA</option>
                                    <option value="16">USG DOPPLER COLOR TESTICULAR</option>
                                    <option value="17">USG RENAL Y VESICAL (VIAS URINARIAS)</option>
                                    <option value="18">USG OBSTETRICO 3-D / 4-D</option>
                                    <option value="19">USG TRANSVAGINAL</option>
                                    <option value="20">USG DOPPLER COLOR RENAL</option>
                                    <option value="21">USG DOPPLER COLOR AORTA ABDOMINAL</option>
                                    <option value="22">USG DOPPLER COLOR HEPATICO</option>
                                    <option value="23">USG DOPPLER COLOR OBSTETRICO</option>
                                    <option value="24">USG DOPPLER COLOR PENE</option>
                                    <option value="25">USG ESCROTAL (TESTICULAR)</option>
                                    <option value="26">USG CEREBRO TRANSFONTANELAR</option>
                                    <option value="27">USG DOPPLER COLOR TRANSCRANEAL</option>
                                    <option value="28">USG DOPPLER COLOR GINECOLOGICO</option>
                                    <option value="29">USG HISTEROSONOGRAFIA</option>
                                    <option value="30">BIOPSIA PARTES BLANDAS DE CUELLO-CABEZA GUIADA/USG</option>
                                    <option value="31">BIOPSIA TIROIDES POR ASPIRACION (BAAF)GUIADA POR USG</option>
                                    <option value="32">BIOPSIA GANGLIO LINFATICO POR ASPIRACION (BAAF) GUIADA/USG</option>
                                    <option value="33">USG DOPPLER COLOR TRANSFONTANELAR</option>
                                    <option value="34">USG DOPPLER COLOR CAROTIDAS (CUELLO)</option>
                                    <option value="35">USG DOPPLER COLOR OJOS</option>
                                    <option value="36">USG TIROIDES</option>
                                    <option value="37">USG CUELLO</option>
                                    <option value="38">BIOPSIA MUSCULO CON AGUJA TRUCUT PERCUTANEA GUIADA POR USG</option>
                                    <option value="39">USG DOPPLER COLOR VENOSO UNILATERAL</option>
                                    <option value="40">USG DOPPLER COLOR VENOSO BILATERAL</option>
                                    <option value="41">USG DOPPLER COLOR ARTERIAL UNILATERAL</option>
                                    <option value="42">USG DOPPLER COLOR ARTERIAL BILATERAL</option>
                                    <option value="43">USG PARTES BLANDAS</option>
                                    <option value="44">USG MUSCULAR</option>
                                    <option value="45">BIOPSIA RENAL PERCUTANEA CON AGUJA TRUCUT GUIADA/US</option>
                                    <option value="46">BIOPSIA MAMARIA POR ASPIRACION (BAAF) GUIADA POR USG</option>
                                    <option value="47">BIOPSIA MAMARIA CON AGUJA TRUCUT GUIADA POR USG</option>
                                    <option value="48">ASPIRACION DE QUISTE EN MAMA GUIADA POR USG</option>
                                    <option value="49">USG MAMA</option>
                                    <option value="50">BIOPSIA PARTES BLANDAS DE TORAX ASPIRACIÓN (BAAF) GUIADA/USG</option>
                                    <option value="51">USG TORAX</option>
                                    <option value="52">DRENAJE DE ACCESO DE TEJIDO BLANCO GUIADO POR USG</option>
                                    <option value="53">USG OCULAR UNILATERAL</option>
                                    <option value="54">USG OCULAR BILATERAL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="button" id="btnAgregarExamen" class="btn btn-info btn-block">Agregar Examen</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="button" id="btnEstado" class="btn btn-info btn-block d-none" data-estado="0">ESPERA</button>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="departamento" id="txtDepartamento" value="Ultrasonido" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="creacion" id="txtCreacion" value="1">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="identificador" id="txtIdentificador" value="UL" readonly>
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

    var table = $("#tablaUltrasonido").DataTable({

    //Llamar la datatable //    
                  
            "ajax":{
                "url":"ajax/ultrasonido.ajax.php",
                "type":"POST",
                "dataSrc":""
                    },

    //Columna para el llenado de las columnas de estado y acciones //
            "columnDefs":[
                {
                "targets": 4, // El índice de la columna de 'examenrx'
                "sortable": false,
                "render": function(data, type, full, meta) {
                    var examenes = {
                        0: "Seleccione un examen",
                        1: "ULTRASONIDO DE HOMBRO",
                        2: "BIOPSIA HIGADO CON AGUJA TRUCUT PERCUTANEA GUIADA/USG",
                        3: "BIOPSIA MASA ABDOMINAL O RETROPERITONEAL C/ AGUJA TRUCUT USG",
                        4: "BIOPSIA PROSTATA TRANSRECTAL CON AGUJA TRUCUT GUIADA/USG",
                        5: "CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG",
                        6: "DRENAJE PERCUTANEO ABSCESO INTRA-ABDOMINAL SUBFRENICO /USG",
                        7: "NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)",
                        8: "PARACENTESIS GUIADA POR USG",
                        9: "USG PELVICO",
                        10: "USG OBSTETRICO",
                        11: "USG ABDOMEN INFERIOR",
                        12: "USG ABDOMEN SUPERIOR",
                        13: "USG ABDOMEN TOTAL",
                        14: "USG PROSTATA SUPRAPUBICO",
                        15: "USG TRANSRECTAL DE PROSTATA",
                        16: "USG DOPPLER COLOR TESTICULAR",
                        17: "USG RENAL Y VESICAL (VIAS URINARIAS)",
                        18: "USG OBSTETRICO 3-D / 4-D",
                        19: "USG TRANSVAGINAL",
                        20: "USG DOPPLER COLOR RENAL",
                        21: "USG DOPPLER COLOR AORTA ABDOMINAL",
                        22: "USG DOPPLER COLOR HEPATICO",
                        23: "USG DOPPLER COLOR OBSTETRICO",
                        24: "USG DOPPLER COLOR PENE",
                        25: "USG ESCROTAL (TESTICULAR)",
                        26: "USG CEREBRO TRANSFONTANELAR",
                        27: "USG DOPPLER COLOR TRANSCRANEAL",
                        28: "USG DOPPLER COLOR GINECOLOGICO",
                        29: "USG HISTEROSONOGRAFIA",
                        30: "BIOPSIA PARTES BLANDAS DE CUELLO-CABEZA GUIADA/USG",
                        31: "BIOPSIA TIROIDES POR ASPIRACION (BAAF)GUIADA POR USG",
                        32: "BIOPSIA GANGLIO LINFATICO POR ASPIRACION (BAAF) GUIADA/USG",
                        33: "USG DOPPLER COLOR TRANSFONTANELAR",
                        34: "USG DOPPLER COLOR CAROTIDAS (CUELLO)",
                        35: "USG DOPPLER COLOR OJOS",
                        36: "USG TIROIDES",
                        37: "USG CUELLO",
                        38: "BIOPSIA MUSCULO CON AGUJA TRUCUT PERCUTANEA GUIADA POR USG",
                        39: "USG DOPPLER COLOR VENOSO UNILATERAL",
                        40: "USG DOPPLER COLOR VENOSO BILATERAL",
                        41: "USG DOPPLER COLOR ARTERIAL UNILATERAL",
                        42: "USG DOPPLER COLOR ARTERIAL BILATERAL",
                        43: "USG PARTES BLANDAS",
                        44: "USG MUSCULAR",
                        45: "BIOPSIA RENAL PERCUTANEA CON AGUJA TRUCUT GUIADA/US",
                        46: "BIOPSIA MAMARIA POR ASPIRACION (BAAF) GUIADA POR USG",
                        47: "BIOPSIA MAMARIA CON AGUJA TRUCUT GUIADA POR USG",
                        48: "ASPIRACION DE QUISTE EN MAMA GUIADA POR USG",
                        49: "USG MAMA",
                        50: "BIOPSIA PARTES BLANDAS DE TORAX ASPIRACIÓN (BAAF) GUIADA/USG",
                        51: "USG TORAX",
                        52: "DRENAJE DE ACCESO DE TEJIDO BLANCO GUIADO POR USG",
                        53: "USG OCULAR UNILATERAL",
                        54: "USG OCULAR BILATERAL"
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
                {"data": "idul"},
                {"data": "nombreul"},
                {"data": "identidadul"},
                {"data": "fechaul"},
                {"data": "examenul"},
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
            
                //Boton para agregar mas examenes desde el modal//

            $('#btnAgregarExamen').on('click', function() {
                // Crear un nuevo grupo de examen
                var newExamenGroup = document.createElement('div');
                newExamenGroup.className = 'row examen-group';
                
                // Crear el div contenedor del select
                var divSelect = document.createElement('div');
                divSelect.className = 'col-sm-12';
                
                // Crear el form-group
                var formGroup = document.createElement('div');
                formGroup.className = 'form-group';
                
                // Crear el label del examen
                var labelExamen = document.createElement('label');
                labelExamen.textContent = 'Examen';
                
                // Crear el select del examen
                var selectExamen = document.createElement('select');
                selectExamen.name = 'examen[]';
                selectExamen.className = 'form-control';
                
                // Añadir las opciones al select
                var options = `
                    <option value="0">Seleccione un examen</option>
                    <option value="1">ULTRASONIDO DE HOMBRO</option>
                    <option value="2">BIOPSIA HIGADO CON AGUJA TRUCUT PERCUTANEA GUIADA/USG</option>
                    <option value="3">BIOPSIA MASA ABDOMINAL O RETROPERITONEAL C/ AGUJA TRUCUT USG</option>
                    <option value="4">BIOPSIA PROSTATA TRANSRECTAL CON AGUJA TRUCUT GUIADA/USG</option>
                    <option value="5">CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG</option>
                    <option value="6">DRENAJE PERCUTANEO ABSCESO INTRA-ABDOMINAL SUBFRENICO /USG</option>
                    <option value="7">NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)</option>
                    <option value="8">PARACENTESIS GUIADA POR USG</option>
                    <option value="9">USG PELVICO</option>
                    <option value="10">USG OBSTETRICO</option>
                    <option value="11">USG ABDOMEN INFERIOR</option>
                    <option value="12">USG ABDOMEN SUPERIOR</option>
                    <option value="13">USG ABDOMEN TOTAL</option>
                    <option value="14">USG PROSTATA SUPRAPUBICO</option>
                    <option value="15">USG TRANSRECTAL DE PROSTATA</option>
                    <option value="16">USG DOPPLER COLOR TESTICULAR</option>
                    <option value="17">USG RENAL Y VESICAL (VIAS URINARIAS)</option>
                    <option value="18">USG OBSTETRICO 3-D / 4-D</option>
                    <option value="19">USG TRANSVAGINAL</option>
                    <option value="20">USG DOPPLER COLOR RENAL</option>
                    <option value="21">USG DOPPLER COLOR AORTA ABDOMINAL</option>
                    <option value="22">USG DOPPLER COLOR HEPATICO</option>
                    <option value="23">USG DOPPLER COLOR OBSTETRICO</option>
                    <option value="24">USG DOPPLER COLOR PENE</option>
                    <option value="25">USG ESCROTAL (TESTICULAR)</option>
                    <option value="26">USG CEREBRO TRANSFONTANELAR</option>
                    <option value="27">USG DOPPLER COLOR TRANSCRANEAL</option>
                    <option value="28">USG DOPPLER COLOR GINECOLOGICO</option>
                    <option value="29">USG HISTEROSONOGRAFIA</option>
                    <option value="30">BIOPSIA PARTES BLANDAS DE CUELLO-CABEZA GUIADA/USG</option>
                    <option value="31">BIOPSIA TIROIDES POR ASPIRACION (BAAF)GUIADA POR USG</option>
                    <option value="32">BIOPSIA GANGLIO LINFATICO POR ASPIRACION (BAAF) GUIADA/USG</option>
                    <option value="33">USG DOPPLER COLOR TRANSFONTANELAR</option>
                    <option value="34">USG DOPPLER COLOR CAROTIDAS (CUELLO)</option>
                    <option value="35">USG DOPPLER COLOR OJOS</option>
                    <option value="36">USG TIROIDES</option>
                    <option value="37">USG CUELLO</option>
                    <option value="38">BIOPSIA MUSCULO CON AGUJA TRUCUT PERCUTANEA GUIADA POR USG</option>
                    <option value="39">USG DOPPLER COLOR VENOSO UNILATERAL</option>
                    <option value="40">USG DOPPLER COLOR VENOSO BILATERAL</option>
                    <option value="41">USG DOPPLER COLOR ARTERIAL UNILATERAL</option>
                    <option value="42">USG DOPPLER COLOR ARTERIAL BILATERAL</option>
                    <option value="43">USG PARTES BLANDAS</option>
                    <option value="44">USG MUSCULAR</option>
                    <option value="45">BIOPSIA RENAL PERCUTANEA CON AGUJA TRUCUT GUIADA/US</option>
                    <option value="46">BIOPSIA MAMARIA POR ASPIRACION (BAAF) GUIADA POR USG</option>
                    <option value="47">BIOPSIA MAMARIA CON AGUJA TRUCUT GUIADA POR USG</option>
                    <option value="48">ASPIRACION DE QUISTE EN MAMA GUIADA POR USG</option>
                    <option value="49">USG MAMA</option>
                    <option value="50">BIOPSIA PARTES BLANDAS DE TORAX ASPIRACIÓN (BAAF) GUIADA/USG</option>
                    <option value="51">USG TORAX</option>
                    <option value="52">DRENAJE DE ACCESO DE TEJIDO BLANCO GUIADO POR USG</option>
                    <option value="53">USG OCULAR UNILATERAL</option>
                    <option value="54">USG OCULAR BILATERAL</option>
                `;
                selectExamen.innerHTML = options;
                
                // Construir la estructura del nuevo grupo de examen
                formGroup.appendChild(labelExamen);
                formGroup.appendChild(selectExamen);
                divSelect.appendChild(formGroup);
                newExamenGroup.appendChild(divSelect);
                
                // Añadir el nuevo grupo de examen al contenedor
                document.getElementById('examenes-container').appendChild(newExamenGroup);
            });

            //ESTADO

            function updateExamSelect() {
                $(".examenSelect").each(function() {
                    var select = $(this);
                    var id = select.data("idul");

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

            //Codigo para el cambio de estado//

            $("#tablaUltrasonido tbody").on("click", ".btnEstado", function() {
                var data = table.row($(this).parents("tr")).data();
                var id = data["idul"];
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
                    datos.append('idul', id);
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
                                url: "ajax/ultrasonido.ajax.php",
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

   //Funciones para guardar fechaespera y fechafinal//

            function guardarFechaEspera(id, fechaEspera) {
                // Obtener el offset de la zona horaria del cliente en minutos
                var offsetMinutes = new Date().getTimezoneOffset();

                // Crear una nueva fecha de espera y ajustarla según el offset
                var fecha = new Date(fechaEspera);
                fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                // Formatear la fecha de espera ajustada
                var fechaEsperaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Función para enviar la fecha de espera al servidor
                $.ajax({
                    url: "ajax/ultrasonido.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaEspera",
                        idul: id,
                        fechaEspera: fechaEsperaFormateada
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

                // Crear una nueva fecha final y ajustarla según el offset
                var fecha = new Date(fechaFinal);
                fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                // Formatear la fecha final ajustada
                var fechaFinalFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Función para enviar la fecha final al servidor
                $.ajax({
                    url: "ajax/ultrasonido.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaFinal",
                        idul: id,
                        fechaFinal: fechaFinalFormateada
                    },
                    success: function(respuesta) {
                        console.log("Fecha final guardada correctamente.");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("Error al guardar fecha final: " + errorThrown);
                    }
                });
            }


            


                    //BotonEliminar//

                $(".btn-agregar-ultrasonido").on('click', function() {
                    accion = "registrar";
                });

                $('#tablaUltrasonido tbody').on('click', '.btnEliminar', function() {
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

                          
                            var id = data["idul"];
                            var creacion = $("#txtCreacion").val();

                            if (creacion == 1) {
                                var nuevaCreacion = 0;

                                var datos = new FormData();
                                datos.append('accion', "cambiocreacion");
                                datos.append('idul', id);
                                datos.append('creacion', nuevaCreacion);
                                

                                $.ajax({
                                    url: "ajax/ultrasonido.ajax.php",
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

                //BotonEditar//

               // $('#tablaUltrasonido tbody').on('click', '.btnEditar', function() {
                      //  var data = table.row($(this).parents('tr')).data();
                      //  accion = "actualizar";

                       // $("#idultrasonido").val(data["idul"]);
                      //  $("#txtNombre").val(data["nombreul"]);
                      //  $("#txtIdentidad").val(data["identidadul"]);
                        //$("#dleExamen").val(data["examenul"]);
                        
                        //console.log(data);
                      //  $('#modal-actualizar-ultrasonido').modal('show');
                    //});

                    //BotonGuardar//

                    $("#btnGuardar").on('click', function() {
                        var id = $("#idultrasonido").val(); 
                            nombre = $("#txtNombre").val();
                            identidad = $("#txtIdentidad").val();
                            estado = $("#btnEstado").data("estado");
                            departamento = $("#txtDepartamento").val();
                            creacion = $("#txtCreacion").val();
                            identificador = $("#txtIdentificador").val();

                                     // Verificar si el cliente es mayor de edad
                        if ($("#chkTerceraEdad").is(":checked")) {
                            identificador += "-TR";
                        }

                        // Obtener el offset de la zona horaria del cliente en minutos
                        var offsetMinutes = new Date().getTimezoneOffset();

                        // Crear una nueva fecha y ajustarla según el offset
                        var fecha = new Date();
                        fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                        // Formatear la fecha en un formato legible para enviar al servidor
                        var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                        var examenes = [];
                        $("select[name='examen[]']").each(function() {
                            var examen = $(this).val();
                            if (examen != "0") {
                                examenes.push(examen);
                            }
                        });

                        if (!nombre || !identidad || examenes.length == 0) {
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

                        if (identidad == "0000000000000") {
                            alert("Identidad no válida");
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
                                examenes.forEach(examen => {
                                    var datos = new FormData();
                                    datos.append('idul', id);
                                    datos.append('nombreul', nombre);
                                    datos.append('identidadul', identidad);
                                    datos.append('examenul', examen);
                                    datos.append('fechaul', fechaFormateada);
                                    datos.append('estado', estado);
                                    datos.append('departamentoul', departamento);
                                    datos.append('creacion', creacion);
                                    datos.append('identificadorul', identificador);
                                    datos.append('accion', accion);

                                    console.log("Datos enviados: ", {
                                        idul: id,
                                        nombre: nombre,
                                        identidadul: identidad,
                                        examen: examen,
                                        fecha: fechaFormateada,
                                        estado: estado,
                                        departamentoul: departamento,
                                        creacion: creacion,
                                        accion: accion
                                    });

                                    $.ajax({
                                        url: "ajax/ultrasonido.ajax.php",
                                        method: "POST", 
                                        data: datos, 
                                        cache: false,
                                        contentType: false, 
                                        processData: false, 
                                        success: function(respuesta) {
                                            console.log("Registro agregado: ", respuesta);


                                            table.ajax.reload(null, false);
                                        }
                                    });
                                });

                                swal.fire("¡Registro Exitoso!", "Los registros han sido agregados con éxito.", "success");
                                $("#modal-actualizar-ultrasonido").modal('hide');
                                table.ajax.reload(null, false);

                                // Limpiar campos después de guardar
                                $("#idultrasonido").val(""); 
                                $("#txtNombre").val("");
                                $("#txtIdentidad").val("");
                                $("#btnEstado").val("ESPERA");
                                $("#txtDepartamento").val("Ultrasonido");
                                $("#dleExamen").val("0");
                                $("#txtCreacion").val("1");
                                $("#txtIdentificador").val("UL");
                                $("#examenes-container").html(`
                                    <div class="row examen-group">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="dleExamen">Examen</label>
                                                <select name="examen[]" class="form-control" select2bs4>
                                                <option value="0">Seleccione un examen</option>
                                                <option value="1">ULTRASONIDO DE HOMBRO</option>
                                                <option value="2">BIOPSIA HIGADO CON AGUJA TRUCUT PERCUTANEA GUIADA/USG</option>
                                                <option value="3">BIOPSIA MASA ABDOMINAL O RETROPERITONEAL C/ AGUJA TRUCUT USG</option>
                                                <option value="4">BIOPSIA PROSTATA TRANSRECTAL CON AGUJA TRUCUT GUIADA/USG</option>
                                                <option value="5">CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG</option>
                                                <option value="6">DRENAJE PERCUTANEO ABSCESO INTRA-ABDOMINAL SUBFRENICO /USG</option>
                                                <option value="7">NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)</option>
                                                <option value="8">PARACENTESIS GUIADA POR USG</option>
                                                <option value="9">USG PELVICO</option>
                                                <option value="10">USG OBSTETRICO</option>
                                                <option value="11">USG ABDOMEN INFERIOR</option>
                                                <option value="12">USG ABDOMEN SUPERIOR</option>
                                                <option value="13">USG ABDOMEN TOTAL</option>
                                                <option value="14">USG PROSTATA SUPRAPUBICO</option>
                                                <option value="15">USG TRANSRECTAL DE PROSTATA</option>
                                                <option value="16">USG DOPPLER COLOR TESTICULAR</option>
                                                <option value="17">USG RENAL Y VESICAL (VIAS URINARIAS)</option>
                                                <option value="18">USG OBSTETRICO 3-D / 4-D</option>
                                                <option value="19">USG TRANSVAGINAL</option>
                                                <option value="20">USG DOPPLER COLOR RENAL</option>
                                                <option value="21">USG DOPPLER COLOR AORTA ABDOMINAL</option>
                                                <option value="22">USG DOPPLER COLOR HEPATICO</option>
                                                <option value="23">USG DOPPLER COLOR OBSTETRICO</option>
                                                <option value="24">USG DOPPLER COLOR PENE</option>
                                                <option value="25">USG ESCROTAL (TESTICULAR)</option>
                                                <option value="26">USG CEREBRO TRANSFONTANELAR</option>
                                                <option value="27">USG DOPPLER COLOR TRANSCRANEAL</option>
                                                <option value="28">USG DOPPLER COLOR GINECOLOGICO</option>
                                                <option value="29">USG HISTEROSONOGRAFIA</option>
                                                <option value="30">BIOPSIA PARTES BLANDAS DE CUELLO-CABEZA GUIADA/USG</option>
                                                <option value="31">BIOPSIA TIROIDES POR ASPIRACION (BAAF)GUIADA POR USG</option>
                                                <option value="32">BIOPSIA GANGLIO LINFATICO POR ASPIRACION (BAAF) GUIADA/USG</option>
                                                <option value="33">USG DOPPLER COLOR TRANSFONTANELAR</option>
                                                <option value="34">USG DOPPLER COLOR CAROTIDAS (CUELLO)</option>
                                                <option value="35">USG DOPPLER COLOR OJOS</option>
                                                <option value="36">USG TIROIDES</option>
                                                <option value="37">USG CUELLO</option>
                                                <option value="38">BIOPSIA MUSCULO CON AGUJA TRUCUT PERCUTANEA GUIADA POR USG</option>
                                                <option value="39">USG DOPPLER COLOR VENOSO UNILATERAL</option>
                                                <option value="40">USG DOPPLER COLOR VENOSO BILATERAL</option>
                                                <option value="41">USG DOPPLER COLOR ARTERIAL UNILATERAL</option>
                                                <option value="42">USG DOPPLER COLOR ARTERIAL BILATERAL</option>
                                                <option value="43">USG PARTES BLANDAS</option>
                                                <option value="44">USG MUSCULAR</option>
                                                <option value="45">BIOPSIA RENAL PERCUTANEA CON AGUJA TRUCUT GUIADA/US</option>
                                                <option value="46">BIOPSIA MAMARIA POR ASPIRACION (BAAF) GUIADA POR USG</option>
                                                <option value="47">BIOPSIA MAMARIA CON AGUJA TRUCUT GUIADA POR USG</option>
                                                <option value="48">ASPIRACION DE QUISTE EN MAMA GUIADA POR USG</option>
                                                <option value="49">USG MAMA</option>
                                                <option value="50">BIOPSIA PARTES BLANDAS DE TORAX ASPIRACIÓN (BAAF) GUIADA/USG</option>
                                                <option value="51">USG TORAX</option>
                                                <option value="52">DRENAJE DE ACCESO DE TEJIDO BLANCO GUIADO POR USG</option>
                                                <option value="53">USG OCULAR UNILATERAL</option>
                                                <option value="54">USG OCULAR BILATERAL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                `);
                                
                                 // Aquí restablecemos el estado del checkbox (si hay alguno)
                                 $("input[type='checkbox']").prop('checked', false);
                            }
                        });
                    });


        })
   </script>
</section>