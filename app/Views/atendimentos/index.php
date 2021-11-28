<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Atendimentos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Atendimentos</li>
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
            <h3 class="card-title">Cadastro de Atendimentos - <?php echo count($atendimentos); ?> registro(s) encontrados</h3>
            <a href="./atendimento/incluir" class="float-right btn btn-primary btn-sm">Novo atendimento</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Assistente</th>
                  <th>Psicólogo</th>
                  <th>Membro</th>
                  <th>Data</th>
                  <th>Hora</th>
                  <th>Descrição</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($atendimentos as $atendimento) : ?>  
                  <tr>
                    <td class="col-md-1"><?php echo $atendimento['atendimento_id']; ?></td>
                    <td class="col-md-1"><?php echo $atendimento['assistente_id']; ?></td>
                    <td class="col-md-1"><?php echo $atendimento['psicologo_id']; ?></td>
                    <td class="col-md-1"><?php echo $atendimento['membro_id']; ?></td>
                    <td class="col-md-1"><?php echo date_format(date_create($atendimento['atendimento_data']),"d/m/Y"); ?></td>
                    <td class="col-md-1"><?php echo substr($atendimento['atendimento_hora'], 0, 5); ?></td>
                    <td class="col-md-2"><?php echo $atendimento['atendimento_desc']; ?></td>
                    <td class="text-center col-md-1">
                      <?php  echo anchor("atendimento/editar/{$atendimento['atendimento_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("atendimento/excluir/{$atendimento['atendimento_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>
                    
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Assistente</th>
                  <th>Psicólogo</th>
                  <th>Membro</th>
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