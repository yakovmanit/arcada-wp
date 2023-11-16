<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<div class="contacts" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/contacts/1.png" alt="">
          <a class="contacts-phone" href="tel:+79106287744">+7-910-628-77-44</a>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/contacts/2.png" alt="">
          <p>г. Рязань,<br>ул. Солнечная, 12,<br>офис 45</p>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/contacts/3.png" alt="">
          <a href="mailto:arkada62@yandex.ru">arkada62@yandex.ru</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="map">
  <!-- <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577.3068912428816!2d39.739776823609!3d54.63521087449768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4149e3ca7d798a8b%3A0xe7cd4dc08fecf2ef!2z0YPQuy4g0KHQvtC70L3QtdGH0L3QsNGPLCAxMiwg0KDRj9C30LDQvdGMLCDQoNGP0LfQsNC90YHQutCw0Y8g0L7QsdC7LiwgMzkwMDAw!5e0!3m2!1sru!2sru!4v1511309069060"
      allowfullscreen></iframe> -->

  <?php the_content(); ?>
</div>

<?php get_footer(); ?>