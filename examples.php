<?php
/*
Template Name: Примеры
*/
?>

<?php get_header(); ?>

<section class="example" id="example">
  <div class="container">
    <h2>Примеры наших работ</h2>

    <div class="slider_ex">
      <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/1.jpg" alt="">
         <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/2.jpg" alt="">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/3.jpg" alt=""> 
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/2.jpg" alt="">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/1.jpg" alt="">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/example/3.jpg" alt=""> -->



      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'examples',
        // Эта строчка була изменена с 'category'    => 0,
        'numberposts' => 0,
        // строчка, необходимая, чтобы выводить неограниченное кол-во записей
        'order' => 'ASC',
        'post_type' => 'post',
        'suppress_filters' => true,
        // suppression of filters of SQL query change
      );

      // помещаем записи в одну переменную $posts
      $posts = get_posts($args);

      // запускаем цикл и в нём перебираем все посты по нашим параметрам
      foreach ($posts as $post) {
        setup_postdata($post);
        ?>

        <!-- html-разметка, в которую мы вставляем информацию о записях -->

        <img src="<?php the_field('image'); ?>" alt="">

        <?php
      }

      wp_reset_postdata();

      ?>

    </div>

  </div>
</section>

<?php get_footer(); ?>