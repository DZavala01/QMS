
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9" style=" box-shadow: 0px 15px 10px -15px #c6605c">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('/images/Checador.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('/images/Vacaciones22-23.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('/images/Encargados.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4 p-4 m-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Gu??a de proceso de Registro Sige</b></h5>
                <p class="card-text"><b>Descripci??n:</b>  Como crear un nuevo usuario de SIGE
                    <br>
                    <b>Aplicaci??n:</b> SIGE
                    <br>
                    <b>M??s info:</b><a href="http://sige.cucsh.udg.mx/public/"> SIGE</a>
                    <br>
                    <b>Autor:</b> Victor Hugo Ram??rez
                </p>
                <a class="btn btn-primary  " href="#" download=""> <i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 p-4 m-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Manual para formato de reporte bimestral</b></h5>
                <p class="card-text"><b>Descripci??n:</b> Es el formato a tener para cuando realices tus reportes bimestrales
                    <br>
                    <b>Aplicaci??n:</b> Reportes
                    <br>
                    <b>M??s info:</b> <a href="https://www.youtube.com/watch?v=0b2Ldbkp-0w"> Youtube</a> 
                    <br>
                    <b>Autor:</b> Victor Hugo Ram??rez
                </p>
                <a class="btn btn-primary  " href="#" download=""> <i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 p-4 m-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Reglamente Interno y Consideraciones Importantes</b></h5>
                <p class="card-text"><b>Descripci??n:</b>
                    <br>
                    <b>Aplicaci??n:</b> Reglamento interno de CTA
                    <br>
                    <b>M??s info:</b><a href="<?php echo e(route('reglamento.index')); ?>"> Reglamento</a>
                    <br>
                    <b>Autor:</b> Victor Hugo Ram??rez
                </p>
                <a class="btn btn-primary  " href="#" download=""> <i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QMS\resources\views/welcome.blade.php ENDPATH**/ ?>