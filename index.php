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
                                <a href="<?php echo $url;?>#presentation">Saiba Mais</a>
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
        <section id="services">
            <div class="container-fluid">
                <img src="<?php echo $url;?>imagens/main/services/square-number.svg" alt="img fundo serviço" class="img-responsive bg-service">
                <h2>Nossos Serviços</h2>
                <div class="flex align-items-start justify-content-between gap-5">
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, id!</p>

                        <div class="button-service">
                            <div class="flex btns active-btn" >
                                <div class="num">
                                    <span class="">01</span>
                                </div>
                                <div class="text">
                                    <h4>Serviço 1</h4>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <div class="flex btns">
                                <div class="num">
                                    <span class="active">02</span>
                                </div>
                                <div class="text">
                                    <h4>Serviço 2</h4>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <div class="flex btns">
                                <div class="num">
                                    <span class="active">03</span>
                                </div>
                                <div class="text">
                                    <h4>Serviço 3</h4>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <div class="flex btns">
                                <div class="num">
                                    <span class="active">04</span>
                                </div>
                                <div class="text">
                                    <h4>Serviço 4</h4>
                                </div>
                                <div class="icon">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <img src="<?php echo $url;?>imagens/main/services/service1.webp" alt="Imagem de Serviços" class="img-responsive service-img">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-10">
                        <div class="flex align-items-center justify-content-center flex-column gap-3">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                               <div class="card-service">
                                    <h4>Quer saber como nosso serviço funciona?</h4>
                                    <div class="flex link-card justify-content-start">
                                        <a href="#" class="button">
                                            Saiba Mais
                                            <span class="button__icon-wrapper">
                                                <svg
                                                viewBox="0 0 14 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="button__icon-svg"
                                                width="10"
                                                >
                                                <path
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                                    fill="currentColor"
                                                ></path>
                                                </svg>

                                                <svg
                                                viewBox="0 0 14 15"
                                                fill="none"
                                                width="10"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="button__icon-svg button__icon-svg--copy"
                                                >
                                                <path
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                                    fill="currentColor"
                                                ></path>
                                                </svg>
                                            </span>
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-service-alt">
                                    <h4>Procurando serviço de qualidade?</h4>
                                    <div class="flex link-card justify-content-start">
                                        <a href="#" class="button">
                                            Contate-nos
                                            <span class="button__icon-wrapper">
                                                <svg
                                                viewBox="0 0 14 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="button__icon-svg"
                                                width="10"
                                                >
                                                <path
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                                    fill="currentColor"
                                                ></path>
                                                </svg>

                                                <svg
                                                viewBox="0 0 14 15"
                                                fill="none"
                                                width="10"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="button__icon-svg button__icon-svg--copy"
                                                >
                                                <path
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                                    fill="currentColor"
                                                ></path>
                                                </svg>
                                            </span>
                                            
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo $url;?>imagens/main/services/square-number.svg" alt="img fundo serviço" class="img-responsive bg-service-alt">
            </div>
        </section>
        <section id="team">
            <div class="container">
                <h2>seção time</h2>
            </div>
        </section>
    </main>

    
    <?php include "includes/_footer.php"; ?>

</body>
</html>
