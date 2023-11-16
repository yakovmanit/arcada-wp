<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>
    <?php bloginfo('name');
    echo " | ";
    bloginfo('description'); ?>
  </title>

  <?php wp_head(); ?>

</head>

<body>
  <nav class="header">
    <div class="container">
      <div class="row">
        <div
          class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main/logo.png" alt="Arkada. Строительство и монтаж"> -->
          <?php the_custom_logo('$blog_id'); ?>
        </div>
        <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
          <div class="wrap">
            <div class="wrap-block">
              <!-- <ul class="header-ul" id="menu">
                <li><a href="#shop">Проекты</a></li>
                <li><a href="#example">Примеры работ</a></li>
                <li><a href="#review">Отзывы</a></li>
                <li><a href="#contacts">Контакты</a></li>
              </ul> -->

              <?php

              wp_nav_menu(
                array(
                  'menu_class' => 'header-ul',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => 'wp_page_menu',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth' => 0,
                  'walker' => '',
                )
              );

              ?>
              
            </div>
          </div>
        </div>
        <div
          class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
          <div class="wrap">
            <div class="wrap-block">
              <a href="tel:+79106287744" class="header-phone">8-910-628-77-44</a>
            </div>
          </div>
        </div>
        <div
          class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
          <button type="submit" class="button-small popup-btn">
            Перезвоните мне
          </button>
        </div>
      </div>
    </div>
  </nav>