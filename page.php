<?php get_header(); ?>
  <main>
    <div class="content-wrap">
      <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
      <div class="inner content-flex">

        <?php get_sidebar(); ?>

        <div class="contents common-page">

          <div class="under-mv">
            <div class="img-box obj-fit">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
                <?php if ( is_page('cart') ) : ?>
                  <h1>カート</h1>
                <?php elseif ( is_page('checkout') ) : ?>
                  <h1>購入手続き</h1>
                <?php elseif ( is_page('my-account') ) : ?>
                  <h1>マイページ</h1>
                <?php else : ?>
                  <h1><?php the_title(); ?></h1>
                <?php endif; ?>
              </picture>
            </div>
          </div><!-- /.under-mv -->

          <?php the_content(); ?>

        </div>
      </div>
    </div>
	</main>
<?php get_footer(); ?>