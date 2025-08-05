<header class="header-background">
  <div class="container">
    <div class="header flex justify-content-between">
      <div class="col-md-4 flex justify-content-start">
        <div class="logo-cliente">
          <img src="<?php echo $url . $logo_site; ?>" alt="Logo <?= $nome_site;?>" class="img-responsive">
        </div>
      </div>
      <div class="col-md-4 flex justify-content-end">
        <nav>
          <ul class="menu-list">
            <li><a href="<?php echo $url; ?>" title="Página Inicial">Home</a></li>
            <li><a href="<?php echo $url;?>#presentation" title="Sobre">Sobre</a></li>
            <li><a href="<?php echo $url;?>#services" title="Serviços">Serviços</a></li>
            <li><a href="<?php echo $url;?>#contato" title="Contato">Contato</a></li>
          </ul>
        </nav>
      </div>
      <!-- <div class="col-md-4 flex">
        <a class="btn-header" href="<?php echo $url; ?>contato">ENTRE EM CONTATO</a>
      </div> -->
    </div>
  </div>
</header>
