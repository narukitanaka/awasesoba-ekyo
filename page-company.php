<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-contact">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h1>会社概要</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h1>Company</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-company_wrap01">
          <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
            <table>
              <tr>
                <th>会社名</th>
                <td>有限会社アワセそば</td>
              </tr>
              <tr>
                <th>代表者名</th>
                <td>金城 康貴(きんじょう やすたか)</td>
              </tr>
              <tr>
                <th>創業</th>
                <td>1947年 4月 創業75年</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>麺製品の製造販売(乾麺、生めん、ゆでめん、LLめん、そばだし)</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>〒904-2163　<br class="u-sp">沖縄県沖縄市大里3-13-46</td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>awasesoba@vesta.ocn.ne.jp</td>
              </tr>
              <tr>
                <th>営業時間</th>
                <td>8:30～17:00</td>
              </tr>
              <tr>
                <th>定休日</th>
                <td>土日・祝日・正月休み</td>
              </tr>
            </table>
          <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
            <table>
              <tr>
                <th>Company Name</th>
                <td>Awase Soba Co., Ltd.</td>
              </tr>
              <tr>
                <th>Representative Name</th>
                <td>Kinjo Yasutaka</td>
              </tr>
              <tr>
                <th>Establishment</th>
                <td>April 1947 Established 75 years</td>
              </tr>
              <tr>
                <th>Business</th>
                <td>Production and sales of noodle products (dried noodles, fresh noodles, boiled noodles, LL noodles, buckwheat dashi)</td>
              </tr>
              <tr>
                <th>Location</th>
                <td>〒904-2163　<br class="u-sp">3-13-46 Osato, Okinawa City, Okinawa</td>
              </tr>
              <tr>
                <th>Email Address</th>
                <td>awasesoba@vesta.ocn.ne.jp</td>
              </tr>
              <tr>
                <th>Business Hours</th>
                <td>8:30～17:00</td>
              </tr>
              <tr>
                <th>Regular Holiday</th>
                <td>
                  Saturdays, Sundays, holidays, and New Year holidays
                </td>
              </tr>
            </table>
          <?php endif; ?>
        </section><!-- /.p-company_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>