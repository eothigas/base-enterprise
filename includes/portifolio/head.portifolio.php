<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="<?php echo $arrayLocal['nome']; ?>">
    <base href="<?php echo $url; ?>">

    <title><?php echo $arrayLocal['nome']; ?> - <?php echo $title ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description ?? ''); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords ?? ''); ?>">
    <meta name="ICBM" content="<?php echo $arrayLocal['geo']; ?>">

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical ?? ''); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="icon" href="<?php echo $url; ?>imagens/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $url; ?>imagens/favicon.ico">

    <!-- Open Graph -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?php echo $arrayLocal['nick']; ?> - <?php echo $title ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description ?? ''); ?>">
    <meta property="og:url" content="<?php echo $url ?? $canonical; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo $nome_site; ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical ?? ''); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($url . $image_url); ?>">
    <meta name="geo.position" content="<?php echo $arrayLocal['geo']; ?>">
    <meta name="geo.placename" content="<?php echo $arrayLocal['cidade'] . '-' . $arrayLocal['uf']; ?>">
    <meta name="geo.region" content="<?php echo $arrayLocal['uf'] . '-BR' ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title ?? ''); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description ?? ''); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($url . $image_url); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"></style>

    <style>
      <?php echo $tfp->tfpCssMinify($tfp_css_paginas ?? null); ?>
    </style>

    <link rel="preload" href="<?php echo $url;?>imagens/main/home/banner.webp" as="image">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
