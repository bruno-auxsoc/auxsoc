<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Encontros</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/encontro">Encontros</a></li>
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

                    echo form_open('encontro/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="encontro_id" id="encontro_id" placeholder="" value="<?php echo !empty($encontro['encontro_id']) ? $encontro['encontro_id'] : set_value('encontro_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="participante_id">Participante</label>
                            <input type="text" class="form-control" name="participante_id" id="participante_id" placeholder="Digite o nome" autofocus value="<?php echo !empty($participante['participante_id']) ? $participante['participante_id'] : set_value('participante_id') ?>" >

                            <?php if (!empty($errors['participante_id'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['participante_id'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="grupo_id">Grupo</label>
                            <input type="text" class="form-control" name="grupo_id" id="grupo_id" placeholder="Digite o Grupo" value="<?php echo !empty($grupo['grupo_id']) ? $grupo['grupo_id'] : set_value('grupo_id') ?>" >
                            
                            <?php if (!empty($errors['grupo_id'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['grupo_id'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="encontro_data">Data</label>
                            <input type="text" class="form-control" name="encontro_data" id="encontro_data" placeholder="Digite a data" autofocus value="<?php echo !empty($participante['encontro_data']) ? $participante['participante_id'] : set_value('participante_id') ?>" >
                            <?php if (!empty($errors['encontro_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['encontro_nome'] ?> </div>
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