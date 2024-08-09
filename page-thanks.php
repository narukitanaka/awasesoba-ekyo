<?php get_header(); ?>
<!-- pタグ自動挿入制限 start-->
<?php remove_filter('the_content', 'wpautop'); ?>
<!-- pタグ自動挿入制限 stop -->
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
              <h1>お問い合わせ</h1>
            </picture>
          </div>
        </div><!-- /.under-mv -->

        <section class="p-thanks_wrap01">
          <h2>お問い合わせありがとうございます。</h2>
          <p>
            この度は、有限会社アワセそばへお問い合わせいただき誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、2~3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。<br>
            <br>
            しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。<br>
            迷惑メール設定を行っている場合は 「awasesoba@vesta.ocn.ne.jp」 からのメールを受信出来るよう受信設定の変更をお願い致します。<br>
            <br>
            なお、お急ぎの場合は電話でもご相談を受け付けております。<a href="tel:098-937-4457">098-937-4457</a>までご相談ください。
          </p>
          <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>">TOPへ戻る</a></div>
        </section><!-- /.p-contact_wrap01 -->

      </div><!-- /.contents -->

    </div><!-- /.inner -->
  </div><!-- /.content-wrap-->

</main>

<?php get_footer(); ?>