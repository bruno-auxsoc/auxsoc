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
  <title>AuxSoc | Dashboard</title>

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
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contato</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url(); ?>/adminlte/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url(); ?>/adminlte/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url(); ?>/adminlte/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
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
            <img src="<?php echo base_url(); ?>/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                  Familias
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

            <div style="border-bottom: 1px solid #4f5962;"></div>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/programa" class="nav-link <?php if ($ativo == "Programa") {
                                                                              echo "text-info";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Programas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/projeto" class="nav-link <?php if ($ativo == "Projeto") {
                                                                            echo "text-info";
                                                                          } else {
                                                                            echo "";
                                                                          } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Projetos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/grupo" class="nav-link <?php if ($ativo == "Grupo") {
                                                                          echo "text-info";
                                                                        } else {
                                                                          echo "";
                                                                        } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Grupos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/participante" class="nav-link <?php if ($ativo == "Participante") {
                                                                                  echo "text-info";
                                                                                } else {
                                                                                  echo "";
                                                                                } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Participantes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/encontro" class="nav-link <?php if ($ativo == "Encontro") {
                                                                              echo "text-info";
                                                                            } else {
                                                                              echo "";
                                                                            } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Encontros</p>
              </a>
            </li>



            <div style="border-bottom: 1px solid #4f5962;"></div>











            <li class="nav-header">Administrador</li>
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
        <b>Versão</b> 21.11.26
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
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