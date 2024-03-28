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
    /* CSS personalizado para mudar a cor do fundo do modal */
    .custom-modal .modal-content {
      background-color:  whitesmoke; /* Cor de fundo desejada */
    }
    .add-items input[type="text"] {
      background:#ffffff;
    }
    .modal-title{
      color:black;
    }
    .desc-habit{
      width:100%;
      height:100%;
      margin:auto;
    }
    .subtitle-modal{color:#000000}
    .form-control{color:black}
    
   
    @media screen and (max-width:500px) {
      .jogo-img{
        height:75px;
        width:75px;
        margin-bottom:10%;
      }
      .info{
        margin-bottom:10%;
        margin-left:10px;
      }
      .game-row{height:75px;}
    }
    @media screen and (min-width:501px ) {
      .jogo-img{
        height:100px;
        width:100px;
      }
      .game-row{height:100px;}
      .info{
        
        margin-left:10px;
      }
    }
    @media screen and (min-width:1000px ) {
      .jogo-img{
        height:120px;
        width:120px;
        margin-bottom:10%;
      }
      .game-row{
        height:170px;
        
      }
      .info{
        margin-bottom:10%;
        margin-left:10px;
      }
      .game{height:80%;}
      .atividades{margin-top:-2%;}
    }
    .drop-habits{
      background-color:whitesmoke;
      color:black;
    }
    .paragrafo{
      color:black;
    }
    .div-do-paragrafo:hover{
      background-color:lightgrey;
    }
    .sair{
      margin-left:33%;
    }
    .table{
        color:#000000;
    }
    .table thead th{
        color:#000000;
    }
  
  </style>
  </head>
  <body>
  <form action="habitos.php" method="POST">
  <div class="modal-background">
  <div class="modal fade custom-modal" id="modal-bom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="fundo-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo hábito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <label class="subtitle-modal">Nome</label>
                        <div class="add-items d-flex">
                          <input type="text" class="form-control" name="nomehabito" id="nomehabito" placeholder="Adicione tarefas">
                          <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                        </div>
                <label class="subtitle-modal">Descrição</label>
              <textarea class="desc-habit"name="habitodesc" id="habitodesc" cols="28" rows="5"></textarea>
            
      </div>
  </form>

    </div>
  </div>
  
</div>
</div>
<form action="habitos.php" method="POST">
<div class="modal-background">
  <div class="modal fade custom-modal" id="modal-mal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="fundo-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quebrar hábito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <label class="subtitle-modal">Nome</label>
            <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="Adicione tarefas">
                            <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                          </div>
                  <label class="subtitle-modal">Descrição</label>
                <textarea class="desc-habit" name="desc" id="desc" cols="28" rows="5"></textarea>
              
            </div>
      </form>

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
          <a class="nav-link" href="gerenciarhabitos.php">
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
                <li class="nav-item"> <a class="nav-link" href="personagem.php">Personagens</a></li>
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
            
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown ">
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
                      <p class="text-muted ellipsis mb-0"> Apenas lembrando das suas atividades</p>
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
                      <p class="preview-subject mb-1">Configurações</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item div-do-paragrafo" href="sair.php">
                    <div class="preview-thumbnail ">
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
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card"> 
                    <div class="card-body">
                    <h3 class="card-title">Seu Inventário</h3>
                   
                    
                    
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
    
    <!-- custom JS -->
    
    <!-- endinject -->
    <!-- Custom js and php for this page -->

    <?php
        include('./conexaocombanco/banco.php');

        if(isset($_GET['insert_habito'])) {
          if($_GET['insert_habito'] == 'ok') {
              $codusu = $_SESSION['cod_usu'];
              $sql = "select  nome from tbhabitos where cod_usu = $codusu 
                      order by cod_hab desc limit 1;";

              $consulta = $conexao->query($sql);

              if($consulta -> num_rows > 0) {
                $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                $novohabito = $linha['nome']; 
              }

          }
        }
    ?>
    
    <script>
    (function($) {
  'use strict';
  $(function() {
    var todoListItem = $('.todo-list');
    var todoListInput = $('.todo-list-input');

    var item = '<?php echo $novohabito; ?>';

    if (item) {
      todoListItem.append("<li><div class='form-check'><label class='form-check-label'><input class='checkbox' type='checkbox'/>" + item + "<i class='input-helper'></i></label></div><i class='remove mdi mdi-close-circle-outline'></i></li>");
      todoListInput.val("");
    }

    todoListItem.on('change', '.checkbox', function() {
      if ($(this).attr('checked')) {
        $(this).removeAttr('checked');
      } else {
        $(this).attr('checked', 'checked');
      }

      $(this).closest("li").toggleClass('completed');

    });

    todoListItem.on('click', '.remove', function() {
      $(this).parent().remove();
    });

  });
})(jQuery);
</script>
    <!-- End custom js for this page -->
    
  </body>
</html>