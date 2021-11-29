<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Encaminhamentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/encaminhamento">Encaminhamentos</a></li>
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
                    echo form_open('encaminhamento/salvar');
                    ?>
                    <div class="card-body">

                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="encaminhamento_id" id="encaminhamento_id" placeholder="" value="<?php echo !empty($encaminhamento['encaminhamento_id']) ? $encaminhamento['encaminhamento_id'] : set_value('encaminhamento_id') ?>">
                        </div>


                        <div class="form-group col-sm-6">
                            <label for="atendimento_id">Atendimento ID</label>
                            <?php echo form_dropdown('atendimento_id', $atendimentosDropDown, !empty($encaminhamento['atendimento_id']) ? $encaminhamento['atendimento_id'] : set_value('atendimento_id'), ['class' => 'form-control select2', 'id' => 'atendimento_id', 'name' => 'atendimento_id']) ?>

                            <?php if (!empty($errors['atendimento_id'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['atendimento_id'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="encaminhamento_tipo">Tipo</label>
                            <input type="text" class="form-control" name="encaminhamento_tipo" id="encaminhamento_tipo" placeholder="Digite o tipo" value="<?php echo !empty($encaminhamento['encaminhamento_tipo']) ? $encaminhamento['encaminhamento_tipo'] : set_value('encaminhamento_tipo') ?>">

                            <?php if (!empty($errors['encaminhamento_tipo'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['encaminhamento_tipo'] ?> </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="encaminhamento_desc">Descrição</label>
                            <input type="text" class="form-control" name="encaminhamento_desc" id="encaminhamento_desc" placeholder="Digite a descrição" value="<?php echo !empty($encaminhamento['encaminhamento_desc']) ? $encaminhamento['encaminhamento_desc'] : set_value('encaminhamento_desc') ?>">

                            <?php if (!empty($errors['encaminhamento_desc'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['encaminhamento_desc'] ?> </div>
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