<?= $this->extend('templates/login-template.php') ?>
<?= $this->section('conteudo') ?>

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>AUX</b>SOC</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Acesso ao sistema</p>

            <?php
            
            echo form_open('login/signin');
            ?>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="E-mail" name="usuario_email" id="usuario_email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <?php if (!empty($errors['usuario_email'])) : ?>
                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_email'] ?> </div>
            <?php endif; ?>


            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Senha" name="usuario_senha" id="usuario_senha">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <?php if (!empty($errors['usuario_senha'])) : ?>
                <div class="alert alert-danger mt-2"> <?php echo $errors['usuario_senha'] ?> </div>
            <?php endif; ?>


            <div class="row">

                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
            <?php echo form_close(); ?>
            <?php $erroLogin = session()->getFlashdata('erroLogin'); ?>
            <?php if (!empty($erroLogin)) : ?>
                <div class="alert -alert-danger">
                    <?php echo $erroLogin; ?>
                </div>
            <?php endif; ?>



            <p class="mb-1" style="text-align: right;">
                </br>
                <?php echo anchor('cadastro/esqueci', 'Esqueci a senha') ?>
            </p>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>