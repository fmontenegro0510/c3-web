    <!-- Menu -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?php echo base_url();?>" class="navbar-brand ms-4 ms-lg-0">
            <div class="container-nav">
                <div class="logo">
                    <h1 class="text-primary m-0"><img class="me-3" src="<?php echo base_url();?>assets/img/v1/logo/chaco_64x64.png" alt="Icon"></h1>
                </div>
                <div class="leyenda">
                    <h5 class="mb-0"> Consejo de la Magistratura <br> y Jurado de Enjuiciamiento</h5>
                    <h5 class="mb-0"> Provincia del Chaco </h5>
                </div>
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url();?>autoridades" class="nav-item nav-link active"><h5 class="mb-0">Autoridades</h5></a>
                <a href="<?php echo base_url();?>quienes_somos" class="nav-item nav-link"><h5 class="mb-0">Quienes Somos</h5></a>
                <a href="<?php echo base_url();?>normativa" class="nav-item nav-link"><h5 class="mb-0">Normativa</h5></a>
                <a href="<?php echo base_url();?>concursos" class="nav-item nav-link"><h5 class="mb-0">Concursos</h5></a>
                <a href="<?php echo base_url();?>propuestas" class="nav-item nav-link"><h5 class="mb-0">Propuestas</h5></a>
                <a href="<?php echo base_url();?>sentencias" class="nav-item nav-link"><h5 class="mb-0">Sentencias</h5></a>
                <div class="nav-item dropdown" >
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <h5 class="mb-0">Prensa</h5></a>
                    <div class="dropdown-menu border-0 m-0" id="dropdown_menu_prensa" >
                        <a href="<?php echo base_url();?>prensa_blog" class="dropdown-item"><h5 class="mb-0">Blog de Prensa </h5> </a>
                        <a href="<?php echo base_url();?>prensa_galeria" class="dropdown-item"><h5 class="mb-0">Galeria</h5></a>
                    </div>
                </div>
                <a href="<?php echo base_url();?>contacto" class="nav-item nav-link"><h5 class="mb-0">Contacto </h5></a>
                <a href="<?php echo base_url();?>inscripciones" class="btn btn-primary py-2 px-4  d-lg-block" id="btn_inscribirse">INSCRIPCIONES</a>
            </div>
        </div>
    </nav>
    <!-- End Menu -->
