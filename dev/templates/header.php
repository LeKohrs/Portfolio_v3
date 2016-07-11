<!doctype html>
<html class="no-js" lang="en">
<head>
    <!__ METADATA __>
    <title><?php wp_title(''); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!__ ICONS __>
    <link href="<?php echo get_template_directory_uri(); ?>img/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png"         rel="apple-touch-icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-76x76.png"   rel="apple-touch-icon" sizes="76x76" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />

    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="body__header" role="banner">
        <div class="header__menu">
            <a href="index.html"><h4>About</h4></a>
            <a href="index.html"><img class="logo" src="img/ryan-logo.svg" alt="Ryan's Logo"/></a>
            <a href="work.html"><h4>Work</h4></a>
        </div>
        <div class="header__links">
            <a href="https://twitter.com/RyanLeichliter" target="_blank"><img class="icon header__twitter" src="img/twitter.svg" alt="Twitter"/></a>
            <a href="mailto:ryan.leichliter@icloud.com?Subject=I%20am%20interested%20in%20hiring%20you!"><img class="icon header__email" src="img/email.svg" alt="Email"/></a>
            <a href="https://github.com/LeKohrs" target="_blank"><img class="icon header__git" src="img/git.svg" alt="Github"/></a>
        </div>
    </header>