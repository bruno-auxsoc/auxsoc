<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Psicólogos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/psicologo">Psicólogos</a></li>
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

                    echo form_open('psicologo/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="psicologo_id" id="psicologo_id" placeholder="" value="<?php echo !empty($psicologo['psicologo_id']) ? $psicologo['psicologo_id'] : set_value('psicologo_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="psicologo_nome">Nome</label>
                            <input type="text" class="form-control" name="psicologo_nome" id="psicologo_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($psicologo['psicologo_nome']) ? $psicologo['psicologo_nome'] : set_value('psicologo_nome') ?>" >

                            <?php if (!empty($errors['psicologo_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['psicologo_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="psicologo_crp">CRP</label>
                            <input type="text" class="form-control" name="psicologo_crp" id="psicologo_crp" placeholder="Digite o CRP" value="<?php echo !empty($psicologo['psicologo_crp']) ? $psicologo['psicologo_crp'] : set_value('psicologo_crp') ?>" >
                            
                            <?php if (!empty($errors['psicologo_crp'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['psicologo_crp'] ?> </div>
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