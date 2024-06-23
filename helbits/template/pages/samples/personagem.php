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
   
    
    @media screen and (max-width:500px) {
      .cardResponsivo{
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      
      gap: 20px; /* Espaçamento entre os itens */
      padding: 5px; }
      
    }
    @media screen and (max-width:1099px) {
      .cardResponsivo{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    
      gap: 20px; /* Espaçamento entre os itens */
      padding: 5px; }

    }

    @media screen and (min-width:501px ) {
      .cardResponsivo{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    
      gap: 20px; /* Espaçamento entre os itens */
      padding: 5px; }

    }

    @media screen and (min-width:1100px ) {
      .cardResponsivo{
      display: grid;
      grid-template-columns: repeat(4, 1fr);
     
      gap: 20px; /* Espaçamento entre os itens */
      padding: 5px; }
      

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
            <a class="nav-link" href="gerenciarhabitos.php ">
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
                <div class="card "> 
                  <div class="card-body">
                    <h3 class="card-title">Personagens</h3>
                    <?php
                      if (isset($_GET['compraskin'])) {
                        if ($_GET['compraskin'] == 'ok') {
                          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Parabéns!</strong> Compra do personagem feita com sucesso!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                        }
                      }
                      if (isset($_GET['compraskin'])) {
                        if ($_GET['compraskin'] == 'erro') {
                          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> Você não tem dinheiro o suficiente para a compra do personagem!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                        }
                      }
                    ?>
                    <div class="grid-container cardResponsivo">
                      <div class="item ">
                         <div class="card">
                           <img class="card-img-top" src="../../img/skin/s1.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Angelisis</h5>
                            
                            <p class="card-text">Grátis</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal1">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal1">
                              <div class="modal-dialog modal-sm" >
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s1.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Angelisis</h5>
                                                        <h5 class="card-title">Raridade : Comum</h5>
                                                        <p class="card-text">Angelisis sempre foi considerada no seu reino do céu, como uma verdadeira anja. Sua ações, atitudes e ideias levaram-na a ser conhecida como "Mãe dos anjos", aquela que sempre ajuda os mais fracos independente de tudo...Avante nobre guerreira! Não deixe os demônios afetar seu reino e a você!</p>
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal2">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal2">
                              <div class="modal-dialog modal-sm" >
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s2.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Kinaiti</h5>
                                                        <h5 class="card-title">Raridade : Comum</h5>
                                                        <p class="card-text">Guerras constantes...Sangue, órgãos e cabeças voando ante o campo de batalha...Esse foi o ambiente que se formou um bravo guerreiro, cujo nome real é Fekhir. Sua amada lança, sendo presente dos seus falecidos pais mostram juntamente com o escudo para quê veio...Lutar! Lutar! E lutar!</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '2';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="2">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s3.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Sokernaiti</h5>
                            <p class="card-text">1000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal3">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal3">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s3.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Sokernaiti</h5>
                                                        <h5 class="card-title">Raridade : Comum</h5>
                                                        <p class="card-text">Amigo de Kinaiti e cavaleiro que completa o trio, diferente de seus companheiros que portam espadas e arco e flechas, ele usa uma bola de futebol amaldiçoada que fere seus oponentes pra valer de acordo com a potência do seu chute! Temos aqui um inimigo a altura para nosso tão honrado Roberto Carlos não é mesmo?</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '3';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="3">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s4.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Serventia</h5>
                            <p class="card-text">1000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal4">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal4">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s4.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Serventia</h5>
                                                        <h5 class="card-title">Raridade : Comum</h5>
                                                        <p class="card-text"> Paixão de Kinaiti, uma brava guerreira que lutou ao lado deste com vigor e coragem. Sua adaga abençoada por Angelisis mostra que independente de onde veio, ou do que faz...Até mesmo os monstros merecem amar, mas da sua maneira. Violenta, animada e ama jogar conversa fora com seu amado para esquecer a realidade cruel que se encontravam...</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '4';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="4">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s5.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Violonelo</h5>
                            <p class="card-text">1100 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal5">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal5">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s5.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Violonelo</h5>
                                                        <h5 class="card-title">Raridade : Comum</h5>
                                                        <p class="card-text"> "Por que lutar? Podemos muito bem aproveitar a paz de uma bela música, não acham?", Essa frase descreve bem o maníaco chifrudo...Acreditem, ele fala sempre que gosta de diálogo e prosperidade...Mas ele não engana ninguém, seu rosto mostra isso. Acho que ele deve ter feito a pior das atrocidades quando estava em seus tempos sombrios...</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '5';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="5">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s6.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Dwleyer</h5>
                            <p class="card-text">2100 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal6">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal6">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s6.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Dwleyer</h5>
                                                        <h5 class="card-title">Raridade : Raro</h5>
                                                        <p class="card-text"> Que estranho...Um demônio tão pequeno assim...Não se engane pelo seu tamanho! Dwleyer é um dos demônios mais fortes que o submundo já teve a honra de portar! Sua incrível velocidade, juntamente da espada que empunha, é suficiente para derrotar todos os anjos que aparecer em sua frente. Juntamente de Sheevah e Samsara, formam o panteão do caos, diretamente do inferno...</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '6';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="6">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s7.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Sheevah</h5>
                            
                            <p class="card-text">2200 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal7">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal7">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s7.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Sheevah</h5>
                                                        <h5 class="card-title">Raridade : Raro</h5>
                                                        <p class="card-text">Parceira de Dwleyer e Samsara, integrante do panteão do caos, é cotada como o 2° Demônio mais forte residente no submundo, não necessitando sequer de armas para cortar as asas puras e límpidas dos anjos. Corriqueiramente, carrega uma tocha que sempre está acesa com as chamas do andar mais profundo daquele lugar fedido que os demônios chamam de casa para queimar seus oponentes. A mais cruel daquele panteão sanguinário!</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '7';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="7">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s8.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Tarmiel Cap</h5>
                            <p class="card-text">2200 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal8">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal8">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s8.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Tarmiel Cap</h5>
                                                        <h5 class="card-title">Raridade : Raro</h5>
                                                        <p class="card-text">Um anjo usando boné? Que ironia! Ele foi um dos únicos celestiais que não precisaram morrer para alcançar seu posto, mas sim recebendo uma benção pela vida tão sofrida e patética que teve. Esse boné representa sua união entre o divino e o terreno, precisando apenas retirá-lo para perder seu posto e poder, por isso ele usufruindo dos seus poderes angelicais e sua espada longa, se tornou um ícone no céu!</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '8';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="8">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s9.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Axelbolt</h5>
                            <p class="card-text">2300 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal9">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal9">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s9.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Axelbolt</h5>
                                                        <h5 class="card-title">Raridade : Raro</h5>
                                                        <p class="card-text">Assim como caronte, ela guia a alma dos recém mortos para o submundo, servindo como serva direta de Samsara, sendo mais como uma verdadeira guia e administradora daquele plano caótico do que necessariamente uma combatente ou guerreira. Quem sabe você não encontra ela por aí depois de morrer né...</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '9';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="9">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s10.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Menin White</h5>
                            <p class="card-text">2500 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal10">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal10">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s10.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Menin White</h5>
                                                        <h5 class="card-title">Raridade : Raro</h5>
                                                        <p class="card-text">"Hahahaha! Uma festa cheia de rapazes e moças...Vamos dançar!", Um humano comum, que vivia uma vida normal, até lhe ser ofertado para ser segurança de "You", um ricasso desconhecido. Como um bom rapaz viciado em festas, bebedeiras e curtições, criou e adaptou um estilo de luta para seu corpo esguio, mas ao mesmo tempo forte para proteger seu senhorio que como forma de pagamento, lhe dá uma boa quantia de dinheiro e festas mensalmente...</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '10';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="10">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s11.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Fishit</h5>
                            <p class="card-text">4000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal11">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal11">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s11.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Fishit</h5>
                                                        <h5 class="card-title">Raridade : Épico</h5>
                                                        <p class="card-text">.Um dos integrantes da gangue do "You", sendo apenas um lenhador que se locomove usando um "balãocóptero" criado pelo seu patrão, e para ataque um machado. Chato, sempre reclamando da vida na cidade que seu chefe mora, mas lhe foi ensinado que a lealdade é uma das maiores virtudes que um homem pode ter, então não deve quebrar a confiança de "You".</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '11';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="11">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s12.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Itenias</h5>
                            <p class="card-text">5000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal12">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal12">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s12.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Itenias</h5>
                                                        <h5 class="card-title">Raridade : Épico</h5>
                                                        <p class="card-text"> É um palhaço segurança de "You", que usa truques envolvendo sua flor para distrair os inimigos de "You" e em seguida derrota-los. Pouco se sabe sobre o seu passado em si, até mesmo o chefe não sabe muito sobre tal palhaço, mas seu jeito maníaco e engraçado de ser cativou "You", ao ponto de deixá-lo entrar para seus guarda costas de elite. "Aqui minha criança, roubei seu nariz...Não grite, eu realmente peguei seu nariz! Hahahaha!"</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '12';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="12">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s13.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">You</h5>
                            <p class="card-text">5000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal13">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal13">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s13.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">You</h5>
                                                        <h5 class="card-title">Raridade : Épico</h5>
                                                        <p class="card-text">Líder de todos do próprio grupo, seu nome real é desconhecido, sendo "You" como ele é conhecido no mundo do crime. É extremamente rico, sendo desconhecido da onde veio tanto dinheiro, mas a única coisa que se sabe é que ele é dono de uma das maiores regiões do mundo, sendo considerado um dos 4 reis, não pela sua força, mas pelo reconhecimento e dinheiro que consegue manipular boa parte do sistema que rege seu território e o mundo no geral.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '13';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="13">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="card">
                           <img class="card-img-top" src="../../img/skin/s14.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">3Dwitch</h5>
                            <p class="card-text">5100 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal14">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal14">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s14.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">3Dwitch</h5>
                                                        <h5 class="card-title">Raridade : Épico</h5>
                                                        <p class="card-text">Guarda costas mais forte de "You" e o primeiro membro da sua gangue, usa magia de gelo para executar seus oponentes. Originalmente cego, aqueles óculos 3D foram um presente do chefe, que caso ele se juntasse ao seu grupo, poderia dar-lhe um óculos que pudesse restaurar sua visão novamente e assim foi feito. Como Fishit, ele é leal ao "You" pela benfeitoria de lhe ajudar.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '14';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="14">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s15.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Irmãos vextre</h5>
                            <p class="card-text">7000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal15">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal15">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s15.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Irmãos Vextre</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text">A dupla de humanos mais forte do mundo! Pela grande eficiência, força e resistência do rapaz, e inteligência, tenacidade e velocidade da irmã, conquistaram diversos territórios e ganharam seguidos, sendo tratados como realeza. Juntos, ocupam um dos cargos de rei, portando um território que é governado por eles, coberto de lixo e entulho, mas é a casa dos diversos moradores que habitam por ali, sem tanta violência, roubo...Todos vivendo de forma igualitária e unida.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '15';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="15">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s16.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Samsara</h5>
                            <p class="card-text">7000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal16">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal16">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s16.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Samsara</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text">Rainha demônio, e membra mais forte do panteão do caos, ela governa tudo pelo submundo, resolvendo os assuntos entre sua raça e os anjos. Ela é extremamente forte, apenas podendo ser batida de frente pelo rei dos anjos, tendo poder suficiente para abalar o céu e a terra de modo literal. Calma, gentil e até mesmo sensata, mas guarda um ódio e rancor dos outros que ninguém imagina...Curvem-se ante a governadora do mal e do caos!</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '16';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="16">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s17.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Díodor</h5>
                            <p class="card-text">7300 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal17">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal17">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s17.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Díodor</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text"> Parceiro de negócios de "You", rege na palma da sua mão um império que convive apenas vampiros. Um dos 4 reis e o mais volátil de todos, sempre querendo arrumar briga com os outros reis visando expandir seu território e semear o caos pelo mundo. A maioria dos conflitos globais é fomentado por Díodor, sendo seu apelido "Dio". Arrogante, soberba e com complexo de messias, seu objetivo é criar um reinado mundial, onde o único rei presente seja ele e mais ninguém.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '17';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="17">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s18.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Virgin</h5>
                            <p class="card-text">7400 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal18">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal18">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s18.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Virgin</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text">Ex serva de "You", seu passado com o vilão é até então desconhecido, apenas sabe-se de sua relação de vassalagem com o rapaz. Ela precisava de dinheiro e comida, então se submeteu a isso...Que horror! Após fugir das garras sujas de "You", ela é uma das pistas mais claras de desvendar o mistério acerca do passado do imperador.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '18';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="18">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                      <div class="card">
                           <img class="card-img-top" src="../../img/skin/s19.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Tramper</h5>
                            <p class="card-text">8000 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal19">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal19">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s19.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Tramper</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text">- Não chega a ser considerado um rei, mas ele da serviços para todos os demais. Armamentos, espionagem...Tudo que você imaginar o Tramper tem consigo, basta ter dinheiro para pagar. Nenhum dos reis ousam roubar ou destrui-lo, nem mesmo Díodor...Por que será?</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '19';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="19">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="item">
                        <div class="card">
                           <img class="card-img-top" src="../../img/skin/s20.jpeg" >
                           <div class="card-body">
                            <h5 class="card-title">Hell's Dream</h5>
                            <p class="card-text">8444 moedas</p>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal20">Visualizar</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal20">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                        <div class="itemModal">
                                                    <div class="card">
                                                      <img class="card-img-top" src="../../img/skin/s20.jpeg" >
                                                      <div class="card-body">
                                                        <h5 class="card-title">Hell's Dream</h5>
                                                        <h5 class="card-title">Raridade : Lendário</h5>
                                                        <p class="card-text"> "Não morra...Você é muito linda para morrer". A última que completa o grupo dos reis, é além de forte, inteligente e sagaz, sendo amplamente classificada entre os reis como a melhor em relações diplomáticas. Sua nação tem diversos investimentos em várias áreas, sendo formada apenas por mulheres. Mas como elas se reproduzem você me pergunta...Ouvi dizer que elas sequestram homens e o forçam a terem relações com elas para depois executa-los...Brutal.</p>
                                                        <form action="comprar_skin.php" method="post">
                                                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <?php
                                                        include('./conexaocombanco/banco.php');
                                                        $codusu = $_SESSION['cod_usu'];
                                                         $teste_personagem = "select * from inventario_skins where cod_usu='$codusu' and cod_skin= '20';";

                                                          $consulta = $conexao->query($teste_personagem);

                                                        if($consulta->num_rows > 0) {
                                                          $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                                                        }else{
                                                          echo'
                                                          <input type="hidden" name="skin" value="20">
                                                        <button type="submit" class="btn btn-success">Comprar</button>
                                                        ';}
                                                        ?>
                                                        </form>
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