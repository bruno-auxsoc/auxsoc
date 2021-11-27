<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projetos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/projeto">Projetos</a></li>
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
                    echo form_open('projeto/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="projeto_id" id="projeto_id" placeholder="" value="<?php echo !empty($projeto['projeto_id']) ? $projeto['projeto_id'] : set_value('projeto_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="projeto_nome">Nome</label>
                            <input type="text" class="form-control" name="projeto_nome" id="projeto_nome" placeholder="Digite o nome" autofocus value="<?php echo !empty($projeto['projeto_nome']) ? $projeto['projeto_nome'] : set_value('projeto_nome') ?>" >

                            <?php if (!empty($errors['projeto_nome'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['projeto_nome'] ?> </div>
                            <?php endif; ?>
                        </div>


                        <div class="form-group col-sm-6">
                            <label for="projeto_desc">Descrição</label>
                            <input type="text" class="form-control" name="projeto_desc" id="projeto_desc" placeholder="Digite a descrição"  value="<?php echo !empty($projeto['projeto_desc']) ? $projeto['projeto_desc'] : set_value('projeto_desc') ?>" >

                            <?php if (!empty($errors['projeto_desc'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['projeto_desc'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="projeto_publico_desc">Público</label>
                            <input type="text" class="form-control" name="projeto_publico_desc" id="projeto_publico_desc" placeholder="Digite a descrição do público"  value="<?php echo !empty($projeto['projeto_publico_desc']) ? $projeto['projeto_publico_desc'] : set_value('projeto_publico_desc') ?>" >

                            <?php if (!empty($errors['projeto_publico_desc'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['projeto_publico_desc'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="projeto_orientador">Orientador</label>
                            <input type="text" class="form-control" name="projeto_orientador" id="projeto_orientador" placeholder="Digite o nome do orientador"  value="<?php echo !empty($projeto['projeto_orientador']) ? $projeto['projeto_orientador'] : set_value('projeto_orientador') ?>" >

                            <?php if (!empty($errors['projeto_orientador'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['projeto_orientador'] ?> </div>
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