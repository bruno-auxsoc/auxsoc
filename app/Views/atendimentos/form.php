<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Atendimentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/atendimento">Atendimentos</a></li>
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

                    echo form_open('atendimento/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="atendimento_id" id="atendimento_id" placeholder="" value="<?php echo !empty($atendimento['atendimento_id']) ? $atendimento['atendimento_id'] : set_value('atendimento_id') ?>">
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
                                <label for="atendimento_data">Data</label>
                                <input type="date" class="form-control" name="atendimento_data" id="atendimento_data" placeholder="Digite a data" value="<?php echo !empty($atendimento['atendimento_data']) ? $atendimento['atendimento_data'] : set_value('atendimento_data') ?>">

                                <?php if (!empty($errors['atendimento_data'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['atendimento_data'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="atendimento_hora">Hora</label>
                                <input type="time" class="form-control" name="atendimento_hora" id="atendimento_hora" placeholder="Digite a hora" value="<?php echo !empty($atendimento['atendimento_hora']) ? $atendimento['atendimento_hora'] : set_value('atendimento_hora') ?>">

                                <?php if (!empty($errors['atendimento_hora'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['atendimento_hora'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                        <div class="form-group col-sm-6">
                                <label for="atendimento_desc">Descrição</label>
                                <input type="text" class="form-control" name="atendimento_desc" id="atendimento_desc" placeholder="Digite a descrição" value="<?php echo !empty($atendimento['atendimento_desc']) ? $atendimento['atendimento_desc'] : set_value('atendimento_desc') ?>">

                                <?php if (!empty($errors['atendimento_desc'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['atendimento_desc'] ?> </div>
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