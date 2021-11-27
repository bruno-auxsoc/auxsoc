<?= $this->extend('templates/admin-template.php') ?>
<?= $this->section('conteudo') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Paticipantes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Participantes</li>
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
            <h3 class="card-title">Cadastro de Participantes - <?php echo count($participantes); ?> registro(s) encontrados</h3>
            <a href="./participante/incluir" class="float-right btn btn-primary btn-sm">Novo Participante</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data</th>
                  <th>Telefone</th>
                  <th>Ações</th>

                </tr>
              </thead>
              <tbody>

                <?php foreach ($participantes as $participante) : ?>  
                  <tr>
                    <td class="col-md-1"><?php echo $participante['participante_id']; ?></td>
                    <td class="col-md-3"><?php echo $participante['participante_nome']; ?></td>
                    <td class="col-md-2"><?php echo $participante['participante_cpf']; ?></td>
                    <td class="col-md-1"><?php echo $participante['participante_dn']; ?></td>
                    <td class="col-md-2"><?php echo $participante['participante_telefone']; ?></td>
                    <td class="text-center col-md-2">
                      <?php  echo anchor("participante/editar/{$participante['participante_id']}", 'Editar', ['class' => 'btn btn-info btn-sm']); ?>
                      <?php  echo anchor("participante/excluir/{$participante['participante_id']}", 'Excluir', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirma()']); ?>
                    </td>
                  
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data</th>
                  <th>Telefone</th>
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