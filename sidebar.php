<aside>

  <div class="side-login">
    <p class="ttl">ログイン</p>
    <?php if ( is_user_logged_in() ) : ?>
      <?php
      $current_user = wp_get_current_user();
      ?>
      <div class="now-login">
        <p class="logged-in-message"><?php echo 'こんにちは : ' . esc_html( $current_user->display_name ); ?></p>
        <a href="<?php echo wp_logout_url( get_permalink() ); ?>">ログアウト</a>
      </div>
    <?php else : ?>
      <form name="loginform" id="loginform" action="<?php echo wp_login_url(); ?>" method="post">
        <p class="id">
          <label for="user_login">ログインID<br />
          <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
        </p>
        <p class="pass">
          <label for="user_pass">パスワード<br />
          <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
        </p>
        <p class="submit">
          <input type="submit" name="wp-submit" id="wp-submit" class="btn01 button button-primary" value="ログイン" />
          <input type="hidden" name="redirect_to" value="<?php echo home_url('/my-account'); ?>" />
        </p>
        <p>
          <a href="<?php echo home_url('/'); ?>/my-account/lost-password/">パスワードをお忘れの方</a>
        </p>
      </form>
    <?php endif; ?>
  </div><!--side-login-->

  <!-- <div class="side-cart">
    <p class="ttl">カート</p>
    <div class="box flex">
      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy-item01.jpg" alt=""></div>
      <p>商品名入りますテキストテキスト</p>
    </div>
  </div> -->

  <div class="side-cart">
    <p class="ttl">カート</p>
    <?php
    // WooCommerceのカートオブジェクトを取得
    $cart = WC()->cart;
    
    // カート内の商品をチェック
    if ( $cart->get_cart_contents_count() > 0 ) {
      // カート内の商品をループ
      foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        $product_id = $product->get_id();
        $product_name = $product->get_name();
        $product_permalink = $product->get_permalink();
        $product_thumbnail = $product->get_image();
        ?>
        <div class="box flex">
          <div class="img-box obj-fit">
            <?php echo $product_thumbnail; ?>
          </div>
          <p><a href="<?php echo $product_permalink; ?>"><?php echo esc_html( $product_name ); ?></a></p>
        </div>
        <?php
      }
    } else {
      echo '<p class="no-cartitem">カートに商品がありません。</p>';
    }
    ?>
  </div><!-- /.side-cart -->


  <div class="side-cate">
    <p>商品カテゴリ</p>
    <nav>
      <ul>
        <li><a href="<?php echo home_url('/'); ?>/shop/">全ての商品</a></li>
        <li><a href="<?php echo home_url('/'); ?>/product-category/fresh-noodles/">生麺</a></li>
        <li><a href="<?php echo home_url('/'); ?>/product-category/dried-noodles/">乾麺</a></li>
        <li><a href="<?php echo home_url('/'); ?>/product-category/ll-noodles/">LL麺</a></li>
        <li><a href="<?php echo home_url('/'); ?>/product-category/broth/">だし</a></li>
      </ul>
    </nav>
  </div><!-- /.side-cate -->

  <div class="btn-wrap"><a class="btn02" href="<?php echo home_url('/'); ?>/faq/">よくあるご質問</a></div>
  <div class="btn-wrap"><a class="btn02" href="<?php echo home_url('/'); ?>/about/">アワセそばについて</a></div>

</aside>