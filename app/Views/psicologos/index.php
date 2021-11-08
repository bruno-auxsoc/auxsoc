<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Psicólogos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Psicólogos</li>
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


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cadastro de Psicólogos - <?php echo count($psicologos); ?> registro(s) encontrados</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>CRP</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($psicologos as $psicologo) : ?>  
                  <tr>
                    <td><?php echo $psicologo['psicologo_id']; ?></td>
                    <td><?php echo $psicologo['psicologo_nome']; ?></td>
                    <td><?php echo $psicologo['psicologo_crp']; ?></td>
                    <td class="text-center">
                      <?php  echo anchor("psicologo/{$psicologo['psicologo_id']}/editar", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("psicologo/{$psicologo['psicologo_id']}/excluir", 'Excluir', ['class' => 'btn btn-danger btn-sm']); ?>
                    </td>
                    
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>CRP</th>
                  <th>Ações</th>

                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>