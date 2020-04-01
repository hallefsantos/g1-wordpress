<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php wp_title(); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1">
        <meta name="Language" content="PT-BR"/>
        <meta name="author" content="Hallef Santos" />
        <meta name="robots" content="index, follow" />
        <meta name="publisher" content="hallef.com, contato@hallef.com" />
        <meta name="copyright" content="Copyright <?=date('Y')?> - G1, https://g1.com.br"/>
        <meta name="geo.placename" content="Av. Paulista, 293 - Sala 1616 - Sao Paulo, Brazil" />
        <meta name="geo.region" content="BR-Sao Paulo" />
        <meta name="rating" content="general" />

	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>