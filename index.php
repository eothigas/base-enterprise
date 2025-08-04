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

                        <div class="button-service" id="service-buttons">
                            <?php include "includes/arrayServices.php"; ?>
                            <?php foreach ($servicos as $i => $servico): ?>
                                <div class="flex btns<?= $i === 0 ? ' active-btn' : '' ?>"
                                    data-title="<?= htmlspecialchars($servico['titulo']); ?>"
                                    data-img="<?= $url; ?>imagens/main/services/<?= $servico['imagem']; ?>">
                                    <div class="num">
                                        <span><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                    </div>
                                    <div class="text">
                                        <h4><?= $servico['titulo']; ?></h4>
                                    </div>
                                    <div class="icon">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <img id="service-img" src="<?= $url; ?>imagens/main/services/<?= $servicos[0]['imagem']; ?>" alt="Imagem de Serviços" class="img-responsive service-img">
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-10">
                        <div class="flex align-items-center justify-content-center flex-column gap-3">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card-service">
                                    <h4 id="service-description">Quer saber como nosso serviço de <span> <?= $servicos[0]['titulo']; ?> </span> funciona?</h4>
                                    <div class="flex link-card justify-content-start">
                                        <a id="whatsapp-btn"
                                            href="https://wa.me/<?php echo $arrayLocal['num_wpp']; ?>?text=<?= urlencode("Olá! Vim pelo site, e gostaria de mais informações sobre os serviços de: " . $servicos[0]['titulo']); ?>"
                                            class="button" target="_blank">
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

                            <!-- Card 2 (fixo) -->
                            <div class="col-lg-12">
                                <div class="card-service-alt">
                                    <h4>Procurando serviço de qualidade?</h4>
                                    <div class="flex link-card justify-content-start">
                                        <a href="https://wa.me/<?php echo $arrayLocal['num_wpp']; ?>?text=<?= urlencode("Olá! Vim pelo site, e gostaria de mais informações sobre os serviços oferecidos!") ?>" class="button">
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
        <section id="contato">
            <div class="container">
                <img src="<?php echo $url;?>imagens/main/services/square-number.svg" alt="img fundo serviço" class="img-responsive bg-service">
                <div class="flex" style="align-items: start;">
                    <!-- Formulário de contato -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 left-contato px-3">
                        <h2 class="mb-4">Entre em Contato</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quisquam accusantium, ipsam fugit aut culpa placeat. Necessitatibus laboriosam iste labore ab sit officia repellat? Obcaecati.</p>
                        <form>
                            <div class="mb-2 input-group">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-controls" id="nome" placeholder="Seu nome" required>
                            </div>
                            <div class="mb-2 input-group">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-controls" id="email" placeholder="Seu e-mail" required>
                            </div>
                            <div class="mb-2 input-group">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-controls" id="mensagem" rows="4" placeholder="Sua mensagem" required></textarea>
                            </div>
                            <button type="submit" class="btn-contact">Enviar</button>
                        </form>
                    </div>

                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 flexColumn right-contato px-3">
                        <h2  class="mb-4">Nossa Localização</h2>

                        <ul>
                            <li><i class="bi bi-geo-alt-fill"></i><a href="<?php echo $arrayLocal['link_maps']; ?>" title="Localização - <?php echo $nome_site; ?>"><?php echo $arrayLocal['rua'] . ", " . $arrayLocal['bairro'] . " - " . $arrayLocal['cidade'] . " - " . $arrayLocal['uf']?> </a></li>
                            <li><i class="bi bi-telephone-fill"></i><a href="tel:<?php echo $arrayLocal['link_phone']; ?>" title="Contate-nos"><?php echo $arrayLocal['n_phone']?></a></li>
                            <li><i class="bi bi-whatsapp"></i><a href="<?php echo $arrayLocal['link_wpp']; ?>"><?php echo $arrayLocal['wpp']?></a></li>
                            <li><i class="bi bi-envelope-fill"></i><a href="mailto:<?php echo $emailContato; ?>"><?php echo $emailContato; ?></a></li>
                        </ul>
                        <iframe 
                            src="<?php echo $arrayLocal['iframe_maps']; ?>" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Localização - <?php echo $nome_site; ?>"
                        ></iframe>
                    </div>
                </div>
                <img src="<?php echo $url;?>imagens/main/services/square-number.svg" alt="img fundo serviço" class="img-responsive bg-service-alt">
            </div>
        </section>
    </main>

    
    <?php include "includes/_footer.php"; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btns = document.querySelectorAll(".btns");
            const whatsappBtn = document.getElementById("whatsapp-btn");
            const serviceImg = document.getElementById("service-img");
            const serviceDesc = document.getElementById("service-description");

            // Usando json_encode para passar string segura para JS
            const numero = <?php echo json_encode($arrayLocal['num_wpp']); ?>;

            btns.forEach(btn => {
                btn.addEventListener("click", () => {
                    // Remove classe ativa atual
                    document.querySelector(".btns.active-btn")?.classList.remove("active-btn");
                    btn.classList.add("active-btn");

                    // Dados do botão
                    const titulo = btn.getAttribute("data-title");
                    const imagem = btn.getAttribute("data-img");

                    // Atualiza imagem
                    serviceImg.setAttribute("src", imagem);

                    // Atualiza link do WhatsApp
                    const mensagem = `Olá! Vim pelo site, e gostaria de mais informações sobre os serviços de: ${titulo}`;
                    const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;
                    whatsappBtn.setAttribute("href", url);

                    // Atualiza texto do título
                    serviceDesc.innerHTML = `Quer saber como nosso serviço de <span>${titulo}</span> funciona?`;
                });
            });
        });
    </script>
</body>
</html>
