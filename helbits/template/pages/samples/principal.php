<?php
  session_start();
  if(!isset($_SESSION['login'])) {
    header('Location: frmlogin.php?login=semsessao');
  }

  if(isset($_GET['insert'])) {
    if($_GET['insert'] == 'ok') {
    }
    if($_GET['insert'] == 'erro'){

    }
  }
  if(isset($_GET['login'])) {
    if($_GET['login'] == 'ok') {
      
    }
  }
   
  include('./conexaocombanco/banco.php');

  $cod_usu = $_SESSION['cod_usu'];
  $sql_nome_usuario = "select nome from tbusuarios
                  where cod_usu = '$cod_usu'";

  $consulta_nome = $conexao->query($sql_nome_usuario);

  if($consulta_nome -> num_rows > 0) {
    $linha = $consulta_nome -> fetch_array(MYSQLI_ASSOC);
    
    $_SESSION['nomeusuario'] = $linha['nome'];
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
    
   
    @media screen and (max-width:640px) {
      .jogo-img{
        height:75px;
        width:75px;
        margin-bottom:20%;
        
      }
      .info{
        margin-bottom:10%;
        
        
      }
      .game-row{height:80px;}
      .progress{width:50%;}
      
    }
    @media screen and (min-width:641px ) {
      .jogo-img{
        height:100px;
        width:100px;
        margin-bottom:10%;
      }
      .game-row{height:150px;}
      .info{
        
        
        margin-bottom:10%;
      }
      .game{
        height:80%;
         
      }
      .atividades{margin-top:-2%;}
      .progress{width:80%;}
    }
    @media screen and (min-width:1200px ) {
      .jogo{
        margin-right:10px;
      }
      .jogo-img{
        height:120px;
        width:120px;
        
      }
      .game-row{
        height:170px;
        
      }
      .info{
        margin-bottom:15%;
        
        
      }
      .game{
        height:80%;
           
      }
      
      .atividades{margin-top:-2%;}
      .progress{width:100%;}
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
  
    .list-wrapper a.remove:hover{
      color:black !important;
    }
    @media screen and (min-width:1600px ) {
      .jogo-img{
        height:170px;
        width:170px;
        
      }
      .game-row{
        height:220px;
        
      }
      .info{
        margin-bottom:15%;
        
        
      }
      .game{
        height:80%;
           
      }
      .jogo{
     
      margin-right:-5%;
    }
      .atividades{margin-top:-2%;}
      .progress{width:100%;}
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
  
    .list-wrapper a.remove:hover{
      color:black !important;
    }
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
    .jogo-img{
      position:absolute;
      
    }
    .jogo{
      margin-bottom:22%;
      margin-right:-5%;
    }
  
    

  
  </style>
  </head>
  <body>
  <form action="bonshabitos.php" method="POST">
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
      <form action="maushabitos.php" method="POST">
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
        
            <label class="subtitle-modal">Nome</label>
            <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="Adicione tarefas" name="nomehabito" id="nomehabito">
                            <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                          </div>
                  <label class="subtitle-modal">Descrição</label>
                <textarea class="desc-habit" name="habitodesc" id="habitodesc" cols="28" rows="5"></textarea>
              
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
                  <img class="img-xs rounded-circle " src="../../img/skin/s<?php 
                  if(isset($_SESSION['skin_equipada'])){
                  echo$_SESSION['skin_equipada'];}
                  else{echo 1;}
                  ?>.jpeg" alt="">
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
                <li class="nav-item"> <a class="nav-link" href="personagem.php"><i class="mdi mdi-account-switch"></i>Personagens</a></li>
            <li class="nav-item"> <a class="nav-link" href="pets.php" ><i class="mdi mdi-cat"> </i>Pets</a></li>
                
              </ul>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="inventario.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Inventário</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="configuracoes.php">
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
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Criar Novo Hábito</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list drop-habits" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Hábitos</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item preview-item div-do-paragrafo" data-toggle="modal" data-target="#modal-bom" >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content ">
                      <p class="preview-subject ellipsis mb-1 paragrafo">Criar bom hábito
                    </div>
                  </a>
                  
                  <div class="dropdown-divider">
                    
                  </div>
                  <a class="dropdown-item preview-item div-do-paragrafo" data-toggle="modal" data-target="#modal-mal">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content ">
                      <p class="preview-subject ellipsis mb-1 paragrafo">Quebrar mal hábito</p>
                    </div>
                  </a>
                  
              </li>
              
              <li class="nav-item dropdown border-left">
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
                  <img class="img-xs rounded-circle " src="../../img/skin/s<?php 
                  if(isset($_SESSION['skin_equipada'])){
                  echo$_SESSION['skin_equipada'];}
                  else{echo 1;}
                  ?>.jpeg" alt="">
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
              <div class="col-md-12  grid-margin stretch-card">
                <div class="card game"> 
                    <div class="card-body">
                    <div class="row game-row align-items-center">
                       <div class="jogo col-3 col-1 col-xl-3 pl-2">
                          <img class="jogo-img img-1"src="gamebackground_resized_resized_resized.jpg" alt="" srcset="">
                          <img class="jogo-img img-2"src="../../img/skin/s<?php 
                  if(isset($_SESSION['skin_equipada'])){
                  echo$_SESSION['skin_equipada'];}
                  else{echo 1;}
                  ?>-removebg-preview.png" alt="" srcset="">
                        </div>
                        
                        <div class="info col-9 col-xl-3 pl-0">
                        <div class = "status">
                         
                          <span class="menu-icon">
                             <i class="mdi mdi-coin icon-item"></i>
                          </span>
                          <span class="card-title">Moedas:<?php echo $_SESSION['dinheiro']?> </span>
                        </div>
                        <div class = "status">
                          
                          
                        </div>
                        <div class = "status_xp">
                          <span class="menu-icon">
                             <i class="mdi mdi-coin"></i>
                          </span>
                          
                            <span class="card-title">Nível: <?php echo$_SESSION['lvl']?>
                                  
                                </span>
                          </div>
                        <div class = "status_xp">
                          <span class="menu-icon">
                             <i class="mdi mdi-coin"></i>
                          </span>
                          
                            <span class="card-title">XP(<?php echo$_SESSION['xp']- 100*$_SESSION['lvl']?>/100)<div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo$_SESSION['xp']- 100*$_SESSION['lvl']?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></span>
                          </div>
                        </div>
                        
                    
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-md-4 grid-margin stretch-card">
                <div class="card atividades">
                  <div class="card-body">
                    <h4 class="card-title">Atividades</h4>

                    <form action="calcularsoma.php" method="post">

                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        
                      <?php
                        $codusu_habitos = $_SESSION['cod_usu'];
                        $sql_habitos_usu = "select * from tbhabitos
                                            where cod_usu = $codusu_habitos
                                            order by cod_hab asc;";

                        $consulta_habitos = $conexao->query($sql_habitos_usu);                  

                        $_SESSION['habitosids'] = [];

                        if($consulta_habitos -> num_rows > 0) {
                          while($linha_habitos = $consulta_habitos->fetch_array(MYSQLI_ASSOC)){
                            
                            array_push($_SESSION['habitosids'], $linha_habitos['cod_hab']);
                            if($linha_habitos['status']== 'SIM'){
                              echo "<li><div class='form-check'><label class='form-check-label'><input class='checkbox' checked disabled type='checkbox' name='inputs[]' value='".$linha_habitos['cod_hab']."' />". $linha_habitos['nome'] ."<i class='input-helper'></i></label></div><a href='excluirhabito.php?id=".$linha_habitos['cod_hab']."'<i class='remove mdi mdi-close-circle-outline'></i></a></li>";
                            }else{
                            echo "<li><div class='form-check'><label class='form-check-label'><input class='checkbox'  type='checkbox' name='inputs[]' value='".$linha_habitos['cod_hab']."' />". $linha_habitos['nome'] ."<i class='input-helper'></i></label></div><a href='excluirhabito.php?id=".$linha_habitos['cod_hab']."'<i class='remove mdi mdi-close-circle-outline'></i></a></li>";
                            }
                           
                          } 
                        }
                        
                      ?>
                      
                      </ul>
                      
                    </div>
                    <button type="submit" class="btn btn-primary">confirmar</button>
                    </form>
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