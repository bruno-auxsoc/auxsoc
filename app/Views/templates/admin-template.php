<?php

$router = \Config\Services::router();
// $_method = $router->methodName();
$_controller = $router->controllerName();

// busca a url do controller atual
$url = $_controller;

// separa o nome do controller
$pagina = explode("\App\Controllers\\", $url);

// seta a página ativa
$ativo = $pagina[1];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AuxSoc | <?php echo $ativo; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/adminlte/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/summernote/summernote-bs4.min.css">


  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">






</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(); ?>/adminlte/img/AdminLTELogo.png" alt="<?php echo base_url(); ?>/adminlteLogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url(); ?>/dashboard" class="nav-link">Dashboard</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contato</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">




        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url(); ?>/adminlte/img/AdminLTELogo.png" alt="<?php echo base_url(); ?>/adminlte Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AUXSOC</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?>/adminlte/img/bruno.png" class="img-circle elevation-2" alt="Bruno Moura">
          </div>
          <div class="info">
            <a href="#" class="d-block">Bruno Moura</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->


            <li class="nav-header">Menu</li>

            <li class="nav-item">

              <a href="<?php echo base_url(); ?>/dashboard" class="nav-link <?php if ($ativo == "Dashboard") {
                                                                              echo "active";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/familia" class="nav-link <?php if ($ativo == "Familia") {
                                                                            echo "active";
                                                                          } else {
                                                                            echo "";
                                                                          } ?>">
                <i class="nav-icon fa fa-users"></i>

                <p>
                  Famílias
                </p>
              </a>
            </li>




            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/psicologo" class="nav-link <?php if ($ativo == "Psicologo") {
                                                                              echo "active";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="nav-icon fa fa-user-md"></i>

                <p>
                  Psicólogos
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/assistente" class="nav-link <?php if ($ativo == "Assistente") {
                                                                                echo "active";
                                                                              } else {
                                                                                echo "";
                                                                              } ?>">
                <i class="nav-icon fa fa-user-md"></i>

                <p>
                  Assistentes
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/agendamento" class="nav-link <?php if ($ativo == "Agendamento") {
                                                                                echo "active";
                                                                              } else {
                                                                                echo "";
                                                                              } ?>">
                <i class="nav-icon fa fa-calendar"></i>

                <p>
                  Agendamentos
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/visita" class="nav-link <?php if ($ativo == "Visita") {
                                                                            echo "active";
                                                                          } else {
                                                                            echo "";
                                                                          } ?>">
                <i class="nav-icon fa fa-car"></i>

                <p>
                  Visitas
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/atendimento" class="nav-link <?php if ($ativo == "Atendimento") {
                                                                                echo "active";
                                                                              } else {
                                                                                echo "";
                                                                              } ?>">
                <i class="nav-icon fa fa-list"></i>

                <p>
                  Atendimentos
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/encaminhamento" class="nav-link <?php if ($ativo == "Encaminhamento") {
                                                                                    echo "active";
                                                                                  } else {
                                                                                    echo "";
                                                                                  } ?>">
                <i class="nav-icon fa fa-share"></i>

                <p>
                  Encaminhamentos
                </p>
              </a>
            </li>




            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/programa" class="nav-link <?php if ($ativo == "Programa") {
                                                                              echo "active";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Programas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/projeto" class="nav-link <?php if ($ativo == "Projeto") {
                                                                            echo "active";
                                                                          } else {
                                                                            echo "";
                                                                          } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Projetos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/grupo" class="nav-link <?php if ($ativo == "Grupo") {
                                                                          echo "active";
                                                                        } else {
                                                                          echo "";
                                                                        } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Grupos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/participante" class="nav-link <?php if ($ativo == "Participante") {
                                                                                  echo "active";
                                                                                } else {
                                                                                  echo "";
                                                                                } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Participantes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/encontro" class="nav-link <?php if ($ativo == "Encontro") {
                                                                              echo "active";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Encontros</p>
              </a>
            </li>











          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?= $this->renderSection('conteudo') ?>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="https://auxsoc.com.br">AuxSoc - Sistema para gestão de Assistência Social</a>.</strong>
      Todos os direitos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 21.11.28
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->



      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Menu Administrador</li>
          <hr class="mb-2" />
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/usuario" class="nav-link <?php if ($ativo == "Usuario") {
                                                                          echo "text-danger";
                                                                        } else {
                                                                          echo "";
                                                                        } ?>">
              <i class="nav-icon far fa-circle"></i>
              <p class="text">Usuários</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/grupousuario" class="nav-link <?php if ($ativo == "GrupoUsuario") {
                                                                                echo "text-danger";
                                                                              } else {
                                                                                echo "";
                                                                              } ?>">
              <i class="nav-icon far fa-circle"></i>
              <p class="text">Grupos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/grupoacesso" class="nav-link <?php if ($ativo == "GrupoAcesso") {
                                                                              echo "text-danger";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
              <i class="nav-icon far fa-circle"></i>
              <p class="text">Permissões</p>
            </a>
          </li>



        </ul>
      </nav>







    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <!-- ChartJS -->
  <script src="<?php echo base_url(); ?>/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url(); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url(); ?>/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url(); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/adminlte/js/adminlte.js"></script>




  <!-- Select2 -->
  <script src="../../plugins/select2/js/select2.full.min.js"></script>


  <!-- Datatables script especifico para pagina -->
  <script>
    $(function() {

      //Initialize Select2 Elements
      $('.select2').select2()


      $("#example1").DataTable({

        "responsive": true,
        "searching": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
          "url": "<?php echo base_url(); ?>/plugins/datatables-pt-BR.json"
        },
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
  </script>



</body>

</html>