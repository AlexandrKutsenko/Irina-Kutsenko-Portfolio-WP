<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Irina Kutsenko Photographer</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head() ?>
</head>
<body class="gallery-body">
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <header class="header">
        <div class="container">
            <div class="header__columns">
                <div class="header__column header__column--left">
                    <a class="header__logo" href="<?php echo get_home_url()?>">Irina Kutsenko</a>
                </div>
                <div class="header__column header__column--center">
                    <nav class="main-menu">
                        <ul class="main-menu__list">
                            <li class="main-menu__list-item">
                                <a class="main-menu__list-item-link" href="<?php echo get_home_url()?>">Home</a>
                            </li>
                            <li class="main-menu__list-item">
                                <a class="main-menu__list-item-link" href="<?php echo get_permalink(62)?>">Gallery</a>
                            </li>
                            <li class="main-menu__list-item">
                                <a class="main-menu__list-item-link" href="<?php echo get_permalink(64)?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__column header__column--right">
                    <address class="header-contact">
                        <ul class="header-contact__list">
                            <li class="header-contact__list-item">
                                <a href="https://www.instagram.com/irina_kutsenko_ph/" class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/instagram_icon.png" alt="starofservice">
                                </a>
                            </li>
                            <li class="header-contact__list-item">
                                <a href="https://www.starofservice.co/#/" class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/starofservice_icon.png" alt="starofservice">
                                </a>
                            </li>
                            <li class="header-contact__list-item">
                                <a href="https://www.facebook.com/IrinaKutsenkoPH"  class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/fb_icon.png" alt="starofservice">
                                </a>
                            </li>
                            <li class="header-contact__list-item">
                                <a href="https://vk.com/irina_kutsenko_ph" class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/vk_icon.png" alt="starofservice">
                                </a>
                            </li>
                            <li class="header-contact__list-item">
                                <a href="mailto:irinakutsenkoph@gmail.com" class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/mail_icon.png" alt="starofservice">
                                </a>
                            </li>
                            <li class="header-contact__list-item">
                                <a href="tel:34603342248" title="+34 603 34 22 48" class="header-contact__list-item-link" target="_blank">
                                    <img src="<?php echo get_template_directory_uri()?>/img/icon/phone_icon.png" alt="starofservice">
                                    <span class="header-contact__list-item-phone">+34 603 34 22 48</span>
                                </a>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->