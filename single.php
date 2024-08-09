<?php get_header(); ?>
  <main>
    <div class="content-wrap">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
      <div class="inner content-flex">

        <?php get_sidebar(); ?>

        <div class="contents">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
        
      </div>
    </div>
	</main>
<?php get_footer(); ?>