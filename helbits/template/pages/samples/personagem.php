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
    <link rel="stylesheet" href="css/custompersonagemmodal.css">
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
    <style>
       @media (min-width: 992px){
      .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
        background-color:#f5f5f5;
      }
      .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link{
        background-color:#ffffff;
        color:black;
      }
      .sidebar-icon-only .sidebar .nav.sub-menu{
        background-color:#ffffff;
      }
      .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse{
        background-color:#ffffff;
      }
      .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link:before {
        background-color:transparent;
      }
      
      .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link{
        padding:10px;
      }

    }
    .drop-habits{
      background-color:#f5f5f5;
      color:black;
    }
    .paragrafo{
      color:black;
    }
    .div-do-paragrafo:hover{
      background-color:rgb(230, 230, 230);
    }
    .sair{
      margin-left:33%;
    }
    </style> 
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
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION['nomeusuario']; ?></h5>
                  
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
                <li class="nav-item"> <a class="nav-link" href="personagem.php"><i class="mdi mdi-account-switch"></i>Personagens</a></li>
            <li class="nav-item"> <a class="nav-link" href="pets.php" ><i class="mdi mdi-cat"> </i>Pets</a></li>
                
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
            
            <ul class="navbar-nav navbar-nav-right">
              
              
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-success"></span>
                </a>
               
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notificações</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="#">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Eventos de hoje</p>
                      <p class="text-muted ellipsis mb-0">Apenas lembrando das suas atividades</p>
                    </div>
                  </a>
                  
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['nomeusuario']; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list drop-habits" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item div-do-paragrafo">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content paragrafo">
                      <p class="preview-subject mb-1 ">Configurações</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item div-do-paragrafo" href="sair.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content paragrafo">
                    <p class="preview-subject mb-1" >Sair</p>
                    </div>
                  </a>

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
                            <h5 class="card-title">Angelisis</h5>
                            <p class="card-text">1000 moedas</p>
                            <!-- Small modal -->
                           <?php   // Ler o conteúdo do arquivo conteudo.php
        $conteudo = file_get_contents('modal.php');

        // Usar uma expressão regular para encontrar o div com o ID "meuDiv"
        preg_match('/<div id="modal1">(.*?)<\/div>/s', $conteudo, $matches);

        // Exibir o conteúdo do div encontrado
        echo $matches[0]; ?>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s2.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Kinaiti</h5>
                            <p class="card-text">1000 moedas</p>
                            <!-- Small modal -->
                            <?php   // Ler o conteúdo do arquivo conteudo.php
        $conteudo = file_get_contents('modal.php');

        // Usar uma expressão regular para encontrar o div com o ID "meuDiv"
        preg_match('/<div id="modal2">(.*?)<\/div>/s', $conteudo, $matches);

        // Exibir o conteúdo do div encontrado
        echo $matches[0]; ?>
                            </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s4.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Serventia</h5>
                            <p class="card-text">1000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s3.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Violonelo</h5>
                            <p class="card-text">1100 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s5.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Dwleyer</h5>
                            <p class="card-text">2100 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s6.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Sheevah</h5>
                            <p class="card-text">2200 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s7.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Tarmiel Cap</h5>
                            <p class="card-text">2200 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s19.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Axelbolt</h5>
                            <p class="card-text">2300 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s8.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Menin White</h5>
                            <p class="card-text">2500 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s9.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Fishit</h5>
                            <p class="card-text">4000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s10.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Itenias</h5>
                            <p class="card-text">5000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s12.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">You</h5>
                            <p class="card-text">5000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="card">
                           <img class="card-img-top" src="../../img/skin/s11.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">3Dwitch</h5>
                            <p class="card-text">5100 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s13.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Irmãos vextre</h5>
                            <p class="card-text">7000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s16.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Samsara</h5>
                            <p class="card-text">7000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s14.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Díodor</h5>
                            <p class="card-text">7300 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s15.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Virgin</h5>
                            <p class="card-text">7400 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s18.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Tramper</h5>
                            <p class="card-text">8000 moedas</p>
                            <a class="btn btn-success">Visualizar</a>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                        <div class="card">
                           <img class="card-img-top" src="../../img/skin/s17.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Hell's Dream</h5>
                            <p class="card-text">8444 moedas</p>
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
    <script src="js2/popup.js"></script>
    <!-- custom JS -->
    
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>