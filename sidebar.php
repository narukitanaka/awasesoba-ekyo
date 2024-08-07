<aside>

  <div class="side-login">
    <p class="ttl">ログイン</p>
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
        <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
      </p>
      <p>
        <a href="<?php echo wp_lostpassword_url(); ?>">パスワードをお忘れの方</a>
      </p>
    </form>
  </div><!--side-login-->

  <div class="side-cart">
    <p class="ttl">カート</p>
    <div class="box flex">
      <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy-item01.jpg" alt=""></div>
      <p>商品名入りますテキストテキスト</p>
    </div>
  </div><!-- /.side-cart -->

  <div class="side-cate">
    <p>商品カテゴリ</p>
    <nav>
      <ul>
        <li><a href="archive-product.html">全ての商品</a></li>
        <li><a href="archive-product.html">生麺</a></li>
        <li><a href="archive-product.html">乾麺</a></li>
        <li><a href="archive-product.html">LL麺</a></li>
        <li><a href="archive-product.html">だし</a></li>
      </ul>
    </nav>
  </div><!-- /.side-cate -->

  <div class="btn-wrap"><a class="btn02" href="faq.html">よくあるご質問</a></div>
  <div class="btn-wrap"><a class="btn02" href="about.html">アワセそばについて</a></div>

</aside>