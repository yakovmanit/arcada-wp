<?php
/*
Template Name: Проекты
*/
?>

<?php get_header(); ?>

<section class="shop" id="shop">
  <div class="container">
    <h2>Популярные проекты</h2>
    <ul class="shop-ul">
      <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
      <li><a href="#shop" id="a-2">Сруб</a></li>
      <li><a href="#shop" id="a-3">Каркасные дома</a></li>
      <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
      <li><a href="#shop" id="a-5">Дома из блоков</a></li>
    </ul>
    <!-- Дома из блоков -->
    <div class="shop-cards" id="shop-cards-5">

      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'concrete',
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              Площадь:
              <?php the_field('area'); ?><sup>2</sup>
            </p>
            <span>
              <?php the_field('old_price'); ?> грн
            </span>
            <b>
              <?php the_field('new_price'); ?> грн
            </b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>

    </div>

    <!-- Кирпичные дома -->
    <div class="shop-cards" id="shop-cards-4">

      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'bricks',
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              Площадь:
              <?php the_field('area'); ?><sup>2</sup>
            </p>
            <span>
              <?php the_field('old_price'); ?> грн
            </span>
            <b>
              <?php the_field('new_price'); ?> грн
            </b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>
    </div>

    <!-- Каркасные дома -->
    <div class="shop-cards" id="shop-cards-3">

      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'frame',
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              Площадь:
              <?php the_field('area'); ?><sup>2</sup>
            </p>
            <span>
              <?php the_field('old_price'); ?> грн
            </span>
            <b>
              <?php the_field('new_price'); ?> грн
            </b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>
    </div>

    <!-- Сруб -->
    <div class="shop-cards" id="shop-cards-2">

      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'blockhouse',
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              Площадь:
              <?php the_field('area'); ?><sup>2</sup>
            </p>
            <span>
              <?php the_field('old_price'); ?> грн
            </span>
            <b>
              <?php the_field('new_price'); ?> грн
            </b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>
    </div>

    <!-- Дома из бруса -->
    <div class="shop-cards active" id="shop-cards-1">

      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'lumber',
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              Площадь:
              <?php the_field('area'); ?><sup>2</sup>
            </p>
            <span>
              <?php the_field('old_price'); ?> грн
            </span>
            <b>
              <?php the_field('new_price'); ?> грн
            </b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>

    </div>

  </div>
</section>

<?php get_footer(); ?>