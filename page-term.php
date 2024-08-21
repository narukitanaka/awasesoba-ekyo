<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-term">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h1>特定商取引法に基づく表記</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h1>Description based on the Specified Commercial Transactions Act</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-term_wrap01">
        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
          <table>
            <tr>
              <th>販売業者</th>
              <td>有限会社アワセそば</td>
            </tr>
            <tr>
              <th>運営統括責任者</th>
              <td>金城 康貴(きんじょう やすたか)</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>〒904-2163　<br class="u-sp">沖縄県沖縄市大里3-13-46</td>
            </tr>
            <tr>
              <th>TEL</th>
              <td>098-937-4457</td>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td>awasesoba@vesta.ocn.ne.jp</td>
            </tr>
            <tr>
              <th>取扱商品</th>
              <td>乾麺、生めん、ゆでめん、LLめん、そばだし</td>
            </tr>             
            <tr>
              <th>商品代金以外の<br>必要料金</th>
              <td>販売価格とは別に配送料がかかります。</td>
            </tr>
            <tr>
              <th>送料について</th>
              <td>
                テキストテキスト<br>
                テキストテキスト
              </td>
            </tr>
            <tr>
              <th>申し込みの有効期限</th>
              <td>原則、受注確認（受注確認の為の自動送信メール発信）後、5日間とします。</td>
            </tr>
            <tr>
              <th>不良品</th>
              <td>商品到着後速やかにご連絡ください。商品に欠陥がある場合を除き、返品には応じかねますのでご了承ください。 </td>
            </tr>
            <tr>
              <th>販売数量</th>
              <td>特に指定はございません（商品によって設定あり）</td>
            </tr>
            <tr>
              <th>引き渡し時期</th>
              <td>
                決済完了後、14営業日以内(土日祝日を除く)に発送いたします。<br>
                天候不順・配送業者の都合・その他何らかの理由により 遅延する場合はメール等でお知らせいたします。
              </td>
            </tr>
            <tr>
              <th>お支払い方法</th>
              <td>クレジットカード</td>
            </tr>
            <tr>
              <th>返品・交換について</th>
              <td>
                商品の返品・交換には初期不良の場合以外では応じられません。
                初期不良、発送商品間違いの場合、当店着払いにて対応いたします。
              </td>
            </tr>
          </table>
        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
          <table>
            <tr>
              <th>Seller</th>
              <td>Awase Soba Co., Ltd.</td>
            </tr>
            <tr>
              <th>Operating manager</th>
              <td>Kinjo Yasutaka</td>
            </tr>
            <tr>
              <th>Location</th>
              <td>〒904-2163　<br class="u-sp">3-13-46 Ozato, Okinawa City, Okinawa Prefecture</td>
            </tr>
            <tr>
              <th>TEL</th>
              <td>098-937-4457</td>
            </tr>
            <tr>
              <th>Email address</th>
              <td>awasesoba@vesta.ocn.ne.jp</td>
            </tr>
            <tr>
              <th>Products</th>
              <td>Dried noodles, fresh noodles, boiled noodles, LL noodles, soba dashi</td>
            </tr>             
            <tr>
              <th>Required fees other than product price</th>
              <td>Shipping fee will be charged in addition to the sales price.</td>
            </tr>
            <tr>
              <th>Shipping fee</th>
              <td>
                text text
              </td>
            </tr>
            <tr>
              <th>Application validity period</th>
              <td>In principle, 5 days after order confirmation (automatic email sent to confirm order).</td>
            </tr>
            <tr>
              <th>Defective products</th>
              <td>Please contact us immediately after receiving the product. Please note that we cannot accept returns unless the product is defective. </td>
            </tr>
            <tr>
              <th>Sales quantity</th>
              <td>No specific specifications (set by product)</td>
            </tr>
            <tr>
              <th>Delivery time</th>
              <td>
                After payment is completed, the product will be shipped within 14 business days (excluding Saturdays, Sundays, and holidays).<br>
                If there is a delay due to bad weather, the delivery company's circumstances, or any other reason, we will notify you by email.
              </td>
            </tr>
            <tr>
              <th>Payment methodPayment method</th>
              <td>Credit card</td>
            </tr>
            <tr>
              <th>Returns and Exchanges</th>
              <td>
                Returns and exchanges of products are not accepted except in the case of initial defects. In the case of initial defects or incorrect shipping of the product, we will handle it by cash on delivery.
              </td>
            </tr>
          </table>
        <?php endif; ?>
        </section><!-- /.p-term_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>