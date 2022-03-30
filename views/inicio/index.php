<?php
require_once 'views/layout/header.php';
require_once 'views/layout/loader.php';
require_once 'views/layout/navbar.php';
require_once 'views/layout/sidebar.php';
?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content bg-white">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">

            <div class="row layout-top-spacing justify-content-center">
                <img style="height: auto;width: 60%;" class="img-fluid" src="<?=base_url?>assets/img/Ingenius.png" alt="Logo del proyecto">
            </div>
    
        </div>
    </div>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2022 <a target="_blank"  href="https://bmsa.mx/site/">BMSA - LightHouse</a>, All rights reserved.</p>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->


<?php require_once 'views/layout/footer.php'; ?>