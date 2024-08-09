<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-faq">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <h1>よくあるご質問</h1>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-faq_wrap01">

          <div class="anker_wrap flex">
            <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#order"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-order.svg" alt="">ご注文・お支払いについて</a>                
            <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#shipping"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-shipping.svg" alt="">配送・送料について</a>                
            <a class="btn02 fadeIn" href="<?php echo home_url('/'); ?>/faq#return"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-return.svg" alt="">返品・交換について</a>                
          </div>

          <div id="order" class="anker-point">
            <div class="block">
              <h2>ご注文・お支払いについて</h2>
              <div class="qa-list mts">
                <dl class="qa">
                  <dt>電話やFAXで注文できますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>ご注文方法はインターネットからのご注文のみとなっております。お電話やFAX、メールでのご注文は承っておりませんのでご了承ください。</p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>お支払い方法は何がありますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      当店ではクレジットカード・代金引換をご利用いただけます。<br>
                      ※代引き手数料（330円）はお客様負担
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>注文してからどれくらいで発送されますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      ご注文・決済完了後、定休日を除く5営業日以内に発送いたします。<br>
                      ※製造・ご注文の状況により、発送日が前後する可能性がございます。あらかじめご了承ください。<br>
                      ※お急ぎの方は、お問い合わせフォームよりご相談ください。
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>注文内容の変更/キャンセルはできますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>商品の発送前でしたら対応可能な場合もございます。一度、<a href="contact.html">お問合せフォーム</a>よりご相談ください。</p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>注文したのですが、注文確認のメールが届かないです。</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      当社からのご注文受付メールは、お客様のご注文完了後、システムにより自動的に配信されます。ご注文いただいてから1日以上経っても確認メールが届かない場合は、下記の点をご確認ください。<br>
                      ●ご注文時に登録いただきましたメールアドレスに誤り・変更はございませんか？<br>
                      ・特に@以降の間違いが多くございます。「@***.ne.jp」<br>
                      ・ハイフン「-」とアンダーバー「_ 」の入力にご注意ください。<br>
                      ●受信拒否の設定をされていませんか？<br>
                      ・特にスマートフォンにおいて、受信先の設定をされている場合がございます。<br>
                      設定をご確認いただき、受信先を指定されている場合は、「central-k@bbq-okinawa.com」からのメールを受信ドメインにご登録ください。
                    </p> -->
                  </dd>
                </dl>
              </div><!-- /.qa-list -->
            </div><!-- /.block -->
          </div>

          <div id="shipping" class="anker-point">
            <div class="block">
              <h2>配送・送料について</h2>
              <div class="qa-list mts">
                <dl class="qa">
                  <dt>送料、手数料はかかりますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      全国一律2,000円<br>
                      ※10,000円以上のご購入で送料無料<br>
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>日付指定できますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      お届け日は、ご注文日の7日以降よりご希望の日時をお選びいただけます。 お届け日を指定しない場合は、ご注文・決済完了後、土日祝日を除く5営業日以内に発送いたします。<br>
                      ※お急ぎの方は、<a href="contact.html">お問合せフォーム</a>よりご相談ください。
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>複数の配送先に送りたいのですが、できますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      1回のご注文内でお届け先を分けることはできかねます。複数の配送先へのお届けをご希望の場合は、お手数ですがそれぞれのお届け先ごとにご注文をお願いいたします。
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>別々に注文した商品を同梱できますか？</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      複数回ご注文いただき、かつ発送準備前で、下記の条件に該当する場合は、送料を調整し1件分のご注文としておまとめ可能な場合もございます。一度、お問合せフォームよりご相談ください。<br>
                      ・お届け先やお届け日などの情報が同一の場合<br>
                      ・お客さまから同梱を希望される旨をご連絡をいただいた場合<br>
                    </p> -->
                  </dd>
                </dl>
              </div><!-- /.qa-list -->
            </div><!-- /.block -->
          </div>

          <div id="return" class="anker-point">
            <div class="block">
              <h2>返品・交換について</h2>
              <div class="qa-list mts">
                <dl class="qa">
                  <dt>商品を返品・交換したいです。</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      商品到着後のお客様のご都合による返品・交換は、原則としてお受けしておりません。
                      不良品の場合は、商品到着から1週間以内の申し出で返品対応いたします。
                    </p> -->
                  </dd>
                </dl>
                <dl class="qa">
                  <dt>届いた商品が違うものでした。</dt>
                  <dd>
                    <p>
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <!-- <p>
                      商品の欠陥など、当店の不手際により不備が発生した場合は、代品がある場合には交換、無い場合にはご返品・ご返金として対応いたします。<br>
                      商品到着後1週間以内に、お問合せフォームまたはお電話にてご連絡をいただけますようお願い申し上げます。その際お手数ですが、①お名前、②お電話番号、③受注番号（「ご注文確認メール」に記載されております）をお知らせください。手続きの手順について、ご案内させていただきます。
                    </p> -->
                  </dd>
                </dl>
              </div><!-- /.qa-list -->
            </div><!-- /.block -->
          </div>

        </section><!-- /.p-faq_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>