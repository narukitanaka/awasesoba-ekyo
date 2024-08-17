<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <!-- favicon -->
  <!-- <link rel="icon" type="image/png" href="images/fav.png" /> -->
  <!-- <meta name="robots" content="index, follow"> -->
  <meta name="format-detection" content="telephone=no">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" >


  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">


  <title>AWSE SOBA from OKINWA</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <div class="wrap-hidden">

    <header id="header" class="header">
    <div class="head-message"><p>完全会員制　沖縄そば「アワセそば」通販サイト</p></div>
      <div class="header-inner inner">
        <div class="header-top">
          <div class="logo img-box colum01">
            <a href="<?php echo home_url('/'); ?>">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/logo03.svg" media="(max-width: 769px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo02.svg" alt="">
              </picture>
            </a>
          </div><!-- /.logo -->
          <div class="search colum02 u-pc">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
              <div>
                  <input type="text" value="" name="s" id="s" placeholder="なにをお探しですか？"/>
                  <input type="hidden" name="post_type" value="product" />
                  <input type="image" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search-btn.svg" />
              </div>
            </form>
          </div><!-- /.search -->
          <div class="colum03">
            <nav>
              <ul>
                <li><a href="<?php echo home_url('/my-account'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-login.svg" alt=""><?php if ( is_user_logged_in() ) : ?>マイページ<?php else : ?>ログイン<?php endif; ?></a></li>
                <li><a href="<?php echo home_url('/cart'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="">カート</a></li>
              </ul>
            </nav>
            <div class="lang-btn u-pc">言語切り替えボタンが入ります</div>
            <div class="u-sp">
              <div class="hamberger-wrap">
                <div class="ham-inner">
                  <div class="hambager-content">
                    <button type="button" class="hambager">
                      <span class="c-line"></span>
                      <span class="c-line"></span>
                      <span class="c-line"></span>
                    </button>
                  </div><!-- /.hambager-content -->
                  <p class="ham-txt">メニュー</p>
                </div>
              </div><!-- hamberger-wrap -->
            </div>
          </div>
        </div><!-- /.header-top -->
        <div class="header-bottom">
          <nav class="u-pc">
            <ul>
              <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
              <li><a href="<?php echo home_url('/'); ?>/shop/">商品一覧</a></li>
              <li><a href="<?php echo home_url('/'); ?>/about/">アワセそばについて</a></li>
              <li><a href="<?php echo home_url('/'); ?>/guide/">ご利用案内</a></li>
              <li><a href="<?php echo home_url('/'); ?>/faq/">よくあるご質問</a></li>
              <li><a href="<?php echo home_url('/'); ?>/contact/">お問い合わせ</a></li>
            </ul>
          </nav>
          <div class="search u-sp">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
              <div>
                <input type="text" value="" name="s" id="s" placeholder="なにをお探しですか？"/>
                <input type="hidden" name="post_type" value="product" />
                <input type="image" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search-btn.svg" />
              </div>
            </form>
          </div><!-- /.search -->
        </div><!-- /.header-bottom -->
      </div><!-- /.header-inner-->
    </header>

    <div class="mega-menu">
      <div class="mega-menu_inner">

        <div class="column column01">
          <nav>
            <ul class="nav01">
              <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
              <li><a href="<?php echo home_url('/'); ?>/about/">アワセそばについて</a></li>
              <li><a href="<?php echo home_url('/'); ?>/shop/">商品一覧</a></li>
              <li><a href="<?php echo home_url('/'); ?>/faq/">よくあるご質問</a></li>
            </ul>
          </nav>
          <nav>
            <ul class="nav02">
              <li><a href="/pages/company/">会社概要</a></li>
              <li><a href="/pages/term/">特定商取引法に基づく表記</a></li>
              <li><a href="/pages/policy/">プライバシーポリシー</a></li>
            </ul>
          </nav>
        </div><!-- /.column-->

        <div class="column column02">
          <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">お問い合わせ</a></div>
        </div><!-- /.column-->

      </div><!-- /.mega-menu_inner -->
    </div><!-- /.mega-menu -->