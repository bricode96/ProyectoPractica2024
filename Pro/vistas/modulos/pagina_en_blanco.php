<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Turnero</title>
    <!-- Agrega aquí tus estilos y scripts necesarios, como Bootstrap y FontAwesome -->
</head>
<body>

<!-- Contenido de la fila de pacientes -->
<section class="content-header" style="margin-bottom: 20px;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    <i class="fas fa-user-friends nav-icon"></i>
                    Fila Pacientes
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div>
        </div>
    </div>
</section>


<!-- Modal Principal -->
<div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Encabezado de modal -->
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="modalLabel">Agregar Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Cuerpo de modal -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="selectDepartamento">Departamento</label>
                    <select class="form-control" id="selectDepartamento">
                        <option value="rayosx">Rayos X</option>
                        <option value="fluoroscopia">Fluoroscopia</option>
                        <option value="mamografia">Mamografía</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input class="form-control" type="text" id="txtNombre" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="txtIdentidad">Identidad</label>
                    <input class="form-control" type="text" id="txtIdentidad" placeholder="Ingrese la identidad">
                </div>
                <div class="form-group">
                    <label for="dleExamen">Examen</label>
                    <select class="form-control" id="dleExamen">
                        <option value="0">Seleccione un examen</option>
                        <!-- Opciones de exámenes aquí -->
                    </select>
                </div>
            </div>
            <!-- Pie de modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>


<!--Agregar-->







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
            <div class="col-sm-2">
                <button onclick="cargarContenido('content-wrapper','vistas/modulos/fluroscopia.php')" class="btn btn-block btn-secondary">
                    <i class="fas fa-video"></i> Fluoroscopia
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Tabla de turnero -->
<section class="content" style="margin-top: 20px;">
    <div class="container-fluid">
        <table id="tablaTecnica" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Departamento</th>
                </tr>
            </thead>
        </table>
    </div>
</section>

<script>
    $(document).ready(function(){
        var table = $("#tablaTecnica").DataTable({
            "ajax": {
                "url": "ajax/turnero.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columns": [
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.idrx || row.idul || row.idfl || row.idmm || row.idrm || row.idtc;  // Mostrar idrx, idul, idfl, idmm, idrm o idtc
                  }
                },
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.nombrerx || row.nombreul || row.nombrefl || row.nombremm || row.nombrerm || row.nombretc;  // Mostrar nombrerx, nombreul, nombrefl, nombremm, nombrerm o nombretc
                  }
                },
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.identidadrx || row.identidadul || row.identidadfl || row.identidadmm || row.identidadrm || row.identidadtc;  // Mostrar identidadrx, identidadul, identidadfl, identidadmm, identidadrm o identidadtc
                  }
                },
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.departamentorx || row.departamentoul || row.departamentofl || row.departamentomm || row.departamentorm || row.departamentotc;  // Mostrar departamentorx, departamentoul, departamentofl, departamentomm, departamentorm o departamentotc
                  }
                },
                { "data": "fecha_creacion", "visible": false }  // Columna oculta para fecha_creacion
            ],
            "order": [[4, 'asc']],  // Ordenar por la columna oculta de fecha_creacion
            "language": {
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
                    "fillVertical": "Rellenar celdas verticalmente"
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
            }
        });
    });


    $(".btn-agregar-rayosx").on('click', function() {
                    accion = "registrar";
                });


    $("#btnGuardar").on('click', function() {
    var id = $("#idrayosx").val(),
        nombre = $("#txtNombre").val(),
        identidad = $("#txtIdentidad").val(),
        estado = $("#btnEstado").data("estado"),
        departamento = $("#selectDepartamento").val(), // Obtener el departamento seleccionado
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
            // Lógica de AJAX para cada departamento
            switch (departamento) {
                case 'rayosx':
                    $.ajax({
                        url: "ajax/rayosx.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            swal.fire("¡Registro Exitoso!", "Registro ha sido agregado con éxito.", "success");
                            $("#modal-actualizar").modal('hide');
                            table.ajax.reload(null, false);
                            $("#idrayosx").val(""); 
                            $("#txtNombre").val("");
                            $("#txtIdentidad").val("");
                            $("#btnEstado").val("ESPERA");
                            $("#dleExamen").val("0");
                            $("#txtCreacion").val("1");
                        }
                    });
                    break;
                case 'fluoroscopia':
                    $.ajax({
                        url: "ajax/fluoroscopia.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            swal.fire("¡Registro Exitoso!", "Registro ha sido agregado con éxito.", "success");
                            $("#modal-actualizar").modal('hide');
                            table.ajax.reload(null, false);
                            $("#idfluroscopia").val(""); 
                            $("#txtNombre").val("");
                            $("#txtIdentidad").val("");
                            $("#btnEstado").val("ESPERA");
                            $("#dleExamen").val("0");
                            $("#txtCreacion").val("1");
                        }
                    });
                    break;
                case 'mamografia':
                    $.ajax({
                        url: "ajax/mamografia.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            swal.fire("¡Registro Exitoso!", "Registro ha sido agregado con éxito.", "success");
                            $("#modal-actualizar").modal('hide');
                            table.ajax.reload(null, false);
                            $("#idmamo").val(""); 
                            $("#txtNombre").val("");
                            $("#txtIdentidad").val("");
                            $("#btnEstado").val("ESPERA");
                            $("#dleExamen").val("0");
                            $("#txtCreacion").val("1");
                        }
                    });
                    break;
                // Añadir más casos para otros departamentos si es necesario
            }
        }
    });
});

</script>

</body>
</html>
