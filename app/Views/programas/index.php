<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Programas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Programas</li>
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
            <h3 class="card-title">Cadastro de Programas - <?php echo count($programas); ?> registro(s) encontrados</h3>
            <a href="./programa/incluir" class="float-right btn btn-primary btn-sm">Novo Programa</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($programas as $programa) : ?>  
                  <tr>
                    <td class="col-md-1"><?php echo $programa['programa_id']; ?></td>
                    <td class="col-md-6"><?php echo $programa['programa_nome']; ?></td>
                    <td class="text-center col-md-2">
                      <?php  echo anchor("programa/editar/{$programa['programa_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("programa/excluir/{$programa['programa_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>
                    
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
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
  function confirma(){
    if(!confirm("Deseja excluir o registro?")){
      return false;
    }
    else{
      return true;
    }
  }
</script>

<?= $this->endSection() ?>