<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Participantes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/participante">Participantes</a></li>
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
                    echo form_open('participante/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="participante_id" id="participante_id" placeholder="" value="<?php echo !empty($participante['participante_id']) ? $participante['participante_id'] : set_value('participante_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="'participante_id'">Nome</label>
                            <input type="text" class="form-control" name="participante_nome" id="participante_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($participante['participante_nome']) ? $participante['participante_nome'] : set_value('participante_nome') ?>" >

                            <?php if (!empty($errors['participante_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['participante_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="participante_cpf">CPF</label>
                            <input type="text" class="form-control" name="participante_cpf" id="participante_cpf" placeholder="Digite o CPF" value="<?php echo !empty($participante['participante_cpf']) ? $participante['participante_cpf'] : set_value('participante_cpf') ?>" >
                            
                            <?php if (!empty($errors['participante_cpf'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['participante_cpf'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="participante_dn">Data</label>
                            <input type="text" class="form-control" name="participante_dn" id="participante_dn" placeholder="Digite a Data" value="<?php echo !empty($participante['participante_dn']) ? $participante['participante_dn'] : set_value('participante_dn') ?>" >
                            
                            <?php if (!empty($errors['participante_dn'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['participante_dn'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="participante_telefone">Telefone</label>
                            <input type="text" class="form-control" name="participante_telefone" id="participante_telefone" placeholder="Digite a Telefone" value="<?php echo !empty($participante['participante_telefone']) ? $participante['participante_telefone'] : set_value('participante_telefone') ?>" >
                            
                            <?php if (!empty($errors['participante_telefone'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['participante_telefone'] ?> </div>
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