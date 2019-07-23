<?php include 'header.php'; ?>

<body>


  <!-- MENU -->
  <?php include 'menu.php'; ?>

  <section class="header_produto relative">
    <img src="assets/img/useruploads/header_produto.jpg" class="desktop" width="100%" />
    <img src="assets/img/useruploads/header_produto_mobile.jpg" class="mobiletablet" width="100%" style="height: 180px" />
    <div class="header_title valign-wrapper">
      CATEGORIAS
    </div>
  </section>

  <nav class="breadcrumbnav">
    <div class="nav-wrapper container clearContainer">
      <div class="col s12 valign-wrapper">
        <a href="#!" class="breadcrumb valign-wrapper"> <i class="material-icons">home</i> Início</a>
        <a href="#!" class="breadcrumb">Categoria</a>
        <a href="#!" class="breadcrumb">Produto</a>
      </div>
    </div>
  </nav>

  <section class="produto_content">
    <div class="container clearContainer">
      <div class="row">
        <div class="col m1 l1 desktop">
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
        </div>
        <div class="col s12 m4 l5 nopadding createContainer">
          <img src="assets/img/useruploads/prod5.jpg" width="100%" class="item_imagem_active" />
        </div>
        <div class="col s12 m12 mobiletablet thumbs">
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
          <div class="">
            <img src="assets/img/useruploads/prod2-thumb.jpg" width="100%" class="circle thumbnav" />
          </div>
        </div>
        <div class="col m6 l6">
          <div class="item_title">
            Tampa de Spa - PRO SPA
          </div>
          <div class="item_information">
            <div class="item_avaliacoes valign-wrapper">
              Avaliações:
              <img src="assets/img/icon-star-mark.png" />
              <img src="assets/img/icon-star-mark.png" />
              <img src="assets/img/icon-star-mark.png" />
              <img src="assets/img/icon-star-mark.png" />
              <img src="assets/img/icon-star-unmark.png" />
            </div>
            <div class="item_status valign-wrapper">
              Produto:&nbsp;<span>Em estoque</span>
            </div>
            <div class="valign-wrapper">
              Código:&nbsp;<span>1506</span>
            </div>
          </div>

          <div class="item_text jumplinehalf">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          </div>

          <div class="item_color_title jumplinehalf">
            Escolha uma cor:
          </div>
          <div class="item_color_select valign-wrapper">
            <img src="assets/img/useruploads/color-blue.jpg" />
            <img src="assets/img/useruploads/color-bege.jpg" />
            <img src="assets/img/useruploads/color-brown.jpg" />
          </div>

          <div class="item_size_title jumpline">
            Escolha um tamanho:
          </div>
          <div class="item_size_select jumplinehalf" style="height: 28px">
            <div class="tile">1x1</div>
            <div class="tile">2x2</div>
            <div class="tile">3x3</div>
            <div class="tile">Informar medida</div>
          </div>

          <div class="item_size_title jumplinehalf">
            Informar Medida:
          </div>
          <div class="item_resize jumplinehalf">
            <span>Largura </span>
            <input type="text" class="item_resize_input" />
            <span>Comprimento </span>
            <input type="text" class="item_resize_input" />
          </div>

          <div class="jumpline btncalcular">
            <a class="cta_frete cta jumpline" href="#0">
              Calcular
            </a>
          </div>

          <div class="item_price valign-wrapper jumpline">
            <div class="item_price_money center">
              R$
            </div>
            <div>
              <div class="item_price_value">
                1.300,00
              </div>
              <div class="item_price_cond">
                ou em até 10x de R$ 130,00
              </div>
            </div>
          </div>

          <div class="item_qtd_buy valign-wrapper">
            <div class="valign-wrapper">
              <div class="qtd_decrease valign-wrapper btnqtd">
                &#45;
              </div>
              <input type="text" class="input_qtd" value="1" />
              <div class="qtd_increase valign-wrapper btnqtd">
                &#43;
              </div>
            </div>
            <a class="cta_buy cta" href="#0">
              Calcular
            </a>
          </div>

          <div class="item_ship valign-wrapper clearValign">
            <div class="item_frete_textdiv valign-wrapper">
              <img src="assets/img/icon-truck-dark.png" />
              <div class="item_frete_text">
                <div class="item_frete_title">
                  Calcule o Frete
                </div>
                <div class="item_frete_subtitle">
                  veja preços e prazos
                </div>
              </div>
            </div>
            <div class="valign-wrapper">
              <input type="text" class="input_ship" />
              <a class="input_ship_btn valign-wrapper" href="#0">
                Calcular
              </a>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>

  <section class="item_tabs container clearContainer">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3 l2"><a class="active" href="#descricao">Descrição</a></li>
          <li class="tab col s6 l2"><a href="#frete">Regra FRETE GRÁTIS</a></li>
          <li class="tab col s3 l2"><a href="#video">Video</a></li>
        </ul>
      </div>
      <div id="descricao" class="col s12">
        <h5>Descrição</h5>
        <BR>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
      </div>
      <div id="frete" class="col s12">
        <h5>Frete</h5>
        <BR>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
      </div>
      <div id="video" class="col s12">
        <h5>Video</h5>
        <BR>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
      </div>
    </div>
  </section>

  <section class="moresellerstwo">
    <div class="clearContainer container center relative">
      <div class="">
        <img src="assets/img/icon-bath.png" width="30px" />
        <div class="categoria_title">
          QUEM COMPROU, TAMBÉM COMPRA ESSE
        </div>

        <!-- CONTROLE LEFT -->
        <div class="moresellers_controls_left valign-wrapper">
          <div class="inter_control valign-wrapper">
            <img src="assets/img/control-left.png" />
          </div>
        </div>

        <!-- CONTROLE RIGHT -->
        <div class="moresellers_controls_right valign-wrapper">
          <div class="inter_control valign-wrapper">
            <img src="assets/img/control-right.png" />
          </div>
        </div>

        <div class="clearContainer container jumpline2 ">

          <div class="row moresellers_helpmobile">
            <!-- ITEM -->
            <?php include 'component/post_item_s3.php'; ?>

            <!-- EXCLUIR ESSA LINHA E ESSE ARQUIVO PARA EXCLUIR OS DEMOS -->
            <?php include 'modelos-sellers.php'; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>