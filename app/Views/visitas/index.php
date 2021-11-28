<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Visitas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Visitas</li>
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
            <h3 class="card-title">Cadastro de Visitas - <?php echo count($visitas); ?> registro(s) encontrados</h3>
            <a href="./visita/incluir" class="float-right btn btn-primary btn-sm">Nova Visita</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Psicólogo</th>
                  <th>Assistente</th>
                  <th>Família</th>
                  <th>Data</th>
                  <th>Hora</th>
                  <th>Descrição</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($visitas as $visita) : ?>  
                  <tr>
                    <td class="col-md-1"><?php echo $visita['visita_id']; ?></td>
                    <td class="col-md-1"><?php echo $visita['psicologo_nome']; ?></td>
                    <td class="col-md-1"><?php echo $visita['assistente_nome']; ?></td>
                    <td class="col-md-2"><?php echo $visita['familia_responsavel'] . " - " . $visita['familia_bairro']; ?></td>
                    <td class="col-md-1"><?php echo date_format(date_create($visita['visita_data']),"d/m/Y"); ?></td>
                    <td class="col-md-1"><?php echo substr($visita['visita_hora'], 0, 5); ?></td>
                    <td class="col-md-3"><?php echo $visita['visita_desc']; ?></td>
                    <td class="text-center col-md-2">
                      <?php  echo anchor("visita/editar/{$visita['visita_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("visita/excluir/{$visita['visita_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>
                    
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Psicólogo</th>
                  <th>Assistente</th>
                  <th>Família</th>
                  <th>Data</th>
                  <th>Hora</th>
                  <th>Descrição</th>
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