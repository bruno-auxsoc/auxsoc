<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Visitas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/atendimento">Visitas</a></li>
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
                    echo form_open('visita/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="visita_id" id="visita_id" placeholder="" value="<?php echo !empty($atendimento['visita_id']) ? $atendimento['visita_id'] : set_value('visita_id') ?>">
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="assistente_id">Assistente</label>
                                <input type="text" class="form-control" name="assistente_id" id="assistente_id" placeholder="Selecione o assistente" value="<?php echo !empty($atendimento['assistente_id']) ? $atendimento['assistente_id'] : set_value('assistente_id') ?>">

                                <?php if (!empty($errors['assistente_id'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['assistente_id'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="psicologo_id">Psicólogo</label>
                                <input type="text" class="form-control" name="psicologo_id" id="psicologo_id" placeholder="Selecione o psicólogo" value="<?php echo !empty($atendimento['psicologo_id']) ? $atendimento['psicologo_id'] : set_value('psicologo_id') ?>">

                                <?php if (!empty($errors['psicologo_id'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['psicologo_id'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="visita_data">Data</label>
                                <input type="date" class="form-control" name="visita_data" id="visita_data" placeholder="Digite a data" value="<?php echo !empty($atendimento['visita_data']) ? $atendimento['visita_data'] : set_value('visita_data') ?>">

                                <?php if (!empty($errors['visita_data'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['visita_data'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="visita_hora">Hora</label>
                                <input type="time" class="form-control" name="visita_hora" id="visita_hora" placeholder="Digite a hora" value="<?php echo !empty($atendimento['visita_hora']) ? $atendimento['visita_hora'] : set_value('visita_hora') ?>">

                                <?php if (!empty($errors['visita_hora'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['visita_hora'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                        <div class="form-group col-sm-6">
                                <label for="visita_desc">Descrição</label>
                                <input type="text" class="form-control" name="visita_desc" id="visita_desc" placeholder="Digite a descrição" value="<?php echo !empty($atendimento['visita_desc']) ? $atendimento['visita_desc'] : set_value('visita_desc') ?>">

                                <?php if (!empty($errors['visita_desc'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['visita_desc'] ?> </div>
                                <?php endif; ?>
                            </div>                            
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