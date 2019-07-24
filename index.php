<!--

  Desenvolvimento:
  - Pedro Cordista
  - João Bianchini

  Data: 
  - 17/04/2018

  Projeto:
  - Projeto PRO-SPA

-->

<?php include 'header.php'; ?>

<body>


  <!-- MENU -->
  <?php include 'menu.php'; ?>
  <?php include 'menuside.php'; ?>


  <section class="slider relative">



    <!-- SLIDER -->
    <div class="sliderimg">

      <div class="relative">
        <!-- IMAGEM A SER TROCADA -->
        <img src="assets/img/slider1.png" class="desktop" width="100%" />
        <img src="assets/img/slider1_mobile.png" class="bannermobile mobiletablet" width="100%" />
        <!-- TEXTO A SER TROCADO -->
        <div class="slider_text">
          <div class="titleOne">TAMPA TÉRMICA</div>
          <div class="titleTwo">PROTEGENDO SEU SPA</div>
          <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</div>

          <BR>
          <P>
            <!-- LINK SAIBA MAIS-->
            <a class="cta_button cta jumpline" href="#0">
              Saiba mais
            </a>
          </P>
        </div>

        <!-- CONTROLES -->
        <div class="slider_control valign-wrapper">
          <a href="#0" class="left_control valign-wrapper">
            <img src="assets/img/icon-left.png" width="4px">
          </a>
          <a href="#0" class="right_control valign-wrapper">
            <img src="assets/img/icon-right.png" width="6px">
          </a>

        </div>

        <div class="redes">
          <a class="cta_redes cta valign-wrapper" href="#0">
            <img src="assets/img/icon-face.png" />
          </a>
          <a class="cta_redes cta valign-wrapper" href="#0">
            <img src="assets/img/icon-insta.png" />
          </a>
          <a class="cta_redes cta valign-wrapper" href="#0">
            <img src="assets/img/icon-youtube-2.png" />
          </a>
        </div>

      </div>
    </div>


    <!-- PARTE AZUL ATRÁS DA IMAGEM -->
    <div class="sliderbgimg hide-on-med-and-down">
      <div class="relative">
        <img src="assets/img/bluebg.png" width="100%" />
        <div class="sliderbginfos valign-wrapper row">
          <div class="valign-wrapper infodiv infodivfrete">
            <div class="infoIcon" style="padding-top: 3px">
              <img src="assets/img/icon-truck.png" />
            </div>
            <div class="infoText" style="padding-bottom: 2px;">
              FRETE GRÁTIS
            </div>
          </div>
          <div class="valign-wrapper infodiv infodivparcelamento">
            <div class="infoIcon" style="padding-top: 3px">
              <img src="assets/img/icon-credit-card.png" style="width: 45px !important" />
            </div>
            <div class="infoText" style="padding-bottom: 2px;">
              PARCELAMOS EM ATÉ 12X SEM JUROS
            </div>
          </div>
          <div class="valign-wrapper infodiv infodivseguranca">
            <div class="infoIcon" style="padding-top: 3px">
              <img src="assets/img/icon-shield.png" style="width: 20px !important" />
            </div>
            <div class="infoText" style="padding-bottom: 2px;">
              SITE 100&#37; SEGURO
              <br> PODE CONFIAR
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div class="sliderbgcolor hide-on-large-only valign-wrapper">
    <div class="row widthfull" style="margin: 0 .4rem !important;">
      <div class="col s4 valign-wrapper nopadding">
        <div class="infoIcon" style="padding-top: 3px">
          <img src="assets/img/icon-shield.png" style="width: 20px !important" />
        </div>
        <div class="infoText" style="padding-bottom: 2px;">
          SITE 100&#37; SEGURO
          <br> PODE CONFIAR
        </div>
      </div>
      <div class="col s4 valign-wrapper nopadding">
        <div class="infoIcon" style="padding-top: 3px">
          <img src="assets/img/icon-truck.png" />
        </div>
        <div class="infoText" style="padding-bottom: 2px;">
          FRETE GRÁTIS
        </div>
      </div>
      <div class="col s4 valign-wrapper nopadding">
        <div class="infoIcon" style="padding-top: 3px;">
          <img src="assets/img/icon-credit-card.png" style="width: 45px !important" />
        </div>
        <div class="infoText" style="padding-bottom: 2px; font-size: .6rem !important">
          PARCELAMOS EM ATÉ 12X SEM JUROS
        </div>
      </div>
    </div>
  </div>

  <section class="categoria">
    <div class="container center clearContainer">
      <div class="">
        <img src="assets/img/icon-bath.png" width="30px" />
        <div class="categoria_title">
          COMPRE POR CATEGORIA
        </div>
        <div class="categoria_subtitle">
          Nós temos várias linhas e qualidades, escolha uma categoria!
        </div>
        <div class="container jumpline2 clearContainer">

          <div class="row">

            <div class="col s12 m5 l5 relative categoria_view">
              <div class="categoria_img img_left">
                <div class="relative">
                  <img src="assets/img/useruploads/categoria_ouro.png">
                  <div class="categoria_title_img text_left">
                    OURO
                  </div>
                </div>
              </div>
              <div class="categoria_bg bg_left">
                <img src="assets/img/cat_bg_left.png">
              </div>
            </div>

            <div class="col s12 m5 l5 offset-m2 offset-l2 relative categoria_view">
              <div class="categoria_img img_right">
                <div class="relative">
                  <img src="assets/img/useruploads/categoria_diamante.png">
                  <div class="categoria_title_img text_right">
                    DIAMANTE
                  </div>
                </div>
              </div>
              <div class="categoria_bg bg_right" style="top: .45rem;">
                <img src="assets/img/cat_bg_right.png">
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="moresellers">
    <div class="clearContainer container center relative">
      <div class="">
        <img src="assets/img/icon-bath.png" width="30px" />
        <div class="categoria_title">
          AS MAIS VENDIDAS
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

  <section class="moreaboutus">

    <div class="container center relative">
      <div class="">
        <img src="assets/img/icon-bath.png" width="30px" />
        <div class="categoria_title">
          SAIBA MAIS SOBRE NÓS
        </div>
        <div class="container clearContainer jumpline2">
          <div class="row">
            <div class="col s12 m5 l5 left-align moreaboutus_text nopadding">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="col s12 m7 l7 relative moreaboutus_video_div">
              <iframe width="100%" src="https://www.youtube.com/embed/ni5hRK1ehzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="moreaboutus_video" allowfullscreen></iframe>
              <div class="moreaboutus_video_bg">
                <img src="assets/img/bg_video.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'content-faleconosco.php'; ?>
  <?php include 'content-novidades.php'; ?>



  <section class="depoimento relative">
    <img src="assets/img/depoimentos.jpg" width="100%" class="hide-on-small-only" style="min-height: 420px;" />
    <img src="assets/img/depoimentos_mobile.jpg" width="100%" class="hide-on-med-and-up" />
    <div class="depoimento_content valign-wrapper">
      <div class="center">
        <div class="depoimento_title widthfull">
          Depoimento de nossos clientes
        </div>
        <div class="depoimento_img center">
          <img src="assets/img/useruploads/depo.png" />
        </div>
        <div class="depoimento_name jumpline">
          Lara Rodrigues
        </div>
        <div class="relative">
          <div class="depoimento_text jumpline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </div>
        </div>
        <div class="line">
          <img src="assets/img/line.png" width="100%" />
        </div>
        <div class="row jumpline">

          <div class="col s6 m3 l3 center depoitem">
            <div class="deponumber">
              &#43;<span class="count">300</span>
            </div>
            <div class="depotext">
              LOREM IPSUM DOLOR
            </div>
          </div>

          <div class="col s6 m3 l3 center depoitem">
            <div class="deponumber">
              &#43;<span class="count">15600</span>
            </div>
            <div class="depotext">
              LOREM IPSUM DOLOR
            </div>
          </div>

          <div class="col s6 m3 l3 center depoitem">
            <div class="deponumber">
              &#43;<span class="count">1500</span>
            </div>
            <div class="depotext">
              LOREM IPSUM DOLOR
            </div>
          </div>

          <div class="col s6 m3 l3 center depoitem">
            <div class="deponumber">
              &#43;<span class="count">12</span>
            </div>
            <div class="depotext">
              LOREM IPSUM DOLOR
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cases jumpline2">

    <div class="center relative">
      <div class="">
        <img src="assets/img/icon-bath.png" width="30px" />
        <div class="categoria_title">
          NOSSOS CASES
        </div>
      </div>
      <div class="row jumpline casesgrid">

        <a class="col s6 m3 l3 nopadding" href="assets/img/useruploads/case1.jpg">
          <img src="assets/img/useruploads/case1.jpg" width="100%" />
        </a>

        <a class="col s6 m3 l3 nopadding" href="assets/img/useruploads/case2.jpg">
          <img src="assets/img/useruploads/case2.jpg" width="100%" />
        </a>

        <a class="col s6 m3 l3 nopadding" href="assets/img/useruploads/case3.jpg">
          <img src="assets/img/useruploads/case3.jpg" width="100%" />
        </a>

        <a class="col s6 m3 l3 nopadding" href="assets/img/useruploads/case4.jpg">
          <img src="assets/img/useruploads/case4.jpg" width="100%" />
        </a>

      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.2/simple-lightbox.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/contador.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
  
  <script src="assets/js/slickrun.js"></script>
</body>

</html>