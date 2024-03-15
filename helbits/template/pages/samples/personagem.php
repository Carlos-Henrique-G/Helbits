<?php
  session_start();
  if(!isset($_SESSION['login'])) {
    header('Location: frmlogin.php?login=semsessao');
  }

  if(isset($_GET['insert'])) {
    if($_GET['insert'] == 'ok') {
      
    }
    if($_GET['erro'] == 'erro'){
      
    }
  }
  if(isset($_GET['login'])) {
    if($_GET['login'] == 'ok') {
      
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helbits</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/custompersonagem.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <link rel="stylesheet" href="css/customstyle.css">
    
  </head>
  <body>
  
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="principal.php"><h1 class="titulo">Helbits</h1></a>
          <a class="sidebar-brand brand-logo-mini" href="principal.php"><h1 class="titulo">H</h1></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" >
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Chzin</h5>
                  <span>do grau</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navegação</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="principal.php">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Início</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-chart-line"></i>
              </span>
              <span class="menu-title">Gerenciar Hábitos</span>
              
            </a>
            
          </li>
          <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Loja</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="personagem.php"><i class="mdi mdi-"></i> Personagens</a></li>
                <li class="nav-item"> <a class="nav-link" href="pets.php">Pets</a></li>
                
              </ul>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Inventário</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-brightness-5"></i>
              </span>
              <span class="menu-title">Configurações</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            
             
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="principal.php"><h1 class="titulo">H</h1></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Pesquisar Hábitos">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Criar Novo Hábito</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Hábitos</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item preview-item" data-toggle="modal" data-target="#modalExemplo" >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Criar bom hábito
                    </div>
                  </a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Quebrar mal hábito</p>
                    </div>
                  </a>
                  
              </li>
              
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Notificações</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" >
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">chzin do grau</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <a class="btn btn-success" href="sair.php">Sair</a>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">
              <div class=" grid-margin stretch-card">
                <div class="card"> 
                  <div class="card-body">
                    <h3 class="card-title">Skins</h3>
                    <div class="grid-container">
                      <div class="item">
                         <div class="card">
                           <img class="card-img-top" src="../../img/skin/s1.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s2.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s3.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s4.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s5.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s6.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s7.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s8.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s9.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s10.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="card">
                           <img class="card-img-top" src="../../img/skin/s11.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s12.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s13.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Irmãos vextre</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s14.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s15.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Cantora</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="#" >
                           <div class="card-body">
                            <h5 class="card-title">Chzin</h5>
                            <p class="card-text">0 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>

                    
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
          

           
          
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Helbits - Gameficando seus hábitos</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- custom JS -->
    
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>