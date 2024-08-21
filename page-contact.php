<?php get_header(); ?>
<!-- pタグ自動挿入制限 start-->
<?php remove_filter('the_content', 'wpautop'); ?>
<!-- pタグ自動挿入制限 stop -->
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-contact">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h1>お問い合わせ</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h1>Contact</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-contact_wrap01">
          <div class="form_wrap">
            <?php echo do_shortcode('[contact-form-7 id="0554913" title="お問い合わせ"]'); ?>
          </div>
        </section><!-- /.p-contact_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>