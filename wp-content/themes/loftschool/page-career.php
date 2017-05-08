<?
/**
 * Template Name: Карьера
*/

get_header(); ?>

<!--main content-->
<section class="content">
  <div class="container clearfix">


    <!--sidebar-->
    <? get_template_part('_parts/sidebar'); ?>
    <!--sidebar-->


    <!--career-->
    <main class="page-content content__page-content">
      <div class="career">


        <!--career-top-->
        <div class="career__top">

          <h1 class="title career__title"><? the_title(); ?></h1>
        </div>

        <!--img-->
        <div class="career__left">
          <div class="career__img">
            <img class="career-foto" src="<?=get_field('photo')['sizes']['medium_large']; ?>" width="220" height="220"
                 alt="фото">
          </div>
        </div>

        <!--description-->
        <div class="career__right">
          <ul class="career__list">
            <? $career = get_field('career');
            foreach ($career as $item): ?>
            <li class="career__item">
              <div class="career__block">
                <div class="career__job"><?=$item['title']; ?></div>
                <div class="career__profession"><?=$item['description']; ?></div>
                <div class="career__period"><?=$item['period']; ?></div>
                <div class="career__date"><?=$item['year']; ?></div>
              </div>
            </li>
            <? endforeach; ?>
          </ul>
        </div>


      </div>
    </main>


  </div>
</section>

<? get_footer(); ?>
