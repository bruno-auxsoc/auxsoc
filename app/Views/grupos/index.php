<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Grupos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Grupos</li>
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
            <h3 class="card-title">Cadastro de Grupos - <?php echo count($grupos); ?> registro(s) encontrados</h3>
            <a href="./grupo/incluir" class="float-right btn btn-primary btn-sm">Novo Grupo</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Projeto</th>
                  <th>Nome</th>
                  <th>Periodo</th>
                  <th>Max. Pessoas</th>
                  <th>Nº Encontros</th>
                  <th>Oficineiro</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($grupos as $grupo) : ?>
                  <tr>
                    <td class="col-md-1"><?php echo $grupo['grupo_id']; ?></td>
                    <td class="col-md-1"><?php echo $grupo['projeto_nome']; ?></td>
                    <td class="col-md-2"><?php echo $grupo['grupo_nome']; ?></td>
                    <td class="col-md-2"><?php echo $grupo['grupo_periodo']; ?></td>
                    <td class="col-md-1"><?php echo $grupo['grupo_max_pessoas']; ?></td>
                    <td class="col-md-1"><?php echo $grupo['grupo_nro_encontros']; ?></td>
                    <td class="col-md-2"><?php echo $grupo['grupo_oficineiro']; ?></td>
                    <td class="text-center col-md-2">
                      <?php echo anchor("grupo/editar/{$grupo['grupo_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php echo anchor("grupo/excluir/{$grupo['grupo_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>

                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Projeto</th>
                  <th>Nome</th>
                  <th>Periodo</th>
                  <th>Max. Pessoas</th>
                  <th>Nº Encontros</th>
                  <th>Oficineiro</th>
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


<script>
  function confirma() {
    if (!confirm("Deseja excluir o registro?")) {
      return false;
    } else {
      return true;
    }
  }
</script>

<?= $this->endSection() ?>