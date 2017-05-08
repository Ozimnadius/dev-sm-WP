<? get_header() ?>
  <!--main content-->
  <section class="content">
    <div class="container clearfix">

      <!--sidebar-->
      <? get_template_part('_parts/sidebar'); ?>
      <!--sidebar-->

      <!--about-->
      <main class="page-content content__page-content">
        <div class="about">


          <!--img-->
          <div class="about__left">
            <div class="about__img">
              <? $picture = get_field('photo'); ?>
              <img class="avatar-max" src="<?=portfolio_picture(); ?>" width="220" height="220"
                   alt="Мое фото">
            </div>
          </div>


          <!--description-->
          <div class="about__right">
            <h1 class="title about__title">
              <? the_title() ?>
            </h1>
            <div class="desription about__description">
              <?php
              if (have_posts()) {
                while (have_posts()) {
                  the_post();
                  //
                  // Post Content here
                  //
                  the_content();
                } // end while
              } // end if
              ?>
            </div>

          </div>


        </div>
      </main>


    </div>
  </section>

<? get_footer() ?>