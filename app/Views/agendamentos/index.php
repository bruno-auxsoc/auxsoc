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
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Agendamentos</li>
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
            <h3 class="card-title">Cadastro de Agendamentos - <?php echo count($agendamentos); ?> registro(s) encontrados</h3>
            <a href="./agendamento/incluir" class="float-right btn btn-primary btn-sm">Novo Agendamento</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tipo</th>
                  <th>Data</th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th>Solicitante</th>
                  <th>Psicólogo</th>
                  <th>Assistente</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($agendamentos as $agendamento) : ?>  
                  <tr>
                    <td class="col-md-1"><?php echo $agendamento['agendamento_id']; ?></td>
                    <td class="col-md-1"><?php echo $agendamento['agendamento_tipo']; ?></td>
                    <td class="col-md-1"><?php echo $agendamento['agendamento_data']; ?></td>
                    <td class="col-md-2"><?php echo $agendamento['agendamento_desc']; ?></td>
                    <td class="col-md-2"><?php echo $agendamento['agendamento_status']; ?></td>
                    <td class="col-md-1"><?php echo $agendamento['agendamento_solicitante']; ?></td>
                    <td class="col-md-1"><?php echo $agendamento['psicologo_id']; ?></td>
                    <td class="col-md-1"><?php echo $agendamento['assistente_id']; ?></td>
                    <td class="text-center col-md-1">
                      <?php  echo anchor("agendamento/editar/{$agendamento['agendamento_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("agendamento/excluir/{$agendamento['agendamento_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>
                    
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tipo</th>
                  <th>Data</th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th>Solicitante</th>
                  <th>Psicólogo</th>
                  <th>Assistente</th>
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