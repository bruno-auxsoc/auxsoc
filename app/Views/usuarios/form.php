<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Usuários</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/usuario">Usuários</a></li>
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

                    echo form_open('usuario/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="usuario_id" id="usuario_id" placeholder="" value="<?php echo !empty($usuario['usuario_id']) ? $usuario['usuario_id'] : set_value('usuario_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="usuario_nome">Nome</label>
                            <input type="text" class="form-control" name="usuario_nome" id="usuario_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($usuario['usuario_nome']) ? $usuario['usuario_nome'] : set_value('usuario_nome') ?>">

                            <?php if (!empty($errors['usuario_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_nome'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="usuario_email">E-mail</label>
                            <input type="text" class="form-control" name="usuario_email" id="usuario_email" placeholder="Digite o E-mail" value="<?php echo !empty($usuario['usuario_email']) ? $usuario['usuario_email'] : set_value('usuario_email') ?>">

                            <?php if (!empty($errors['usuario_email'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_email'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="usuario_senha">Senha</label>
                            <input type="password" class="form-control" name="usuario_senha" id="usuario_senha" placeholder="Digite a senha" value="<?php echo !empty($usuario['usuario_senha']) ? $usuario['usuario_senha'] : set_value('usuario_senha') ?>">

                            <?php if (!empty($errors['usuario_senha'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_senha'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="grupo_id">Senha</label>
                            <input type="password" class="form-control" name="usuario_senha" id="usuario_senha" placeholder="Digite a senha" value="<?php echo !empty($usuario['usuario_senha']) ? $usuario['usuario_senha'] : set_value('usuario_senha') ?>">

                            <?php if (!empty($errors['usuario_senha'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_senha'] ?> </div>
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