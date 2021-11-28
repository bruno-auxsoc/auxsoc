<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Assistentes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/assistente">Assistentes</a></li>
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

                    echo form_open('assistente/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="assistente_id" id="assistente_id" placeholder="" value="<?php echo !empty($assistente['assistente_id']) ? $assistente['assistente_id'] : set_value('assistente_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="assistente_nome">Nome</label>
                            <input type="text" class="form-control" name="assistente_nome" id="assistente_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($assistente['assistente_nome']) ? $assistente['assistente_nome'] : set_value('assistente_nome') ?>" >

                            <?php if (!empty($errors['assistente_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['assistente_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="assistente_cress">CRESS</label>
                            <input type="text" class="form-control" name="assistente_cress" id="assistente_cress" placeholder="Digite o CRESS" value="<?php echo !empty($assistente['assistente_cress']) ? $assistente['assistente_cress'] : set_value('assistente_cress') ?>" >
                            
                            <?php if (!empty($errors['assistente_cress'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['assistente_cress'] ?> </div>
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