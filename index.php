<?php 
    $h1          = "Webdesigner e Analista de Sistemas";
    $title       = "Webdesigner e Analista de Sistemas";
    $description = "Olá! Me chamo Thiago Freitas, tenho 20 anos e sou formado em ADS. Curto transformar ideias em sites bonitos e funcionais. Web design é onde a criatividade vira código!";
    $keywords    = $title;

    // Define os arquivos CSS e JS específicos desta página
    $tfp_css_paginas = array(
        "paginas/home",
    );

    $tfp_js_paginas = [
        // "customJS/teste",
    ];

    include "includes/configuracoes.php";
?>
</head>
<body>
    <?php include "includes/_header.php"; ?>

    <main>
        <section id="banner">
            <div class="container text-center">
                <div class="flex justify-content-between">
                    <div class="col-xs-12 col-sm-12 col-md-5 presentation">
                        <h2>Opa! E aí, como vai? &#128075;</h2>
                        <h2>Bem vindo ao meu <span>portifólio!</span></h2>

                        <p>Este site, tem o intuito de me apresentar profissionalmente e, de maneira prática e relevante, mostrar quem eu sou.</p>

                        <a href="<?php echo $url; ?>#sobre">Sobre mim</a>
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <img src="<?php echo $url; ?>imagens/main/home/banner.webp" alt="Imagem do Banner" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <section id="sobre">
            <div class="container">
                <div class="flex" style="align-items: start;">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <h2>Sobre</h2>
                        <h4>Thiago Freitas</h4>
                        <p>lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, 
                            lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, 
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="image-container">
                            <div class="image-slider">
                                <img src="<?php echo $url; ?>imagens/favicon.ico" alt="<?php echo $nome_site; ?>" width="50" class="img-responsive">
                                <img src="<?php echo $url; ?>imagens/main/home/author.webp" alt="Thiago Freitas 2" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>

    <?php include "includes/_footer.php"; ?>

</body>
</html>
