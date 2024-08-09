<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-gude">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <h1>ご利用案内</h1>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-guide_wrap01">

          <div class="top-message fadeIn">
            <p>当店は、会員登録制の通販サイトです<br><span>会員登録後に購入が可能となります</span></p>
            <div class="ashirai01 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-1.svg" alt=""></div>
            <div class="ashirai02 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai01-2.svg" alt=""></div>
          </div><!-- /.top-message -->

          <div class="block">
            <div class="head-ttl">
              <h2>商品の購入方法</h2>
            </div>
            <div class="box">ログイン</div>
            <div class="arrow"></div>
            <div class="box">商品を選びカートに入れる</div>
            <div class="arrow"></div>
            <div class="box">支払い方法、配送先を確認し注文</div>
            <div class="arrow"></div>
            <div class="box">注文受付完了<br>（注文受付メールの自動返信が届く）</div>
          </div><!-- .block -->

          <div class="block">
            <div class="head-ttl">
              <h2>ご注意事項</h2>
            </div>
            <p>支払いはクレジットカード決済のみです</p>
            <p>商品の返品・交換には初期不良の場合以外では応じられません。</p>
            <p>
              決済完了後、14営業日以内(土日祝日を除く)に発送いたします。<br>
              天候不順・配送業者の都合・その他何らかの理由により 遅延する場合はメール等でお知らせいたします。
            </p>
          </div><!-- .block -->

        </section><!-- /.p-guide_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>