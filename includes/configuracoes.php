<?php
    session_start();

    // URLs de ambiente
    $local     = "http://localhost/_Base/base-enterprise/";
    $producao  = "https://www.aprovacao.tfportifolio.com.br/base-enterprise/";

    // Define URL conforme o ambiente
    $url = ($_SERVER['HTTP_HOST'] === 'localhost') ? $local : $producao;

    $instagram = 'in';
    $facebook = 'fa';
    $youtube = 'yt';
    $linkedin = 'in';
    $github = 'git';

    $codigoAnalytics = 'G-';
    $canonical       = $url;
    $image_url       = 'imagens/logo.png';

    // DADOS
    $logo_site = 'imagens/logo.png';
    $nome_site = 'Base Enterprise';
    $emailContato = 'contato@base.com';

    $arrayLocal = [
        'nome' => 'Base Enterprise',
        'nick' => 'Base Enterprise',
        'rua' => 'Rua Enterprise 123',
        'bairro' => 'Enterprise',
        'cidade' => 'Guarulhos',
        'estado' => 'São Paulo',
        'uf' => 'SP',
        'cep' => '01234-567',
        'geo' => '-23.458890511327006, -46.533065685593705',
        
        // Sobre
        'ddd' => '11',
        'phone' => 'xxxxx-xxxx',
        'n_phone' => '(xx) xxxxx-xxxx',
        'link_phone' => '+xxxxxxxxxxx',
        'wpp' => '(xx) xxxxx-xxxx',
        'num_wpp' => '5511929292929',
        'link_wpp' => 'https://wa.me/55?text=Mensagem%20personalizada!',
        'link_maps' => 'https://',
        'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117134.38445076205!2d-46.54782856356423!3d-23.444244722884537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef53fb1b5e26d%3A0x974ce18d22c3555b!2sGuarulhos%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1750983453833!5m2!1spt-BR!2sbr',
    ];

    include "portifolio/class.portifolio.php";

    global $arquivos_js_para_imprimir;

    $tfp = new TFPCFG();
    $tfp->tfp_url = "";
    $tfp->tfp_assets_dir = "assets/";

    $tfp->tfp_css_padrao = [
        "padrao/global",
        "padrao/reset",
        "padrao/slicknav.min",
        "elementos/whats"
    ];

    $tfp->tfp_js_padrao = [
        "padrao/jquery-3.6.0.min",
        "padrao/jquery.slicknav.min",
        "customJS/scroll",
        "customJS/slick_nav",
    ];

    // Minifica e já deixa pronto o CSS
    $css_minificado = $tfp->tfpCssMinify(isset($tfp_css_paginas) ? $tfp_css_paginas : null);

    // Junta todos os scripts JS (sem minificar)
    $arquivos_js_para_imprimir = $tfp->tfp_js_padrao;
    if (isset($tfp_js_paginas) && is_array($tfp_js_paginas)) {
        $arquivos_js_para_imprimir = array_merge($arquivos_js_para_imprimir, $tfp_js_paginas);
    }

    // Deixa $tfp acessível para outras partes
    $GLOBALS['tfp'] = $tfp;


    include "portifolio/head.portifolio.min.php";
?>