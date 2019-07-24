<?php include 'header.php'; ?>

<body>


    <!-- MENU -->
    <?php include 'menu.php'; ?>
    <?php include 'menuside.php'; ?>

    <section class="header_produto relative">
        <img src="assets/img/useruploads/header_produto.jpg" class="desktop" width="100%" />
        <img src="assets/img/useruploads/header_produto_mobile.jpg" class="mobiletablet" width="100%" style="height: 180px" />
        <div class="header_title valign-wrapper">
            CATEGORIAS
        </div>
    </section>

    <?php include 'content-breadcrumb.php'; ?>

    <section class="posts_produtos container relative">
        <div class="col s12 mobiletablet">
            <div class="filter_menu valign-wrapper modal-trigger" href="#filter">
                <i class="material-icons">menu</i> <span>FILTRAR</span>
            </div>
            <div class="filter_order">
                <select class="filter_select">
                    <option value="" disabled selected>Ordenação padrão</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
        </div>
        <div class="row relative">
            <div class="col m3 l3 filters desktop">
                <ul class="collapsible">
                    <li class="relative">
                        <div class="collapsible-header">
                            Categoria
                        </div>
                        <div class="collapsible-body">
                            <ul class="list-filter">
                                <li class="filteractive"> BANHEIRAS </li>
                                <li> OFUROS </li>
                                <li> SPAS </li>
                            </ul>
                        </div>
                        <div class="collapsiblebtn">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </li>
                    <li class="relative">
                        <div class="collapsible-header">
                            Preço
                        </div>
                        <div class="collapsible-body">
                            <div id="range"></div>
                            <div id="range-value"></div>
                        </div>
                        <div class="collapsiblebtn">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col m9 s12 row_list">
                <?php include 'component/post_item_s4.php'; ?>
                <?php include 'modelos-categoria-list.php'; ?>
            </div>
            <!-- CONTROLE LEFT -->
            <div class="list_controls_left valign-wrapper">
                <div class="listinter_control valign-wrapper">
                    <img src="assets/img/control-left.png" />
                </div>
            </div>

            <!-- CONTROLE RIGHT -->
            <div class="list_controls_right valign-wrapper">
                <div class="listinter_control valign-wrapper">
                    <img src="assets/img/control-right.png" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4 l4 offset-m8 offset-l8 right">
                <ul class="pagination right">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Modal Structure -->
    <div id="filter" class="modal bottom-sheet">
        <div class="relative">
            <div class="close_modal">X</div>
            <div class="title_modal center">Filtrar</div>
            <ul class="">
                <div class="collapsible-header">
                    Categoria
                </div>
                <ul class="list-filter" style="margin-top: 1rem; padding-left: 2rem">
                    <li class="filteractive">
                        BANHEIRAS
                    </li>
                    <li>
                        OFUROS
                    </li>
                    <li>
                        SPAS
                    </li>
                </ul>
                </li>
                <li class="relative">
                    <div class="collapsible-header">
                        Preço
                    </div>
                    <div id="rangemobile" style="margin-top: 1rem; 
                width: 80%;
                margin-left: 10%"></div>
                    <div id="rangemobile-value" class="center" style="margin-top: .5rem"></div>

                </li>
            </ul>
        </div>
    </div>


    <?php include 'content-faleconosco.php'; ?>
    <?php include 'content-novidades.php'; ?>

    <?php include 'footer.php'; ?>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.2/nouislider.min.js"></script>



    <script>
        var nonLinearStepSlider = document.getElementById('range');

        noUiSlider.create(nonLinearStepSlider, {
            start: [0, 10000],
            range: {
                'min': [0],
                '10%': [500, 500],
                '50%': [4000, 1000],
                'max': [10000]
            }
        });

        var nonLinearStepSliderValueElement = document.getElementById('range-value');

        nonLinearStepSlider.noUiSlider.on('update', function(values) {
            nonLinearStepSliderValueElement.innerHTML = values.join(' - ');
        });
        var nonLinearStepSlider = document.getElementById('rangemobile');

        noUiSlider.create(nonLinearStepSlider, {
            start: [0, 10000],
            range: {
                'min': [0],
                '10%': [500, 500],
                '50%': [4000, 1000],
                'max': [10000]
            }
        });

        var nonLinearStepSliderValueElement = document.getElementById('rangemobile-value');

        nonLinearStepSlider.noUiSlider.on('update', function(values) {
            nonLinearStepSliderValueElement.innerHTML = values.join(' - ');
        });
    </script>
</body>

</html>