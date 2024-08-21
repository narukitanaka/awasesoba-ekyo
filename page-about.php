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
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <h1>アワセそばについて</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <h1>About Awase Soba</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-about_wrap01">
          <div class="block flex">
            <div class="left fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <h3 class="u-sp">1947年創業。沖縄そばの老舗</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-sp">Established in 1947. A long-established Okinawa soba restaurant</h3>
              <?php endif; ?>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img01.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <h3 class="u-pc">1947年創業。沖縄そばの老舗</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-pc">Established in 1947. A long-established Okinawa soba restaurant</h3>
              <?php endif; ?>

              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <p>
                地元のウチナーンチュ(沖縄人)はもちろん、観光客、基地内のアメリカ人たちに親しまれている「アワセそば」。<br>
                今では沖縄そばのブランドの一つとしての地位を築いています。<br>
                1947年の創業以来麺一筋で製造を行ってきた「(有)アワセそば＜製麺工場＞」の沖縄そばは、伝統の特殊な手作り製法によって作られています。<br>
                <br>
                また、近年特に人気があるのは「沖縄ソーキそば(生麺)」で、沖縄そば生麺・本格レトルトソーキ・粉末だしがセットになったこの商品は、那覇の物産展の優秀賞や沖縄市産業まつりで沖縄市長賞を取るなど、多くの賞を受賞している商品でもあります。
              </p>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <p>
                  Awase Soba is loved by local Okinawans, tourists, and Americans on bases.<br>
                  It has now established itself as one of the Okinawa soba brands.<br>
                  Since its establishment in 1947, Awase Soba (Noodle Factory) has been making noodles, and its Okinawa soba is made using a traditional, special handmade method.<br>
                  <br>
                  In recent years, the Okinawa Soki Soba (fresh noodles) has been particularly popular. This set of fresh Okinawa soba noodles, authentic retort soki, and powdered soup stock has won many awards, including the Excellence Award at the Naha Product Exhibition and the Okinawa Mayor's Award at the Okinawa City Industry Festival.
                </p>
              <?php endif; ?>


            </div><!-- /.right -->
          </div><!-- /.block -->

          <div class="img-box ashirai u-sp fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_ashirai_sp.png" alt=""></div>

          <div class="block flex reverce">
            <div class="left fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-sp">沖縄で「平麺」といえば「アワセそば」</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-sp">When you think of "flat noodles" in Okinawa, you think of "Awase Soba."</h3>
              <?php endif; ?>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img02.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-pc">沖縄で「平麺」といえば「アワセそば」</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-pc">When you think of "flat noodles" in Okinawa, you think of "Awase Soba."</h3>
              <?php endif; ?>

              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <p>
                麺一筋60年以上「(有)アワセそば」の平麺は、「アワセそば」というブランドの代名詞にもなっています。<br>
                アワセそばの乾麺は、伝統の特殊な手作り製法と近代設備の除湿乾燥法によって製造されています。<br>
                茹でるともちっとした食感になる平麺は、スープにもしっかり絡みます。6～7分茹でてお好みのスープと具材を盛り付けてお召し上がりください。<br>
                <br>
                沖縄から、こだわりの伝統の味をお届けします。
              </p>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <p>
                  The flat noodles of Awase Soba, which has been making noodles for over 60 years, have become synonymous with the brand "Awase Soba."<br>
                  Awase soba's dried noodles are made using a traditional special handmade method and a modern dehumidification drying method.<br>
                  The flat noodles become chewy when boiled, and they are well entangled in soup. Boil for 6 to 7 minutes, then serve with your favorite soup and ingredients.<br>
                  <br>
                  We deliver the traditional taste of Okinawa.
                </p>
              <?php endif; ?>

            </div><!-- /.right -->
          </div><!-- /.block -->
        </section><!-- /.p-about_wrap01 -->

        <section class="p-about_wrap02">
          <div class="head-ttl fadeIn">
          <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
            <h2>麺へのこだわり</h2>
          <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
            <h2>Attention to noodles</h2>
          <?php endif; ?>
          </div>
          <div class="block flex">
            <div class="left fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-sp">創業当時から変わらぬ太麺</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-sp">Thick noodles that have remained unchanged since the company's founding</h3>
              <?php endif; ?>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img03.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-pc">創業当時から変わらぬ太麺</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-pc">Thick noodles that have remained unchanged since the company's founding</h3>
              <?php endif; ?>

              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <p>
                  アワセそばの特徴の平たい麺は、創業当時から現在でも変わりなく、50年余り同一デザインで販売しています。「元祖！平麺のアワセそば」として県内でも人気があります。
                </p>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <p>
                  The flat noodles that are characteristic of Awase soba have remained unchanged since the company's founding, and have been sold in the same design for over 50 years. It is popular in the prefecture as the "original! Flat noodles Awase soba."
                </p>
              <?php endif; ?>

            </div><!-- /.right -->
          </div><!-- /.block -->
          <div class="block flex reverce">
            <div class="left fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-sp">厳選された小麦粉。<br>つるりとした食感。</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-sp">Carefully selected wheat flour.<br>Smooth texture.</h3>
              <?php endif; ?>
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/p-about_img04.jpg" alt=""></div>
            </div><!-- /.left -->
            <div class="right fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h3 class="u-pc">厳選された小麦粉。<br>つるりとした食感。</h3>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h3 class="u-pc">Carefully selected wheat flour.<br>Smooth texture.</h3>
              <?php endif; ?>

              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <p>
                  アワセそばの麺の原料となる小麦粉は厳選された純強力粉を使用しています。また、製麺工程の小麦粉を練るミキシングという工程において冷水を使用し、ツルツル感と腰のある麺に仕上げています。
                </p>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <p>
                  The wheat flour used to make Awase soba noodles is carefully selected pure strong flour. In addition, cold water is used in the mixing process, which kneads the wheat flour during the noodle-making process, to create noodles with a smooth texture and firmness.
                </p>
              <?php endif; ?>

            </div><!-- /.right -->
          </div><!-- /.block -->
        </section><!-- /.p-about_wrap02 -->

        <div class="top-ranking">
          <div class="head-ttl fadeIn">
          <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
            <h2>ランキング</h2>
          <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
            <h2>Ranking</h2>
          <?php endif; ?>
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