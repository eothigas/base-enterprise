<?php 
    $h1          = "Home";
    $title       = "Home";
    $description = "Este layout, se trata de um layout base demonstração";
    $keywords    = $title;

    $tfp_css_paginas = array(
        "paginas/home",
        "paginas/contato",
    );

    $tfp_js_paginas = [
    ];

    include "includes/configuracoes.php";
?>
</head>
<body>
    <?php include "includes/_header.php"; ?>

    <main>
        <section id="banner">
            <div class="container">
                <div class="row flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="banner-content">
                            <h1>Olá! Este é o <span><?php echo $nome_site; ?></span></h1>
                            <p>Esta seção é o banner da página.</p>
                            <p>Aqui você pode adicionar, ou trocar esse texto!</p>
                            <p>Fique a vontade.</p>
                            <div class="buttons">
                                <a href="<?php echo $url;?>#sobre">Saiba Mais</a>
                                <a href="<?php echo $arrayLocal['link_wpp']; ?>">Entre em Contato</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="<?php echo $url; ?>imagens/main/banner/img-banner.webp" alt="Banner Image" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <section id="numbers">
            <div class="container-fluid">
                <h2 class="text-center">Acompanhe nossos <span>Números</span></h2>
                <div class="row flex box-numbers">
                    <img src="<?php echo $url;?>imagens/main/home/circle-number.svg" alt="Img fundo box number" class="img-responsive bg">
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                        <h2>2000 <span>+</span></h2>
                        <p>Filiais</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                        <h2>10 <span>+</span></h2>
                        <p>Anos Experiência</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                        <h2>800 <span>+</span></h2>
                        <p>Produtos</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                        <h2>150M <span>+</span></h2>
                        <p>Seguidores</p>
                    </div>
                    <img src="<?php echo $url;?>imagens/main/home/circle-number.svg" alt="Img fundo box number" class="img-responsive bg-dir">
                </div>
            </div>
        </section>
        <section id="presentation">
            <div class="container-fluid">
                <div class="flex align-items-start justify-content-start">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <h2>Tornando <span>Ideias</span> em <span>Grandes Negócios</span></h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt rem sit labore fuga magnam? Autem voluptatibus qui quasi unde aliquid.</p>
                    </div>
                </div>
                <div class="flex row justify-content-start total-box">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 box-img">
                        <img src="<?php echo $url; ?>imagens/main/home/present-1.webp" alt="Imagem 1 da Seção" class="img-responsive img-present var-1">
                        <div class="text">
                            <h4>#Empresa Forte e Compromissada</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="<?php echo $url; ?>imagens/main/home/present-2.webp" alt="Imagem 2 da Seção" class="img-responsive img-present var-2">
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <?php include "includes/_footer.php"; ?>

</body>
</html>
