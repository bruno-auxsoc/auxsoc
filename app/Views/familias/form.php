<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Famílias</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/familia">Famílias</a></li>
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
                    

                    echo form_open('familia/salvar');
                    ?>
                    <div class="card-body">
                        <div class="form-group col-sm-6">
                            <input type="hidden" class="form-control" name="familia_id" id="familia_id" placeholder="" value="<?php echo !empty($familia['familia_id']) ? $familia['familia_id'] : set_value('familia_id') ?>">
                        </div>



                        <div class="row">

                            <div class="form-group col-sm-6">
                                <label for="familia_responsavel">Responsável</label>
                                <input type="text" class="form-control" name="familia_responsavel" id="familia_responsavel" placeholder="Digite o nome do responsável" autofocus value="<?php echo !empty($familia['familia_responsavel']) ? $familia['familia_responsavel'] : set_value('familia_responsavel') ?>">

                                <?php if (!empty($errors['familia_responsavel'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_responsavel'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="familia_telefone">Telefone</label>
                                <input type="text" class="form-control" name="familia_telefone" id="familia_telefone" placeholder="Digite o telefone da família" value="<?php echo !empty($familia['familia_telefone']) ? $familia['familia_telefone'] : set_value('familia_telefone') ?>">

                                <?php if (!empty($errors['familia_telefone'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_telefone'] ?> </div>
                                <?php endif; ?>
                            </div>


                        </div>


                        <div class="row">

                            <div class="form-group col-sm-6">
                                <label for="familia_inclusao_paif">Inclusão PAIF</label>
                                <input type="date" class="form-control" name="familia_inclusao_paif" id="familia_inclusao_paif" placeholder="Digite a data" value="<?php echo !empty($familia['familia_inclusao_paif']) ? $familia['familia_inclusao_paif'] : set_value('familia_inclusao_paif') ?>">

                                <?php if (!empty($errors['familia_inclusao_paif'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_inclusao_paif'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="familia_exclusao_paif">Exclusão PAIF</label>
                                <input type="date" class="form-control" name="familia_exclusao_paif" id="familia_exclusao_paif" placeholder="Digite a data" value="<?php echo !empty($familia['familia_exclusao_paif']) ? $familia['familia_exclusao_paif'] : set_value('familia_exclusao_paif') ?>">

                                <?php if (!empty($errors['familia_exclusao_paif'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_exclusao_paif'] ?> </div>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="form-group col-sm-6">
                                <label for="familia_endereco">Endereço</label>
                                <input type="text" class="form-control" name="familia_endereco" id="familia_endereco" placeholder="Digite o endereço" value="<?php echo !empty($familia['familia_endereco']) ? $familia['familia_endereco'] : set_value('familia_endereco') ?>">

                                <?php if (!empty($errors['familia_endereco'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_endereco'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="familia_nro">Nº</label>
                                <input type="text" class="form-control" name="familia_nro" id="familia_nro" placeholder="Digite o Nº" value="<?php echo !empty($familia['familia_nro']) ? $familia['familia_nro'] : set_value('familia_nro') ?>">

                                <?php if (!empty($errors['familia_nro'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_nro'] ?> </div>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="form-group col-sm-6">
                                <label for="familia_complemento">Complemento</label>
                                <input type="text" class="form-control" name="familia_complemento" id="familia_complemento" placeholder="Digite o complemento" value="<?php echo !empty($familia['familia_complemento']) ? $familia['familia_complemento'] : set_value('familia_complemento') ?>">

                                <?php if (!empty($errors['familia_complemento'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_complemento'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="familia_bairro">Bairro</label>
                                <input type="text" class="form-control" name="familia_bairro" id="familia_bairro" placeholder="Digite o bairro" value="<?php echo !empty($familia['familia_bairro']) ? $familia['familia_bairro'] : set_value('familia_bairro') ?>">

                                <?php if (!empty($errors['familia_bairro'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_bairro'] ?> </div>
                                <?php endif; ?>
                            </div>

                        </div>


                        <div class="row">
                            
                            <div class="form-group col-sm-6">
                                <label for="familia_cidade">Cidade</label>
                                <input type="text" class="form-control" name="familia_cidade" id="familia_cidade" placeholder="Digite a cidade" value="<?php echo !empty($familia['familia_cidade']) ? $familia['familia_cidade'] : set_value('familia_cidade') ?>">

                                <?php if (!empty($errors['familia_cidade'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_cidade'] ?> </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="familia_estado">Estado</label>
                                <input type="text" class="form-control" name="familia_estado" id="familia_estado" placeholder="Digite o estado" value="<?php echo !empty($familia['familia_estado']) ? $familia['familia_estado'] : set_value('familia_estado') ?>">

                                <?php if (!empty($errors['familia_estado'])) : ?>
                                    <div class="alert alert-danger mt-2"> <?php echo $errors['familia_estado'] ?> </div>
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