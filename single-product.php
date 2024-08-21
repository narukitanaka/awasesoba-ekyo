<?php get_header(); ?>
<main>

  <?php if ( is_user_logged_in() ) : ?>
    <div class="flow-btn add-cart"><a href="<?php echo home_url('/cart'); ?>"></a></div>
  <?php endif; ?>

  <div class="content-wrap p-under">
    <!-- <div class="main-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai04.svg" alt=""></div></div> -->
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

    <?php get_sidebar(); ?>

      <div class="contents p-single-product">

        <section class="p-itemdetail">

            <div class="item-content">
  
              <div class="img-content">
                <div class="img-wrapper">
                  <div class="swiper-item">
                    <div class="swiper-wrapper">

                      <?php
                      global $product;
                      if (!is_a($product, 'WC_Product')) {
                        $product = wc_get_product(get_the_ID());
                      }
                      $image_ids = $product->get_gallery_image_ids();
                      if (!empty($image_ids)) {
                        foreach ($image_ids as $image_id) {
                          $image_url = wp_get_attachment_image_url($image_id, 'full');
                          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                          ?>
                          <div class="swiper-slide">
                            <div class="img-wrap">
                              <img src="<?php echo esc_url($image_url); ?>" alt="">
                            </div>
                          </div>
                          <?php
                        }
                      }
                      ?>

                    </div><!-- /.swiper-wrapper -->
                  </div><!-- /.swiper-item -->

                  <div class="thumb-list">

                    <?php
                    global $product;
                    if (!is_a($product, 'WC_Product')) {
                      $product = wc_get_product(get_the_ID());
                    }
                    $image_ids = $product->get_gallery_image_ids();
                    if (!empty($image_ids)) {
                      $counter = 1; // ループカウンターを初期化
                      foreach ($image_ids as $image_id) {
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="thumb-item">
                          <a class="thumb-link" href="javascript:void(0);" onclick="thumbnail(<?php echo $counter; ?>)">
                            <img src="<?php echo esc_url($image_url); ?>" alt="">
                          </a>
                        </div>
                        <?php
                        $counter++; // カウンターをインクリメント
                      }
                    }
                    ?>

                  </div><!-- /.thumb-list -->
                </div><!-- /.img-wrapper -->
              </div><!-- /.img-content -->
  
              <div class="detail-content">

                <p class="name"><?php echo get_the_title(); ?></p>
  
                <?php global $product; ?>
                <div class="item-count">
                  <form id="add-to-cart-form" action="" method="post">
                    <div class="product-quantity">
                      <button type="button" id="minus" class="minus">ー</button>
                      <input type="number" id="quantity" name="quantity" min="1" value="1">
                      <button type="button" id="plus" class="plus">＋</button>
                    </div>
                    <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">
                    <div class="cart-btn-wrapper">
                      <?php if ( is_user_logged_in() ) : ?>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <button type="submit" class="btn01">カートに入れる</button>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <button type="submit" class="btn01">Add Cart</button>
                        <?php endif; ?>
                      <?php else : ?>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <p style="color: #f00; margin-bottom: 1rem;">ログイン後にご注文が可能になります</p>
                          <button type="submit" class="btn01" style="opacity: .7; pointer-events: none; ">カートに入れる</button>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <p style="color: #f00; margin-bottom: 1rem;">You will be able to place your order after logging in</p>
                          <button type="submit" class="btn01" style="opacity: .7; pointer-events: none; ">Add Cart</button>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </form>
                </div>

                <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                  <script>
                    document.addEventListener('DOMContentLoaded', function() {
                      var quantityInput = document.getElementById('quantity');
                      var minusButton = document.getElementById('minus');
                      var plusButton = document.getElementById('plus');
                      var addToCartForm = document.getElementById('add-to-cart-form');

                      minusButton.addEventListener('click', function() {
                        var currentVal = parseInt(quantityInput.value, 10);
                        if (currentVal > 1) {
                          quantityInput.value = currentVal - 1;
                        }
                      });

                      plusButton.addEventListener('click', function() {
                        var currentVal = parseInt(quantityInput.value, 10);
                        quantityInput.value = currentVal + 1;
                      });

                      addToCartForm.addEventListener('submit', function(event) {
                        event.preventDefault();

                        var formData = new FormData(addToCartForm);
                        formData.append('action', 'woocommerce_add_to_cart');

                        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                          method: 'POST',
                          body: formData,
                          credentials: 'same-origin'
                        })
                        .then(response => response.json())
                        .then(data => {
                          if (data.error && data.product_url) {
                            window.location = data.product_url;
                            return;
                          }

                          // カートに商品が正常に追加された場合の処理
                          alert('商品がカートに追加されました');
                          // カートの内容を更新する（必要に応じて）
                          // location.reload(); // ページをリロードする場合
                        })
                        .catch(error => {
                          console.error('Error:', error);
                        });
                      });
                    });
                  </script>
                <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                  <script>
                    document.addEventListener('DOMContentLoaded', function() {
                      var quantityInput = document.getElementById('quantity');
                      var minusButton = document.getElementById('minus');
                      var plusButton = document.getElementById('plus');
                      var addToCartForm = document.getElementById('add-to-cart-form');

                      minusButton.addEventListener('click', function() {
                        var currentVal = parseInt(quantityInput.value, 10);
                        if (currentVal > 1) {
                          quantityInput.value = currentVal - 1;
                        }
                      });

                      plusButton.addEventListener('click', function() {
                        var currentVal = parseInt(quantityInput.value, 10);
                        quantityInput.value = currentVal + 1;
                      });

                      addToCartForm.addEventListener('submit', function(event) {
                        event.preventDefault();

                        var formData = new FormData(addToCartForm);
                        formData.append('action', 'woocommerce_add_to_cart');

                        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                          method: 'POST',
                          body: formData,
                          credentials: 'same-origin'
                        })
                        .then(response => response.json())
                        .then(data => {
                          if (data.error && data.product_url) {
                            window.location = data.product_url;
                            return;
                          }

                          // カートに商品が正常に追加された場合の処理
                          alert('Product added to cart');
                          // カートの内容を更新する（必要に応じて）
                          // location.reload(); // ページをリロードする場合
                        })
                        .catch(error => {
                          console.error('Error:', error);
                        });
                      });
                    });
                  </script>
                <?php endif; ?>

  
                <p class="txt">
                  <?php echo wp_kses_post(nl2br($product->get_description())); ?>
                </p>
  
                <div class="item-infomation">
                  <?php
                    global $product;
                    $product_id = $product->get_id(); // 商品IDを取得

                    $product_number = get_field('product_number', $product_id);
                    $product_size = get_field('product_size', $product_id);
                    $product_unit = get_field('product_unit', $product_id);
                    $product_case_size = get_field('product_case-size', $product_id);
                    $product_material = get_field('product_material', $product_id);
                    $product_allergy = get_field('product_allergy', $product_id);
                    $product_best_before = get_field('product_best-before', $product_id);
                    $product_preservation = get_field('product_preservation', $product_id);
                  ?>
                  <table>
                    <?php if ($product_number): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>商品管理番号</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Product Number</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_number); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_size): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>1個サイズ(入数)<br class="u-pc">／寸法</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>1 piece size (Qty)<br class="u-pc">／Dimensions</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_size); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_unit): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>注文単位</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Ordering Unit</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_unit); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_case_size): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>ケースサイズ／<br>荷姿サイズ(mm)</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Case Size／<br>Package Size(mm)</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_case_size); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_material): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>原材料名</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Ingredient Name</th>
                        <?php endif; ?>
                        <td><?php echo nl2br(esc_html($product_material)); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_allergy): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>アレルギー</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Allergy</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_allergy); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_best_before): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>賞味期限</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>Expiration Date</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_best_before); ?></td>
                      </tr>
                    <?php endif; ?>
                    <?php if ($product_preservation): ?>
                      <tr>
                        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                          <th>保存方法</th>
                        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                          <th>How to Save</th>
                        <?php endif; ?>
                        <td><?php echo esc_html($product_preservation); ?></td>
                      </tr>
                    <?php endif; ?>
                  </table>
                </div>
  
              </div><!-- /.detail-content -->
  
            </div><!-- /.item-content -->
  
        </section><!-- /.p-itemlis -->

        <div class="product-recommend">
          <div class="head-ttl">
            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <h2>こちらもおすすめ</h2>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <h2>Recommed</h2>
            <?php endif; ?>
          </div>

          <div class="recommend_swiper">

            <div class="swiper-wrapper">

            <?php
              // ACFのカスタムフィールドから商品IDを取得
              $product_recommend_ids = get_field('product_recommend');

              if ($product_recommend_ids):
                  foreach ($product_recommend_ids as $product_id):
                      $product = wc_get_product($product_id);
                      if ($product):
                          $product_url = get_permalink($product_id);
                          $product_image_id = $product->get_image_id();
                          $product_image_url = wp_get_attachment_image_url($product_image_id, 'full');
                          $product_title = $product->get_name();
                          ?>
                          <div class="product-box swiper-slide">
                            <a href="<?php echo esc_url($product_url); ?>">
                              <div class="img-box obj-fit"><img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_title); ?>"></div>
                              <p><?php echo esc_html($product_title); ?></p>
                            </a>
                          </div>
                          <?php
                      endif;
                  endforeach;
              endif;
              ?>


            </div><!-- /.swiper-wrapper -->

            <div class="swiper-scrollbar"></div>
            
          </div><!-- /.recommend_swiper -->

        </div><!-- /.product-recommend -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>