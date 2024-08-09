<?php get_header(); ?>
<main>

  <div class="content-wrap p-under">
    <div class="inner content-flex">

    <?php get_sidebar(); ?>

      <div class="contents p-archive-product">

      <div class="under-mv">
        <div class="img-box obj-fit">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
            <h1>検索結果</h1>
          </picture>
        </div>
      </div><!-- /.under-mv -->

      <section class="p-produt-list_wrap">

        <?php if ( have_posts() ) : ?>
          <div class="product-list flex">
              <?php while ( have_posts() ) : the_post(); global $product; ?>
                  <div class="product h-scale">
                      <a href="<?php the_permalink(); ?>">
                          <div class="img-box obj-fit">
                              <?php if ( has_post_thumbnail() ) : ?>
                                  <?php the_post_thumbnail( 'full' ); ?>
                              <?php else : ?>
                                  <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" />
                              <?php endif; ?>
                          </div>
                          <p><?php the_title(); ?></p>
                      </a>
                  </div>
              <?php endwhile; ?>
          </div><!-- /.product-list -->
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php echo sprintf( '「%s」に一致する結果は見つかりませんでした。スペルを確認するか、別の単語やフレーズを使用してください。', get_search_query() ); ?></p>
        <?php endif; ?>

      </section><!-- /.p-produt-list_wrap -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>