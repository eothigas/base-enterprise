<?php
// Garante que a variável $tfp e $arquivos_js_para_imprimir foram definidos antes
if (isset($tfp) && isset($arquivos_js_para_imprimir)) {
    $tfp->imprimirScriptsInline($arquivos_js_para_imprimir);
}
?>
