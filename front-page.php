<?php get_header(); ?>
    <main>

      <div class="flow-btn"><a href="#"></a></div>

      <div class="mv">

        <div class="mv-swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide img-box obj-fit mv01">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv01.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv01.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide -->

            <div class="swiper-slide img-box obj-fit mv02">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv02.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv02.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide -->

            <div class="swiper-slide img-box obj-fit mv03">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv03.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv03.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide -->

            <div class="swiper-slide img-box obj-fit mv04">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv04.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv04.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide -->

            <div class="swiper-slide img-box obj-fit mv05">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv05.jpg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv05.jpg" alt="">
              </picture>
            </div><!-- /.swiper-slide -->

          </div><!-- /.swiper-wrapper -->
          <!-- ページネーション -->
          <div class="swiper-pagination"></div>
        </div><!-- /.mv-swiper -->

        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
          <h1>アワセから、<br>沖縄の味を届ける</h1>
        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
          <h1>From Awase,<br>Delivering the Taste of Okinawa</h1>
        <?php endif; ?>
        <div class="ahirai01 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/mv-ashirai01.svg" alt=""></div>
        <div class="ahirai02 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/mv-ashirai02.svg" alt=""></div>

      </div><!-- /.mv -->


      <div class="content-wrap">
        <div class="main-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai04.svg" alt=""></div></div>
        <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>

        <div class="inner content-flex">

          <?php get_sidebar(); ?>

          <div class="contents p-top">

            <div class="top-message fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <p>当店は、会員登録制の<br class="u-sp">通販サイトです<br><span>会員登録後に購入が<br class="u-sp">可能となります</span></p>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <p>Our store is a member-only online store.<br><span>You can make purchases after registering as a member.</span></p>
              <?php endif; ?>
              <div class="ashirai01 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-1-a.svg" alt=""></div>
              <div class="ashirai02 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-2-a.svg" alt=""></div>
              <div class="ashirai03 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-1-b.svg" alt=""></div>
              <div class="ashirai04 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-2-b.svg" alt=""></div>
            </div><!-- /.top-message -->

            <div class="top-cate">
              <div class="head-ttl fadeIn">
                <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                  <h2>商品カテゴリー</h2>
                <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                  <h2>Category</h2>
                <?php endif; ?>
              </div>
              <div class="cate-list flex fadeIn">
                <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/fresh-noodles/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img01.jpg" alt=""></div>
                      <p>生麺</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/dried-noodles/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img02.jpg" alt=""></div>
                      <p>乾麺</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/ll-noodles/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img03.jpg" alt=""></div>
                      <p>LL麺</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/broth/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img04.jpg" alt=""></div>
                      <p>だし</p>
                    </a>
                  </div>
                </div><!-- /.cate-list -->
                <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/fresh-noodles-en/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img01.jpg" alt=""></div>
                      <p>Fresh-Noodles</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/dried-noodles-en/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img02.jpg" alt=""></div>
                      <p>Dried-Noodles</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/ll-noodles-en/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img03.jpg" alt=""></div>
                      <p>ll-Noodles</p>
                    </a>
                  </div>
                  <div class="box h-scale">
                    <a href="<?php echo home_url('/'); ?>product-category/broth-en/">
                      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/top-cate_img04.jpg" alt=""></div>
                      <p>Broth</p>
                    </a>
                  </div>
                </div><!-- /.cate-list -->
                <?php endif; ?>
            </div><!-- /.top-cate -->

            <div class="top-search fadeIn">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <div class="flex">
                  <h3>商品名・キーワード検索</h3>
                  <div class="search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                      <div>
                          <input type="text" value="" name="s" id="s" placeholder="商品名・キーワード検索"/>
                          <input type="hidden" name="post_type" value="product" />
                          <input type="image" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search-btn.svg" />
                      </div>
                    </form>
                  </div>
                </div>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <div class="flex">
                  <h3>ProductName・Keyword Search</h3>
                  <div class="search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                      <div>
                          <input type="text" value="" name="s" id="s" placeholder="ProductName・Keyword Search"/>
                          <input type="hidden" name="post_type" value="product" />
                          <input type="image" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search-btn.svg" />
                      </div>
                    </form>
                  </div>
                </div>
              <?php endif; ?>
            </div><!-- /.top-search -->

            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <div class="btn-wrap fadeIn"><a class="btn01" href="<?php echo home_url('/'); ?>shop/">全ての商品</a></div>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <div class="btn-wrap fadeIn"><a class="btn01" href="<?php echo home_url('/'); ?>shop/">All Products</a></div>
            <?php endif; ?>

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
                    echo '<div class="swiper-wrapper ranking-list flex fadeIn">';
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

            <!-- <div class="top-faq">
              <div class="head-ttl fadeIn">
                <h2>よくあるご質問</h2>
              </div>
              <div class="flex">
                <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#order"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-order.svg" alt="">ご注文・お支払いについて</a>                
                <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#shipping"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-shipping.svg" alt="">配送・送料について</a>                
                <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#return"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-return.svg" alt="">返品・交換について</a>                
              </div>
            </div> -->

            <div class="top-about fadeIn">
              <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/to-about_img01.png" alt=""></div>
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <div class="btn-wrap"><a class="btn02" href="<?php echo home_url('/'); ?>about/">アワセそばについて</a></div>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <div class="btn-wrap"><a class="btn02" href="<?php echo home_url('/'); ?>about/">About Awase Soba</a></div>
              <?php endif; ?>
            </div><!-- /.top-about -->

          </div><!-- /.contents -->

        </div><!-- /.inner -->
      </div><!-- /.content-wrap-->

    </main>


<?php get_footer(); ?>