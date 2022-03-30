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
                    <div class="widget-heading">
                        <h5 class="text-info">Alta/Baja Vigilancia</h5>
                    </div>
                    <div class="widget-content">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h3 class="text-white">Filtro</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
   
</script>

<?php require_once 'views/layout/footer.php'; ?>