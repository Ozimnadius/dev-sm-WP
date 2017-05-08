<? get_header(); ?>
  <!--main content-->
  <section class="content">
    <div class="container clearfix">


      <!--sidebar-->
      <? get_template_part('_parts/sidebar') ?>

      <!--portfolio-->
      <main class="page-content content__page-content">
        <div class="portfolio">


          <!--potfolio-title-->
          <h1 class="title portfolio__title">Портфолио</h1>


          <!--portfolio-list-->
          <ul class="portfolio__list">
            <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                ?>
                <!--item-->
                <li class="portfolio__item">
                  <a href="<?=get_permalink(); ?>" class="portfolio__link">
                    <div class="portfolio__img">
                      <img class="portfolio-img" src="<?=portfolio_picture(); ?>" alt="">
                    </div>
                    <div class="portfolio__desc">
                      <div class="portfolio__item-title">
                        <? the_title(); ?>
                      </div>
                      <div class="portfolio__item-desc">
                        <? the_excerpt(); ?>
                      </div>
                      <div class="portfolio__type">
                        <i class="portfolio__type-icon fa fa-mobile-phone"></i>
                        <div class="portfolio__type-desc">
                          <? the_category(); ?>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                <?
                //
              } // end while
            } // end if
            ?>

          </ul>
        </div>
      </main>


    </div>
  </section>

<? get_footer(); ?>