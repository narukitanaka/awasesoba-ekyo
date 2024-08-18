<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under p-about">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-about">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_about.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_about.jpg" alt="">
              <h1>アワセそばについて</h1>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-about_wrap01">
          <div class="block flex">
            <div class="left fadeIn">
              <h3 class="u-sp">1947年創業。沖縄そばの老舗</h3>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img01.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <h3 class="u-pc">1947年創業。沖縄そばの老舗</h3>
              <p>
                地元のウチナーンチュ(沖縄人)はもちろん、観光客、基地内のアメリカ人たちに親しまれている「アワセそば」。<br>
                今では沖縄そばのブランドの一つとしての地位を築いています。<br>
                1947年の創業以来麺一筋で製造を行ってきた「(有)アワセそば＜製麺工場＞」の沖縄そばは、伝統の特殊な手作り製法によって作られています。<br>
                <br>
                また、近年特に人気があるのは「沖縄ソーキそば(生麺)」で、沖縄そば生麺・本格レトルトソーキ・粉末だしがセットになったこの商品は、那覇の物産展の優秀賞や沖縄市産業まつりで沖縄市長賞を取るなど、多くの賞を受賞している商品でもあります。
              </p>
            </div><!-- /.right -->
          </div><!-- /.block -->

          <div class="img-box ashirai u-sp fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_ashirai_sp.png" alt=""></div>

          <div class="block flex reverce">
            <div class="left fadeIn">
              <h3 class="u-sp">沖縄で「平麺」といえば「アワセそば」</h3>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img02.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <h3 class="u-pc">沖縄で「平麺」といえば「アワセそば」</h3>
              <p>
                麺一筋60年以上「(有)アワセそば」の平麺は、「アワセそば」というブランドの代名詞にもなっています。<br>
                アワセそばの乾麺は、伝統の特殊な手作り製法と近代設備の除湿乾燥法によって製造されています。<br>
                茹でるともちっとした食感になる平麺は、スープにもしっかり絡みます。6～7分茹でてお好みのスープと具材を盛り付けてお召し上がりください。<br>
                <br>
                沖縄から、こだわりの伝統の味をお届けします。
              </p>
            </div><!-- /.right -->
          </div><!-- /.block -->
        </section><!-- /.p-about_wrap01 -->

        <section class="p-about_wrap02">
          <div class="head-ttl fadeIn">
            <h2>麺へのこだわり</h2>
          </div>
          <div class="block flex">
            <div class="left fadeIn">
              <h3 class="u-sp">創業当時から変わらぬ太麺</h3>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img03.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <h3 class="u-pc">創業当時から変わらぬ太麺</h3>
              <p>
                アワセそばの特徴の平たい麺は、創業当時から現在でも変わりなく、50年余り同一デザインで販売しています。「元祖！平麺のアワセそば」として県内でも人気があります。
              </p>
            </div><!-- /.right -->
          </div><!-- /.block -->
          <div class="block flex reverce">
            <div class="left fadeIn">
              <h3 class="u-sp">厳選された小麦粉。<br>つるりとした食感。</h3>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img04.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <h3 class="u-pc">厳選された小麦粉。<br>つるりとした食感。</h3>
              <p>
                アワセそばの麺の原料となる小麦粉は厳選された純強力粉を使用しています。また、製麺工程の小麦粉を練るミキシングという工程において冷水を使用し、ツルツル感と腰のある麺に仕上げています。
              </p>
            </div><!-- /.right -->
          </div><!-- /.block -->
        </section><!-- /.p-about_wrap02 -->

        <div class="top-ranking">
          <div class="head-ttl fadeIn">
            <h2>ランキング</h2>
          </div>

            <div class="ranking-swiper">

              <?php
              // 販売数に基づいて商品を取得
              $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => 5,
                  'meta_key' => 'total_sales',
                  'orderby' => 'meta_value_num',
                  'order' => 'DESC',
              );
              $loop = new WP_Query($args);
              // 販売数に基づく商品がない場合、ランダムな商品を取得
              if (!$loop->have_posts()) {
                  $args = array(
                      'post_type' => 'product',
                      'posts_per_page' => 5,
                      'orderby' => 'rand',
                  );
                  $loop = new WP_Query($args);
              }
              if ($loop->have_posts()) {
                echo '<div class=" swiper-wrapper ranking-list flex fadeIn">';
                while ($loop->have_posts()) {
                $loop->the_post();
                global $product;
                ?>
                <div class="box swiper-slide h-scale">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-box obj-fit">
                          <?php 
                          $product_image_id = $product->get_image_id();
                          if ($product_image_id) {
                              echo wp_get_attachment_image($product_image_id, 'full');
                          }
                          ?>
                        </div>
                        <p><?php the_title(); ?></p>
                    </a>
                </div>
                <?php
                }
                echo '</div>';
              } else {
                echo __('No products found');
              }
              // クエリをリセット
              wp_reset_postdata();
              ?>

            </div>
          
        </div><!-- /.top-ranking -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>