<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">



                <div class="alert alert-success">
                    <h4 class="alert-heading">Sucesso</h4>
                    <hr>
                    <p class="mb-0"><?php echo isset($mensagem) ? $mensagem: 'Erro desconhecido' ?> </p>
                </div>
                <p><?php echo $link; ?>




            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->




<?= $this->endSection() ?>