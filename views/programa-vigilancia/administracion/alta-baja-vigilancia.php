<?php
require_once 'views/layout/header.php';
require_once 'views/layout/loader.php';
require_once 'views/layout/navbar.php';
require_once 'views/layout/sidebar.php';
?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
    <div class="row layout-top-spacing">
    <div class="col-xl-12 col-xl-12 col-xl-12 col-xl-12 col-12 layout-spacing">
        <div class="widget widget-three">
            <h4 class="text-info mt-2 mb-4">Alta/Baja Vigilancia</h4>
            <div class="widget-content">
                <div class="card border-info mb-5">
                    <div class="card-header bg-info">
                        <h5 class="text-white">Filtro</h5>
                    </div>
                    <div class="card-body">
                        <form id="form_abvigilancia">
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label for="wwid" class="col-form-label">WWID</label>
                                    <input type="text" class="form-control form-control-sm" id="wwid" name="wwid" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="nombre" class="col-form-label">Nombre</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre">
                                </div>
                                <div class="col-lg-4">
                                    <label for="apellido_paterno" class="col-form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control form-control-sm" id="apellido_paterno" name="apellido_paterno">
                                </div>
                                <div class="col-lg-4">
                                    <label for="apellido_materno" class="col-form-label">Apellido Materno</label>
                                    <input type="text" class="form-control form-control-sm" id="apellido_materno" name="apellido_materno">
                                </div>
                            </div>
                                <button class="btn btn-primary" type="submit">Buscar</button>
                                <input type="reset"  class="btn btn-dark" value="Limpiar formulario"> 
                        </form>
                    </div>
                </div>

                <table id="table_abvigilancia" class="table table-bordered table-hover mt-5">
                  <thead>
                    <tr>
                      <th scope="col">WWID</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">TURNO</th>
                      <th scope="col">TOTAL DE VIGILANCIAS</th>
                      <th scope="col">EDITAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                  </tbody>
                </table> 
            </div>
        </div>
    </div>
    </div>
    </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2022 
                    <a target="_blank"  href="https://bmsa.mx/site/">BMSA - LightHouse</a>,Todos los derechos reservados.
                </p>
            </div>
        </div>
</div>
<!--  END CONTENT AREA  -->


<!--SCRIPT PARA PETICIONES ASINCRONAS-->
<script type="text/javascript">

    // Llamada asincrona para capturar los datos de la BD por medio de AJAX
    /*$(document).ready(function(){
        $('#table_abvigilancia').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": {
                "url":"http://localhost/bmsa/lighthouse/pdv/obtener_empleados",
                "type": "GET"
            },
            "columns": [
                { "data": "wwid" },
                { "data": "nombre" },
                { "data": "turno" },
                { "data": "vigilancias" },
                { "data": "planta" }
            ]
        });
    });*/

    $(document).ready(function(){
        $('#table_abvigilancia').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": {
                "url":"http://localhost/bmsa/lighthouse/pdv/obtener_empleados",
                "type": "GET",
                "dataSrc": ""
            },
            "columnDefs": [
                {
                    "targets": 4,
                    "sortable": false,
                    "render": function(data, type, full, meta){
                        return "<button type='button' class='btn btn-secondary btn-sm'><i class='fa-regular fa-pen-to-square'></i></button>";
                    }
                }
            ],
            "columns": [
                { "data": "wwid" },
                { "data": "nombre" },
                { "data": "turno" },
                { "data": "vigilancias" },
                { "data": "acciones" }
            ]
        });
    });
</script>

<?php require_once 'views/layout/footer.php'; ?>