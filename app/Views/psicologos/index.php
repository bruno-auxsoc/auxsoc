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
                <h3 class="card-title">Cadastro de Psicólogos</h3>
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
                  <tr>
                    <td>1</td>
                    <td>ADAIL FERREIRA MACEDO</td>
                    <td>11325</td>
                    <td> Editar | Excluir </td>
                    
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>AÇUCENA MARIA FERES PATRICIO</td>
                    <td>10208</td>
                    <td> Editar | Excluir </td>
                    
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ABILIO DA COSTA ROSA</td>
                    <td>6310</td>
                    <td> Editar | Excluir </td>
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ABEL MARCOS GUEDES</td>
                    <td>77814</td>
                    <td> Editar | Excluir </td>
                    
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>ACÁCIO JOSÉ DOS SANTOS LEAL</td>
                    <td>56669</td>
                    <td> Editar | Excluir </td>
                  
                  </tr>
                  
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