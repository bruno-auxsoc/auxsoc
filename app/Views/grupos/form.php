<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Grupos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/grupo">Grupos</a></li>
                    <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $titulo; ?></h3>
                    </div>
                    <!-- /.card-header -->


                    <!-- form start -->
                    <?php
                    helper('form');
                    echo form_open('grupo/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="grupo_id" id="grupo_id" placeholder="" value="<?php echo !empty($grupo['grupo_id']) ? $grupo['grupo_id'] : set_value('grupo_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="grupo_nome">Nome</label>
                            <input type="text" class="form-control" name="grupo_nome" id="grupo_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($grupo['grupo_nome']) ? $grupo['grupo_nome'] : set_value('grupo_nome') ?>" >

                            <?php if (!empty($errors['grupo_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['grupo_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="grupo_periodo">Período</label>
                            <input type="text" class="form-control" name="grupo_periodo" id="grupo_periodo" placeholder="Digite o Período" value="<?php echo !empty($grupo['grupo_periodo']) ? $grupo['grupo_periodo'] : set_value('grupo_periodo') ?>" >
                            
                            <?php if (!empty($errors['grupo_periodo'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['grupo_periodo'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="grupo_oficineiro">Oficineiro</label>
                            <input type="text" class="form-control" name="grupo_oficineiro" id="grupo_oficineiro" placeholder="Digite o Oficineiro" value="<?php echo !empty($grupo['grupo_oficineiro']) ? $grupo['grupo_oficineiro'] : set_value('grupo_oficineiro') ?>" >
                            
                            <?php if (!empty($errors['grupo_oficineiro'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['grupo_oficineiro'] ?> </div>
                            <?php endif; ?>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    <?php echo form_close(); ?>



                </div>


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->



<?= $this->endSection() ?>