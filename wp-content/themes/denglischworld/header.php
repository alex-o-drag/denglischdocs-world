<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php
      wp_body_open();
      ?>
    <header class="header">
      <div class="container-large">
        <div class="row header__row justify-between items-center">
          <div class="col w-auto">
            <a href="#" class="header__logo-link block">
            <img class="header__logo-img block" src="<?php bloginfo('template_directory'); ?>/images/common/DenglishWorldlogo.svg" alt="Logo">
            </a>
          </div>
          <div class="col w-auto header__mobile-section flex">
            <button class="block header__question-trigger mr-4">
            <img class="header__question-trigger-img" src="<?php bloginfo('template_directory'); ?>/images/icons/question-trigger.svg" alt="Question trigger">
            </button>
            <button class="block burger-menu relative bg-floral-white rounded-lg">
            <span class="bg-gold block absolute rounded"></span>
            <span class="bg-gold block absolute rounded"></span>
            <span class="bg-gold block absolute rounded"></span>
            </button>
          </div>
        </div>
      </div>
    </header>
    <?php