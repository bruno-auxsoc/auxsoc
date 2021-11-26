<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Agendamentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/agendamento">Agendamentos</a></li>
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
                    echo form_open('agendamento/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="agendamento_id" id="agendamento_id" placeholder="" value="<?php echo !empty($agendamento['agendamento_id']) ? $agendamento['agendamento_id'] : set_value('agendamento_id') ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="agendamento_tipo">Tipo</label>
                            <input type="text" class="form-control" name="agendamento_tipo" id="agendamento_tipo" placeholder="Digite o tipo" autofocus value="<?php echo !empty($agendamento['agendamento_tipo']) ? $agendamento['agendamento_tipo'] : set_value('agendamento_tipo') ?>">

                            <?php if (!empty($errors['agendamento_tipo'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_tipo'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="agendamento_data">Data</label>
                            <input type="datepicker" class="form-control" name="agendamento_data" id="agendamento_data" placeholder="Digite a data" value="<?php echo !empty($agendamento['agendamento_data']) ? $agendamento['agendamento_data'] : set_value('agendamento_data') ?>">

                            <?php if (!empty($errors['agendamento_data'])) : ?>
                                <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_data'] ?> </div>
                            <?php endif; ?>
                        </div>


                        <div style="overflow:hidden;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="datetimepicker12"></div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function() {
                                    $('#datetimepicker12').datetimepicker({
                                        inline: true,
                                        sideBySide: true
                                    });
                                });
                            </script>
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