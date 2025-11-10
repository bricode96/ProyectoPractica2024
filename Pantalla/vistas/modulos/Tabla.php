<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Turnero</title>
    <style>
        .dataTables_length {
            display: none; /* Ocultar el contenedor de "Show [n] entries" */
        }
        .custom-datatable th, .custom-datatable td {
            font-weight: bold; /* Letras en negrita */
            font-size: 16px; /* Tamaño de letra base */
        }
        .custom-datatable th.double-size, .custom-datatable td.double-size {
            font-size: 32px; /* Tamaño de letra doble */
        }
    </style>
</head>
<body>

<!-- Tabla de turnero -->
<section class="content" style="margin-top: 20px;">
    <div class="container-fluid">
        <table id="tablaTecnica" class="table table-striped table-bordered nowrap custom-datatable" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <!-- Agregar clase 'double-size' a las cabeceras -->
                    <th class="double-size">No.</th>
                    <th class="double-size">Nombre</th>
                    <th class="double-size">Área</th>
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
                      return row.identificadorrx + "-" + row.idrx || row.identificadorul + "-" + row.idul || row.identificadorfl + "-" + row.idfl || row.identificadormm + "-" + row.idmm || row.identificadorrm + "-" + row.idrm || row.identificadortc + "-" + row.idtc;  // Mostrar ID
                  },
                },
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.nombrerx || row.nombreul || row.nombrefl || row.nombremm || row.nombrerm || row.nombretc;  // Mostrar nombre
                  },
                },
                { "data": null, 
                  "render": function(data, type, row) {
                      return row.departamentorx || row.departamentoul || row.departamentofl || row.departamentomm || row.departamentorm || row.departamentotc;  // Mostrar departamento
                  },
                },
                { "data": "fecha_creacion", "visible": false }, // Columna de fecha de creación oculta
                { "data": null, "visible": false, "render": function(data, type, row) { // Columna de prioridad oculta
                    var identificador = row.identificadorrx || row.identificadorul || row.identificadorfl || row.identificadormm || row.identificadorrm || row.identificadortc;
                    return identificador.includes("-TR") ? 1 : 2; // Prioridad alta para identificadores que contienen "TR"
                }}
            ],
            "paging": false, // Deshabilitar paginación
            "searching": false, // Deshabilitar búsqueda
            "info": false, // Deshabilitar información de registros
            "order": [[4, 'asc'], [3, 'asc']], // Ordenar por prioridad primero, luego por fecha de creación
            "language": {
                "emptyTable": "No hay datos disponibles en la tabla"
            }
        });

        setInterval(function(){
            table.ajax.reload(null, false); // Recargar los datos de la tabla sin reiniciar la paginación
        }, 15000); // Recargar la tabla cada 15 segundos (15000 milisegundos)
    });
</script>

</body>
</html>
