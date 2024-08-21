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
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h1>ご利用案内</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h1>User Guide</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-guide_wrap01">

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

          <div class="block">
            <div class="head-ttl">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h2>商品の購入方法</h2>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h2>How to <br>purchase products</h2>
              <?php endif; ?>
            </div>

            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <div class="box">ログイン</div>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <div class="box">Log in</div>
            <?php endif; ?>
            <div class="arrow"></div>

            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <div class="box">商品を選びカートに入れる</div>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <div class="box">Select a product and add it to your cart</div>
            <?php endif; ?>
            <div class="arrow"></div>

            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <div class="box">支払い方法、配送先を確認し注文</div>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <div class="box">Confirm the payment method and shipping address and place your order</div>
            <?php endif; ?>
            <div class="arrow"></div>

            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <div class="box">注文受付完了<br>（注文受付メールの自動返信が届く）</div>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <div class="box">Order acceptance complete<br>(You will receive an automatic reply to your order acceptance email)</div>
            <?php endif; ?>
            
          </div><!-- .block -->

          <div class="block">
            <div class="head-ttl">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h2>ご注意事項</h2>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h2>Notes</h2>
              <?php endif; ?>
            </div>
            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <p>支払いはクレジットカード決済のみです</p>
              <p>商品の返品・交換には初期不良の場合以外では応じられません。</p>
              <p>
                決済完了後、14営業日以内(土日祝日を除く)に発送いたします。<br>
                天候不順・配送業者の都合・その他何らかの理由により 遅延する場合はメール等でお知らせいたします。
              </p>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <p>Payment must be by credit card.</p>
              <p>We cannot accept returns or exchanges of products except in cases of initial defects.</p>
              <p>
                We will ship within 14 business days (excluding Saturdays, Sundays, and holidays) after payment is complete.<br>
                If there is a delay due to bad weather, the convenience of the delivery company, or any other reason, we will notify you by email.
              </p>
            <?php endif; ?>
          </div><!-- .block -->

        </section><!-- /.p-guide_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>