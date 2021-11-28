<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Membros</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/psicologo">Membros</a></li>
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
                    echo form_open('membro/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="membro_id" id="membro_id" placeholder="" value="<?php echo !empty($membro['membro_id']) ? $membro['membro_id'] : set_value('membro_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="membro_nome">Nome</label>
                            <input type="text" class="form-control" name="membro_nome" id="membro_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($membro['membro_nome']) ? $membro['membro_nome'] : set_value('membro_nome') ?>" >

                            <?php if (!empty($errors['membro_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['membro_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="membro_nis">NIS</label>
                            <input type="text" class="form-control" name="membro_nis" id="membro_nis" placeholder="Digite o NIS" value="<?php echo !empty($membro['membro_nis']) ? $membro['membro_nis'] : set_value('membro_nis') ?>" >
                            
                            <?php if (!empty($errors['membro_nis'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['membro_nis'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="membro_cpf">CPF</label>
                            <input type="text" class="form-control" name="membro_cpf" id="membro_cpf" placeholder="Digite o CPF" autofocus value="<?php echo !empty($membro['membro_cpf']) ? $membro['membro_cpf'] : set_value('membro_cpf') ?>" >

                            <?php if (!empty($errors['membro_cpf'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['membro_cpf'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="membro_dn">Data</label>
                            <input type="text" class="form-control" name="membro_dn" id="membro_dn" placeholder="Digite o Data" value="<?php echo !empty($membro['membro_dn']) ? $membro['membro_dn'] : set_value('membro_dn') ?>" >
                            
                            <?php if (!empty($errors['membro_dn'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['membro_dn'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="membro_tipo">Tipo</label>
                            <input type="text" class="form-control" name="membro_tipo" id="membro_data" placeholder="Digite o Tipo" value="<?php echo !empty($membro['membro_tipo']) ? $membro['membro_tipo'] : set_value('membro_tipo') ?>" >
                            
                            <?php if (!empty($errors['membro_tipo'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['membro_tipo'] ?> </div>
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