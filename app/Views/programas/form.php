<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Programas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/programa">Programas</a></li>
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
                    echo form_open('programas/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="programas_id" id="programas_id" placeholder="" value="<?php echo !empty($programas['programas_id']) ? $programas['programas_id'] : set_value('programas_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="programas_nome">Nome</label>
                            <input type="text" class="form-control" name="programas_nome" id="programas_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($programas['programas_id']) ? $programas['programas_nome']) ? $programas['programas_id']) ? $programas['programas_nome'] : set_value('programas_nome') ?>" >

                            <?php if (!empty($errors['programas_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['programas_nome'] ?> </div>
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