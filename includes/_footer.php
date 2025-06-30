<?php
    // Carrega apenas os JS específicos da página
    if (!empty($arquivos_js_para_imprimir)) {
        // Remove os JS padrão da lista para imprimir só os da página
        $js_pagina = array_diff($arquivos_js_para_imprimir, $tfp->tfp_js_padrao);
        $tfp->imprimirScriptsInline($js_pagina);
    }
?>

<!-- footer.php -->
<footer>
    <div class="container">
        <div class="flex justify-content-between align-items-start">

            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-2">
                <img src="<?php echo $logo_site; ?>" alt="<?php echo $nome_site?>" class="img-responsive mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid deserunt, provident quo quibusdam aliquam dolor inventore omnis officiis, excepturi maiores magni eveniet tempora rem corporis!</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2">
                <h4>Links úteis</h4>
                <ul>
                    <li>
                        <i class="bi bi-caret-right-fill"></i><a href="<?php echo $url; ?>" title="Página Inicial">Home</a>
                    </li>
                    <li>
                        <i class="bi bi-caret-right-fill"></i><a href="<?php echo $url; ?>#sobre" title="Sobre">Sobre</a>
                    </li>
                    <li>
                        <i class="bi bi-caret-right-fill"></i><a href="<?php echo $url; ?>#produtos" title="Produtos/Serviços">Produtos/Serviços</a>
                    </li>
                    <li>
                        <i class="bi bi-caret-right-fill"></i><a href="<?php echo $url; ?>#contato" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <h4>Contato</h4>

                <ul>
                    <li><i class="bi bi-geo-alt-fill"></i><a href="<?php echo $arrayLocal['link_maps']; ?>" title="Localização - <?php echo $nome_site; ?>"><?php echo $arrayLocal['rua'] . ", " . $arrayLocal['bairro'] . " - " . $arrayLocal['cidade'] . " - " . $arrayLocal['uf']?> </a></li>
                    <li><i class="bi bi-telephone-fill"></i><a href="tel:<?php echo $arrayLocal['link_phone']; ?>" title="Contate-nos"><?php echo $arrayLocal['n_phone']?></a></li>
                    <li><i class="bi bi-whatsapp"></i><a href="<?php echo $arrayLocal['link_wpp']; ?>"><?php echo $arrayLocal['wpp']?></a></li>
                    <li><i class="bi bi-envelope-fill"></i><a href="mailto:<?php echo $emailContato; ?>"><?php echo $emailContato; ?></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<?php include "includes/zap-button.php"; ?>

<div class="container-fluid author">
    <div class="flex text-center">
        <h2>Desenvolvido por <a href="www.tfportifolio.com.br" title="TF Portifólio - Webdesigner">Thiago Freitas &copy;</a> - <?php echo date("Y") ;?> </h2>
    </div>
</div>

<?php if($_SERVER["SERVER_NAME"] != "localhost"){ ?>
    <!-- Código do Analytics aqui! -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $codigoAnalytics;?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo $codigoAnalytics;?>');
    </script>
<?php } ?>

<?php include "includes/_scripts.php"; ?>