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

                    echo form_open('agendamento/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="agendamento_id" id="agendamento_id" placeholder="" value="<?php echo !empty($agendamento['agendamento_id']) ? $agendamento['agendamento_id'] : set_value('agendamento_id') ?>">
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="agendamento_tipo">Tipo</label>
                                <?php echo form_dropdown('agendamento_tipo', ['' => 'Selecione...', 'Visita' => 'Visita', 'Atendimento' => 'Atendimento'], !empty($agendamento['agendamento_tipo']) ? $agendamento['agendamento_tipo'] : set_value('agendamento_tipo'), ['class' => 'form-control', 'id' => 'agendamento_tipo', 'name' => 'agendamento_tipo']) ?>

                                
                                <?php if (!empty($errors['agendamento_tipo'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_tipo'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="agendamento_desc">Descrição</label>
                                <input type="text" class="form-control" name="agendamento_desc" id="agendamento_desc" placeholder="Digite a descrição" value="<?php echo !empty($agendamento['agendamento_desc']) ? $agendamento['agendamento_desc'] : set_value('agendamento_desc') ?>">

                                <?php if (!empty($errors['agendamento_desc'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_desc'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="agendamento_data">Data</label>
                                <input type="date" class="form-control" name="agendamento_data" id="agendamento_data" placeholder="Digite a data" value="<?php echo !empty($agendamento['agendamento_data']) ? $agendamento['agendamento_data'] : set_value('agendamento_data') ?>">

                                <?php if (!empty($errors['agendamento_data'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_data'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="agendamento_hora">Hora</label>
                                <input type="time" class="form-control" name="agendamento_hora" id="agendamento_hora" placeholder="Digite a hora" value="<?php echo !empty($agendamento['agendamento_hora']) ? $agendamento['agendamento_hora'] : set_value('agendamento_hora') ?>">

                                <?php if (!empty($errors['agendamento_hora'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_hora'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>




                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="agendamento_status">Status</label>
                                <?php echo form_dropdown('agendamento_status', ['Nova Solicitação' => 'Nova Solicitação', 'Confirmada' => 'Confirmada', 'Cancelada' => 'Cancelada'], !empty($agendamento['agendamento_status']) ? $agendamento['agendamento_status'] : set_value('agendamento_status'), ['class' => 'form-control', 'id' => 'agendamento_status', 'name' => 'agendamento_status']) ?>

                                <?php if (!empty($errors['agendamento_status'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_status'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="agendamento_solicitante">Solicitante</label>
                                <input type="text" class="form-control" name="agendamento_solicitante" id="agendamento_solicitante" placeholder="Digite o solicitante" value="<?php echo !empty($agendamento['agendamento_solicitante']) ? $agendamento['agendamento_solicitante'] : set_value('agendamento_solicitante') ?>">

                                <?php if (!empty($errors['agendamento_solicitante'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['agendamento_solicitante'] ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="psicologo_id">Psicólogo</label>
                                <?php echo form_dropdown('psicologo_id', $psicologosDropDown, !empty($agendamento['psicologo_id']) ? $agendamento['psicologo_id'] : set_value('psicologo_id'), ['class' => 'form-control select2', 'id' => 'psicologo_id', 'name' => 'psicologo_id']) ?>

                                <?php if (!empty($errors['psicologo_id'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['psicologo_id'] ?> </div>
                                <?php endif; ?>
                            </div>


                            <div class="form-group col-sm-6">
                                <label for="assistente_id">Assistente</label>
                                <?php echo form_dropdown('assistente_id', $assistentesDropDown, !empty($agendamento['assistente_id']) ? $agendamento['assistente_id'] : set_value('assistente_id'), ['class' => 'form-control select2', 'id' => 'assistente_id', 'name' => 'assistente_id']) ?>

                                <?php if (!empty($errors['assistente_id'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['assistente_id'] ?> </div>
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