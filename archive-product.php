<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

    <?php get_sidebar(); ?>

      <div class="contents p-archive-product">

      <div class="under-mv">
        <div class="img-box obj-fit">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
            <h1>商品一覧</h1>
          </picture>
        </div>
      </div><!-- /.under-mv -->

      <section class="p-produt-list_wrap">

        <div class="cate-list">
          <ul class="flex">
            <li>
              <a href="<?php echo home_url('/'); ?>/shop/">
                全ての商品
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cate01.svg" alt="">
                <div class="arrow"></div>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/'); ?>/product-category/fresh-noodles/">
                生麺
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cate02.svg" alt="">
                <div class="arrow"></div>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/'); ?>/product-category/dried-noodles/">
                乾麺
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cate03.svg" alt="">
                <div class="arrow"></div>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/'); ?>/product-category/ll-noodles/">
                LL麺
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cate04.svg" alt="">
                <div class="arrow"></div>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/'); ?>/product-category/broth/">
                だし
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cate05.svg" alt="">
                <div class="arrow"></div>
              </a>
            </li>
          </ul>
        </div><!-- /.cate-list -->

        <?php
        defined( 'ABSPATH' ) || exit;

        // 商品情報を取得するクエリを設定
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
        );

        // WP_Query を使って商品情報を取得
        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) : ?>
          <div class="product-list flex">
              <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
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
            <p>商品が見つかりませんでした。</p>
        <?php endif; ?>

      </section><!-- /.p-produt-list_wrap -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>