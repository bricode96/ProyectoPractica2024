<h1></h1>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
    <h1>
        <i class="fas fa-video nav-icon"></i>
        Fluoroscopia
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
        </div>
    </div>
</section>
<br>

<!-- TABLE -->

<section class="content">
    <div class="container-fluid">
        <div class="btn-agregar-fluroscopia">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-fluroscopia" data-dismiss="modal">
                <i class="fas fa-plus-square"></i>
                Agregar Paciente
            </button>
        </div>   
        <table id="tablaFluroscopia" class="table table-striped table-bordered nowrap" style="width:100%;">
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


<div class="modal fade" id="modal-actualizar-fluroscopia">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- encabezado de modal -->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Pacientes de Fluroscopia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- cuerpo de modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="hidden" id="idfluroscopia" name="fluroscopia" value="">
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
                            <option value="1">HISTEROSALPINGOGRAFÍA (INFERTILIDAD)</option>
                            <option value="2">TRANSITO INTESTINAL</option>
                            <option value="3">SERIE ESOFAGOGASTRODUODENAL ADULTO</option>
                            <option value="4">SERIE ESOFAGOGASTRODUODENAL NIÑO</option>
                            <option value="5">FARINGOESOFAGOGRAMA</option>
                            <option value="6">SERIE ESOFAGOGASTRODUODENAL HORAS NO HABILES</option>
                            <option value="7">COLON POR ENEMA (ENEMA BARITADO) ADULTO</option>
                            <option value="8">COLON POR ENEMA (ENEMA BARITADO) NIÑO</option>
                            <option value="9">COLANGIOGRAFIA ENDOSCOPICA RETROGRADA</option>
                            <option value="10">COLANGIOGRAFIA POR SONDA EN T</option>
                            <option value="11">COLANGIOGRAFIA TRANSOPERATORIA</option>
                            <option value="12">PIELOGRAMA I.V. (UROGRAFIA EXCRETORA)</option>
                            <option value="13">PIELOGRAMA I.V. (UROGRAFIA EXCRETORA) HORAS NO HABILES</option>
                            <option value="14">AJUSTE DE BANDA</option>
                            <option value="15">FLUOROSCOPIA 5 MINUTOS</option>
                            <option value="16">FISTULOGRAFIA</option>
                            <option value="17">ESOFAGOGRAMA</option>
                            <option value="18">CISTOURETROGRAFIA ADULTO</option>
                            <option value="19">CISTOURETROGRAFIA NIÑO</option>
                            <option value="20">URETROGRAFIA RETROGRADA</option>
                            <option value="21">USO SALA DE RADIOLOGIA</option>
                            <option value="22">CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG</option>
                            <option value="23">COLANGIOGRAFIA TRANSHEPATICA PERCUTANEA Y DRENAJE BILIAR</option>
                            <option value="24">NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)</option>
                            <option value="25">DESINVAGINACION POR FLUOROSCOPIA</option>
                            <option value="26">DEFECOGRAFIA</option>
                            <option value="27">SIALOGRAFIA</option>
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
                        <input class="form-control" type="hidden" name="departamento" id="txtDepartamento" value="Fluoroscopia" readonly>
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

    var table = $("#tablaFluroscopia").DataTable({

    //Llamar la datatable //    
                  
            "ajax":{
                "url":"ajax/fluroscopia.ajax.php",
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
                        1: "HISTEROSALPINGOGRAFÍA (INFERTILIDAD)",
                        2: "TRANSITO INTESTINAL",
                        3: "SERIE ESOFAGOGASTRODUODENAL ADULTO",
                        4: "SERIE ESOFAGOGASTRODUODENAL NIÑO",
                        5: "FARINGOESOFAGOGRAMA",
                        6: "SERIE ESOFAGOGASTRODUODENAL HORAS NO HABILES",
                        7: "COLON POR ENEMA (ENEMA BARITADO) ADULTO",
                        8: "COLON POR ENEMA (ENEMA BARITADO) NIÑO",
                        9: "COLANGIOGRAFIA ENDOSCOPICA RETROGRADA",
                        10: "COLANGIOGRAFIA POR SONDA EN T",
                        11: "COLANGIOGRAFIA TRANSOPERATORIA",
                        12: "PIELOGRAMA I.V. (UROGRAFIA EXCRETORA)",
                        13: "PIELOGRAMA I.V. (UROGRAFIA EXCRETORA) HORAS NO HABILES",
                        14: "AJUSTE DE BANDA",
                        15: "FLUOROSCOPIA 5 MINUTOS",
                        16: "FISTULOGRAFIA",
                        17: "ESOFAGOGRAMA",
                        18: "CISTOURETROGRAFIA ADULTO",
                        19: "CISTOURETROGRAFIA NIÑO",
                        20: "URETROGRAFIA RETROGRADA",
                        21: "USO SALA DE RADIOLOGIA",
                        22: "CATETER DRENAJE BILIAR PERCUTANEO GUIADO/FLUORO/USG",
                        23: "COLANGIOGRAFIA TRANSHEPATICA PERCUTANEA Y DRENAJE BILIAR",
                        24: "NEFROSTOMIA PERCUTANEA GUIADA/FLUORO/US/TC (NO SONDA)",
                        25: "DESINVAGINACION POR FLUOROSCOPIA",
                        26: "DEFECOGRAFIA",
                        27: "SIALOGRAFIA"
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
                return "<center>"+"<button type='button' class='btn btn-danger btn-sm btnEliminar'>"+
                "<i class='fas fa-trash'></i>"+
                "</button>"+
                "</center>";
                }
                },
                ],

    //Definicion de las columnas que se solicitan //

            "columns":[
                {"data": "idfl"},
                {"data": "nombrefl"},
                {"data": "identidadfl"},
                {"data": "fechafl"},
                {"data": "examenfl"},
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
                    var id = select.data("idfl");

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


            $("#tablaFluroscopia tbody").on("click", ".btnEstado", function() {
                var data = table.row($(this).parents("tr")).data();
                var id = data["idfl"];
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
                    datos.append('idfl', id);
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
                                url: "ajax/fluroscopia.ajax.php",
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

            function guardarFechaEspera(id) {
                // Obtener el offset de la zona horaria del cliente en minutos
                var offsetMinutes = new Date().getTimezoneOffset();
                var offsetHours = offsetMinutes / 60; // Convertir a horas

                // Crear una nueva fecha y ajustarla según el offset
                var fecha = new Date();
                fecha.setHours(fecha.getHours() - offsetHours);

                // Formatear la fecha en un formato legible para enviar al servidor
                var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Enviar la fecha de espera ajustada al servidor
                $.ajax({
                    url: "ajax/fluroscopia.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaEspera",
                        idfl: id,
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

            function guardarFechaFinal(id) {
                // Crear una nueva fecha
                var fecha = new Date();

                // Obtener el offset de la zona horaria del cliente en minutos
                var offsetMinutes = fecha.getTimezoneOffset();

                // Ajustar la fecha según el offset
                fecha.setMinutes(fecha.getMinutes() - offsetMinutes);

                // Formatear la fecha en un formato legible para enviar al servidor
                var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                // Enviar la fecha final ajustada al servidor
                $.ajax({
                    url: "ajax/fluroscopia.ajax.php",
                    method: "POST",
                    data: {
                        accion: "guardarFechaFinal",
                        idfl: id,
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

                $(".btn-agregar-fluroscopia").on('click', function() {
                    accion = "registrar";
                });

                $('#tablaFluroscopia tbody').on('click', '.btnEliminar', function() {
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

                          
                            var id = data["idfl"];
                            var creacion = $("#txtCreacion").val();

                            if (creacion == 1) {
                                var nuevaCreacion = 0;

                                var datos = new FormData();
                                datos.append('accion', "cambiocreacion");
                                datos.append('idfl', id);
                                datos.append('creacion', nuevaCreacion);
                                

                                $.ajax({
                                    url: "ajax/fluroscopia.ajax.php",
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

                    // Obtener el offset de la zona horaria del cliente en minutos
                    var offsetMinutes = new Date().getTimezoneOffset();
                    var offsetHours = offsetMinutes / 60; // Convertir a horas

                $('#tablaFluroscopia tbody').on('click', '.btnEditar', function() {
                        var data = table.row($(this).parents('tr')).data();
                        accion = "actualizar";

                        $("#idfluroscopia").val(data["idfl"]);
                        $("#txtNombre").val(data["nombrefl"]);
                        $("#txtIdentidad").val(data["identidadfl"]);
                        $("#dleExamen").val(data["examenfl"]);
                        
                        console.log(data);
                        $('#modal-actualizar-fluroscopia').modal('show');
                    });

                    $('#btnGuardar').on('click', function() {
                        var id = $("#idfluroscopia").val(),
                            nombre = $("#txtNombre").val(),
                            identidad = $("#txtIdentidad").val(),
                            estado = $("#btnEstado").data("estado"),
                            departamento = $("#txtDepartamento").val(),
                            examen = $("#dleExamen").val(),
                            creacion = $("#txtCreacion").val();
                        
                        // Obtener el offset de la zona horaria del cliente en minutos
                        var offsetMinutes = new Date().getTimezoneOffset();
                        var offsetHours = offsetMinutes / 60; // Convertir a horas

                        // Crear una nueva fecha y ajustarla según el offset
                        var fecha = new Date();
                        fecha.setHours(fecha.getHours() - offsetHours);

                        // Formatear la fecha en un formato legible para mostrar o enviar al servidor
                        var fechaFormateada = fecha.toISOString().replace(/T/, ' ').replace(/\..+/, '');

                        var datos = new FormData();
                        datos.append('idfl', id);
                        datos.append('nombrefl', nombre);
                        datos.append('identidadfl', identidad);
                        datos.append('examenfl', examen);
                        datos.append('fechafl', fechaFormateada); // Usar fecha formateada
                        datos.append('estado', estado);
                        datos.append('departamentofl', departamento);
                        datos.append('creacion', creacion);
                        datos.append('accion', accion);

                        console.log("Datos enviados: ", {
                            idfl: id,
                            nombre: nombre,
                            identidadfl: identidad,
                            examen: examen,
                            fecha: fechaFormateada,
                            estado: estado,
                            departamentofl: departamento,
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
                                    url: "ajax/fluroscopia.ajax.php",
                                    method: "POST",
                                    data: datos,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(respuesta) {
                                        swal.fire("¡Registro Exitoso!", "Registro ha sido agregado con éxito.", "success");
                                        $("#modal-actualizar-fluroscopia").modal('hide');

                                        console.log(respuesta);
                                        table.ajax.reload(null, false);

                                        $("#idfluroscopia").val("");
                                        $("#txtNombre").val("");
                                        $("#txtIdentidad").val("");
                                        $("#btnEstado").val("ESPERA");
                                        $("#txtDepartamento").val("Fluoroscopia");
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