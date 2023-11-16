<?php get_header()?>

<main class="main" style="background-image: url(<?php the_field('main_bg'); ?>);">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <h1>
          <?php the_field('main_title'); ?>
        </h1>
        <h2>
          <?php the_field('sub_title'); ?>
        </h2>
        <div class="main-feature">
          <img src="<?php the_field('first_advantage_img'); ?>" alt="piggy">
          <p class="main-feature-p">
            <?php the_field('first_advandage_text'); ?>
          </p>
        </div>
        <div class="main-feature">
          <img src="<?php the_field('second_advantage_img'); ?>" alt="clock">
          <p class="main-feature-p">
            <?php the_field('second_advandage_text'); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta">Оставь заявку прямо сейчас</b>
          <b class="main-cta-sub">и получи <span>бесплатный расчет</span> и <span>входную дверь</span> в
            подарок<sup>*</sup>!</b>

          <form method="post" name="first-form" action="mailer/smart.php" class="form">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_name" required type="text" placeholder="Ваше имя">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="phone" id="phone-1" required type="text" placeholder="Ваш телефон">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button id="first-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
            </div>

            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома
              </p>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</main>

<section class="features">
  <div class="container">
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/features/1.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">Неизменная цена</h2>
          <p>Стоимость дома фиксируется в договоре и не изменяется до окончания строительства</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/features/2.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">Команда специалистов</h2>
          <p>У нас работают только лучшие строители, архитекторы и дизайнеры</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/assets/img/features/3.png"
            alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">Индивидуальный подход</h2>
          <p>Для Вас мы можем разработать уникальный проект дома, или доработать имеющийся</p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="houses">
  <div class="house house-1">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Каркасные дома</h2>
        <ul>
          <li>Низкая стоимость строительства.</li>
          <li>Низкие затраты на эксплуатацию.</li>
          <li>Можно строить в любое время года.</li>
          <li>Легкость и доступность внутренней отделки.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="house house-2">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Кирпичные дома</h2>
        <ul>
          <li>Высокий уровень звукоизоляции.</li>
          <li>Повышенная теплоизоляция.</li>
          <li>Долговечность и прочность.</li>
          <li>Высокая противопожарная защита.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="house house-3">
    <div class="container">
      <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
        <h2>Блочные дома</h2>
        <ul>
          <li>Низкая стоимость.</li>
          <li>Безопасен для здоровья.</li>
          <li>Сохраняет тепло.</li>
          <li>Высокая противопожарная защита.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="upsell">
  <div class="container">
    <div class="row">
      <h2>Кровельные работы</h2>
      <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых
        материалов:</p>
      <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/upsell/1.png" alt="Металлочерепица">
            <b>Металлочерепица</b>
          </div>
        </div> -->
      <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/upsell/2.png" alt="Мягкая гибкая черепица">
            <b>Мягкая гибкая черепица</b>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/upsell/3.png" alt="Профнастил">
            <b>Профнастил</b>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/upsell/4.png" alt="Шифер">
            <b>Шифер</b>
          </div>
        </div> -->


      <?php

      // выбираем записи, которые нас интересуют
      $args = array(
        'category_name' => 'upsell',
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
          <div class="upsell-block">
            <?php

            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/assets/img/not-image.png' alt=''>";
            }
            ?>

            <b>
              <?php the_title(); ?>
            </b>

          </div>
        </div>

        <?php
      }

      wp_reset_postdata();

      ?>


    </div>
    <p class="upsell-more">и много других материалов.</p>
    <div class="row">
      <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta">Мы бесплатно проконсультируем вас</b>
          <b class="main-cta-sub">по выбору <span>материала кровли</span> для Вашего дома!</b>

          <form method="post" name="second-form" action="mailer/smart.php" class="form">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_name" required type="text" placeholder="Ваше имя">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_phone" id="phone-2" required type="text" placeholder="Ваш телефон">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button id="second-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
            </div>

            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.</p>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>