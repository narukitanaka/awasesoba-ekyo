<?php get_header(); ?>
<main>

  <div class="flow-btn"><a href="#"></a></div>

  <div class="content-wrap p-under">
    <div class="page-common-asshirai"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/ashirai03.svg" alt=""></div></div>
    <div class="inner content-flex">

      <?php get_sidebar(); ?>

      <div class="contents p-policy">

        <div class="under-mv">
          <div class="img-box obj-fit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" media="(max-width: 769px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/under-mv_common.jpg" alt="">
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <h1>プライバシポリシー</h1>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <h1>Privacy Policy</h1>
              <?php endif; ?>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
          <section class="p-policy_wrap01">
            <div class="block">
              <h3>1. 個人情報の定義</h3>
              <p>
                本プライバシーポリシーにおいて、個人情報とは、個人情報保護法第2条第1項により定義された個人情報、すなわち、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含みます。）、もしくは個人識別符号が含まれる情報を意味するものとします。
              </p>
            </div>
            <div class="block">
              <h3>2. 個人情報の利用目的</h3>
              <p>当ショップは、お客様の個人情報を、以下の目的で利用致します。</p>
              <ul>
                <li>（１） 当ショップサービスの提供のため</li>
                <li>（２） 当ショップサービスに関するご案内、お問い合わせ等への対応のため</li>
                <li>（３） 当ショップの商品、サービス等のご案内のため</li>
                <li>
                  （４）
                  当ショップサービスに関する当ショップの規約、ポリシー等（以下「規約等」といいます。）に違反する行為に対する対応のため
                </li>
                <li>（５） 当ショップサービスに関する規約等の変更などを通知するため</li>
                <li>（６） 当ショップサービスの改善、新サービスの開発等に役立てるため</li>
                <li>
                  （７） 当ショップサービスに関連して、個別を識別できない形式に加工した統計データを作成するため
                </li>
                <li>（８） その他、上記利用目的に付随する目的のため</li>
              </ul>
            </div>
            <div class="block">
              <h3>3. 個人情報利用目的の変更</h3>
              <p>
                当ショップは、個人情報の利用目的を、関連性を有すると合理的に認められる範囲内において変更することがあり、変更した場合にはお客様に通知又は公表します。
              </p>
            </div>
            <div class="block">
              <h3>4. 個人情報利用の制限</h3>
              <p>
                当ショップは、個人情報保護法その他の法令により許容される場合を除き、お客様の同意を得ず、利用目的の達成に必要な範囲を超えて個人情報を取り扱いません。但し、次の場合はこの限りではありません。
              </p>
              <ul>
                <li>（１） 法令に基づく場合</li>
                <li>
                  （２） 人の生命、身体又は財産の保護のために必要がある場合であって、お客様の同意を得ることが困難であるとき
                </li>
                <li>
                  （３）
                  公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、お客様の同意を得ることが困難であるとき
                </li>
                <li>
                  （４）
                  国の機関もしくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、お客様の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
                </li>
              </ul>
            </div>
            <div class="block">
              <h3>5. 個人情報の適正な取得</h3>
              <p>当ショップは、適正に個人情報を取得し、偽りその他不正の手段により取得しません。</p>
            </div>
            <div class="block">
              <h3>6. 個人情報の安全管理</h3>
              <p>
                当ショップは、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、個人情報の安全管理が図られるよう、当ショップの従業員に対し、必要かつ適切な監督を行います。また、当ショップは、個人情報の取扱いの全部又は一部を委託する場合は、委託先において個人情報の安全管理が図られるよう、必要かつ適切な監督を行います。
              </p>
            </div>
            <div class="block">
              <h3>7. 第三者提供</h3>
              <p>
                当ショップは、個人情報保護法その他の法令に基づき開示が認められる場合を除くほか、あらかじめお客様の同意を得ないで、個人情報を第三者に提供しません。但し、次に掲げる場合は上記に定める第三者への提供には該当しません。
              </p>
              <ul>
                <li>
                  （１）
                  当ショップが利用目的の達成に必要な範囲内において個人情報の取扱いの全部又は一部を委託することに伴って個人情報を提供する場合
                </li>
                <li>（２） 合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
                <li>（３） 個人情報保護法の定めに基づき共同利用する場合</li>
              </ul>
            </div>
            <div class="block">
              <h3>8. 個人情報の開示</h3>
              <p>
                当ショップは、お客様から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、お客様ご本人からのご請求であることを確認の上で、お客様に対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当ショップが開示の義務を負わない場合は、この限りではありません。
              </p>
            </div>
            <div class="block">
              <h3>9. 個人情報の訂正等</h3>
              <p>
                当ショップは、お客様から、個人情報が真実でないという理由によって、個人情報保護法の定めに基づきその内容の訂正、追加又は削除（以下「訂正等」といいます。）を求められた場合には、お客様ご本人からのご請求であることを確認の上で、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、その旨をお客様に通知します（訂正等を行わない旨の決定をしたときは、お客様に対しその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当ショップが訂正等の義務を負わない場合は、この限りではありません。
              </p>
            </div>
            <div class="block">
              <h3>10. 個人情報の利用停止等</h3>
              <p>
                当ショップは、お客様から、お客様の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由又は偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合において、そのご請求に理由があることが判明した場合には、お客様ご本人からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等を行い、その旨をお客様に通知します。但し、個人情報保護法その他の法令により、当ショップが利用停止等の義務を負わない場合は、この限りではありません。
              </p>
            </div>
            <div class="block">
              <h3>11. Cookie（クッキー）その他の技術の利用</h3>
              <p>
                （１）
                当ショップのサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、当ショップによる当ショップのサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいユーザーは、ウェブブラウザの設定を変更することによりCookieを無効化することができます。但し、Cookieを無効化すると、当ショップのサービスの一部の機能をご利用いただけなくなる場合があります。<br>
                （２） 当ショップは、当ショップサービスが提供するサービスの利用状況等を調査・分析するため、本サービス上に
                Google LLCが提供する Google
                アナリティクスを利用しています。Googleアナリティクスでデータが収集、処理される仕組みその他Googleアナリティクスの詳しい情報につきましては、同社のサイトをご覧ください。<br>
                Google アナリティクス 利用規約：<a href="https://www.google.com/analytics/terms/jp.html" target="_blank">https://www.google.com/analytics/terms/jp.html</a><br>
                お客様が Google パートナーのサイトやアプリを使用する際の Google によるデータ使用：<a href="https://www.google.com/intl/ja/policies/privacy/partners/" target="_blank">https://www.google.com/intl/ja/policies/privacy/partners/</a><br>
                Google プライバシーポリシー：<a href="http://www.google.com/intl/ja/policies/privacy/" target="_blank">http://www.google.com/intl/ja/policies/privacy/</a><br>
                なお、お客様はご自身のデータが Google アナリティクスで使用されることを望まない場合は、Google 社の提供する
                Google アナリティクス オプトアウト アドオンをご利用ください。<br>
                Google アナリティクス オプトアウト アドオン：<a href="https://tools.google.com/dlpage/gaoptout" target="_blank">https://tools.google.com/dlpage/gaoptout</a> <br>
                （３） 本サービスでは「Google Analyticsの広告向けの機能」を有効にしており、下記の機能を利用し、広告やサイト改善のためDoubleClick
                CookieなどのサードパーティCookieを利用しています。<br>
                Google Analyticsリマーケティング<br>
                Google Analyticsのユーザー属性レポートとユーザー属性レポートとインタレスト レポート<br>
                これにより、本サービスではGoogle
                AnalyticsのCookieを利用して、お客様の年齢・性別・閲覧履歴・本サービスに関する関心の傾向をおおよそ把握するための分析が可能となっております。<br>
                「Google
                Analyticsの広告向けの機能」を使用されることを望まない場合は、設定によってトラッキングを無効にすることが可能です。Google
                Analytics オプトアウト アドオンをブラウザにインストールされると無効にすることができます。
              </p>
            </div>
            <div class="block">
              <h3>12. お問い合わせ</h3>
              <p>
                開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、当ショップの「特定商取引法に基づく表記」内にある連絡先へご連絡いただくか、ショップページ内のお問い合わせフォームよりお問い合わせください。
              </p>
            </div>
            <div class="block">
              <h3>13. 継続的改善</h3>
              <p>
                当ショップは、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本プライバシーポリシーを変更することがあります。
              </p>
            </div>
          </section><!-- /.p-policy_wrap01 -->
        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
          <section class="p-policy_wrap01">
            <div class="block">
              <h3>1. Definition of Personal Information</h3>
              <p>
                In this Privacy Policy, personal information means personal information as defined by Article 2, Paragraph 1 of the Personal Information Protection Act, that is, information about a living individual that can identify a specific individual by the name, date of birth, or other description contained in the information (including information that can be easily matched with other information and thereby identify a specific individual), or information that contains a personal identification code.
              </p>
            </div>
            <div class="block">
              <h3>2. Purpose of Use of Personal Information</h3>
              <p>This shop will use your personal information for the following purposes.</p>
              <ul>
                <li>(1) To provide our shop services</li>
                <li>(2) To provide information about our shop services and respond to inquiries, etc.</li>
                <li>(3) To provide information about our shop's products, services, etc.</li>
                <li>(4) To respond to actions that violate our shop's terms, policies, etc. (hereinafter referred to as "Terms, etc.") regarding our shop services</li>
                <li>(5) To notify changes to the terms, etc. regarding our shop services</li>
                <li>(6) To help improve our shop services and develop new services, etc.</li>
                <li>(7) To create statistical data related to our shop services that has been processed into a format that does not identify individuals</li>
                <li>(8) For other purposes incidental to the above-mentioned purposes of use</li>
              </ul>
            </div>
            <div class="block">
              <h3>3. Changes to the purpose of use of personal information</h3>
              <p>
                Our shop may change the purpose of use of personal information to the extent that it is reasonably deemed relevant, and will notify or announce the change to customers.
              </p>
            </div>
            <div class="block">
              <h3>4. Restrictions on the use of personal information</h3>
              <p>
                Our shop will not handle personal information beyond the scope necessary to achieve the purpose of use without the customer's consent, except as permitted by the Personal Information Protection Act and other laws and regulations. However, this does not apply in the following cases.
              </p>
              <ul>
                <li>(1) When required by law</li>
                <li>(2) When necessary to protect the life, body, or property of a person, and it is difficult to obtain the customer's consent</li>
                <li>(3) When particularly necessary to improve public health or promote the healthy development of children, and it is difficult to obtain the customer's consent</li>
                <li>(4) When it is necessary to cooperate with a national institution, local government, or a person commissioned by them to carry out duties prescribed by law, and obtaining the customer's consent is likely to hinder the performance of such duties</li>
              </ul>
            </div>
            <div class="block">
              <h3>5. Appropriate Acquisition of Personal Information</h3>
              <p>Our shop will acquire personal information appropriately and will not acquire it by false or other illegal means.</p>
            </div>
            <div class="block">
              <h3>6. Safety Management of Personal Information</h3>
              <p>
                Our shop will provide necessary and appropriate supervision to our employees to ensure the safety management of personal information against the risks of loss, destruction, falsification, and leakage of personal information. In addition, when our shop entrusts all or part of the handling of personal information to a third party, we will provide necessary and appropriate supervision to ensure the safety management of personal information to the third party.
              </p>
            </div>
            <div class="block">
              <h3>7. Provision to third parties</h3>
              <p>
                Our shop will not provide personal information to third parties without the customer's prior consent, except when disclosure is permitted under the Personal Information Protection Act or other laws. However, the following cases do not fall under the provision to third parties as specified above.
              </p>
              <ul>
                <li>(1) When personal information is provided in connection with the entrustment of all or part of the handling of personal information by our shop to the extent necessary to achieve the purpose of use</li>
                <li>(2) When personal information is provided in connection with business succession due to a merger or other reason</li>
                <li>(3) When joint use is made in accordance with the provisions of the Personal Information Protection Act</li>
              </ul>
            </div>
            <div class="block">
              <h3>8. Disclosure of personal information</h3>
              <p>
                When a customer requests disclosure of personal information in accordance with the provisions of the Personal Information Protection Act, our shop will disclose the information to the customer without delay after confirming that the request came from the customer himself/herself (if the personal information does not exist, we will notify the customer to that effect). However, this does not apply when our shop is not obligated to disclose the information under the Personal Information Protection Act or other laws.
              </p>
            </div>
            <div class="block">
              <h3>9. Correction of personal information, etc.</h3>
              <p>
                If the shop is requested by a customer to correct, add, or delete (hereinafter referred to as "correction, etc.") personal information based on the provisions of the Personal Information Protection Act because the personal information is not true, the shop will confirm that the request is from the customer himself, conduct the necessary investigation without delay to the extent necessary to achieve the purpose of use, correct the personal information based on the results, and notify the customer to that effect (if it is decided not to make corrections, etc., the customer will be notified to that effect). However, this does not apply if the shop is not obligated to make corrections, etc. under the Personal Information Protection Act or other laws and regulations.
              </p>
            </div>
            <div class="block">
              <h3>10. Suspension of use of personal information, etc.</h3>
              <p>
                If a customer requests the suspension or deletion of the use of their personal information (hereinafter referred to as "suspension of use, etc.") based on the provisions of the Personal Information Protection Act because their personal information is being handled beyond the scope of the purpose of use previously announced or because it was obtained by false or other illegal means, and if it is found that the request is justified, the shop will suspend the use of the personal information without delay after confirming that the request is made by the customer himself, and notify the customer of this. However, this does not apply if the shop is not obligated to suspend use, etc. under the Personal Information Protection Act or other laws and regulations.
              </p>
            </div>
            <div class="block">
              <h3>11. Use of cookies and other technologies</h3>
              <p>
                (1) Our shop's services may use cookies and similar technologies. These technologies are useful for our shop to understand the usage status of our shop's services, etc., and contribute to improving our services. Users who wish to disable cookies can disable cookies by changing the settings of their web browser. However, disabling cookies may prevent you from using some of the functions of our shop's services.<br>
                (2) Our shop uses Google Analytics provided by Google LLC on this service to investigate and analyze the usage status of the services provided by our shop service. For more information on how data is collected and processed by Google Analytics and other details on Google Analytics, please visit the company's website.<br>
                Google Analytics Terms of Use：<br>
                <a href="https://www.google.com/analytics/terms/jp.html" target="_blank">https://www.google.com/analytics/terms/jp.html</a><br>
                Google's use of data when you use a Google partner's site or app: ：<br>
                <a href="https://www.google.com/intl/ja/policies/privacy/partners/" target="_blank">https://www.google.com/intl/ja/policies/privacy/partners/</a><br>
                Google Privacy Policy：<br>
                <a href="http://www.google.com/intl/ja/policies/privacy/" target="_blank">http://www.google.com/intl/ja/policies/privacy/</a><br>
                If you do not want your data to be used by Google Analytics, please use the Google Analytics Opt-out Add-on provided by Google.<br>
                Google Analytics Opt-out Add-on：<br>
                <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">https://tools.google.com/dlpage/gaoptout</a> <br>
                (3) This service has enabled the "Google Analytics Advertising Functions" and uses the following functions to use third-party cookies such as DoubleClick Cookies for advertising and site improvement.<br>
                Google Analytics Remarketing<br>
                Google Analytics User Attributes Report and User Attributes Report and Interest Report<br>
                This allows this service to use Google Analytics cookies to perform analysis to roughly grasp the customer's age, gender, browsing history, and interest trends in this <br>
                If you do not want to use the "Google Analytics Advertising Functions", you can disable tracking by setting it. You can disable it by installing the Google Analytics Opt-out Add-on in your browser.
              </p>
            </div>
            <div class="block">
              <h3>12. Contact Us</h3>
              <p>
                For requests for disclosure, opinions, questions, complaints, and other inquiries regarding the handling of personal information, please contact the contact information in our shop's "Notation Based on the Specified Commercial Transactions Act" or contact us via the inquiry form on the shop page.
              </p>
            </div>
            <div class="block">
              <h3>13. Continuous Improvement</h3>
              <p>
                Our shop will review
              </p>
            </div>
          </section><!-- /.p-policy_wrap01 -->
        <?php endif; ?>

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>