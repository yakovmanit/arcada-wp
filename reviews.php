<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>

<section class="review" id="review">
  <div class="container">
    <h2>Клиенты о нас</h2>
    <div class="row">
      <div class="slider_ex">

        <!-- <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/review/ava.png"
                  alt="Анна Маслова">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">Анна Маслова, Москва</p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>Вопрос по недвижимости</h3>
              <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы
                к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
            </div>
          </div> -->

        <!-- <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/review/ava.png"
                  alt="Анна Маслова">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">Анна Маслова, Москва</p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>Вопрос по недвижимости</h3>
              <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы
                к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
            </div>
          </div>
          <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/review/ava.png"
                  alt="Анна Маслова">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">Анна Маслова, Москва</p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>Вопрос по недвижимости</h3>
              <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы
                к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
            </div>
          </div>
          <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/review/ava.png"
                  alt="Анна Маслова">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">Анна Маслова, Москва</p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>Вопрос по недвижимости</h3>
              <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы
                к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
            </div>
          </div>
          <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/review/ava.png"
                  alt="Анна Маслова">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">Анна Маслова, Москва</p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>Вопрос по недвижимости</h3>
              <p>Если бы не компания «Найдем Адвоката», то моя семья могла бы совершить роковую ошибку и попасть в лапы
                к аферистам. Юрист за 2 дня смог досудебно полностью урегулировать конфликт. Спасибо Вам</p>
            </div>
          </div> -->



        <?php

        // выбираем записи, которые нас интересуют
        $args = array(
          'category_name' => 'reviews',
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

          <div class="review-block">
            <div class="media review-avatar">
              <div class="media-left">
                <img class="media-object" src="<?php the_field('image'); ?>" alt="<?php the_title() ?>">
              </div>
              <div class="media-body">
                <p class="review-avatar-name">
                  <?php the_title() ?>
                </p>
              </div>
            </div>
            <div class="review-block-text">
              <h3>
                <?php the_field('topic') ?>
              </h3>
              <p>
                <?php the_field('text'); ?>
              </p>
            </div>
          </div>

          <?php
        }

        wp_reset_postdata();

        ?>



      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>