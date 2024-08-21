<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <meta name="robots" content="noindex">
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

    <header id="header" class="header <?php if ( !is_home() && !is_front_page() ) : ?>border-b<?php endif; ?>">
    
      <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
        <div class="head-message"><p>完全会員制　沖縄そば「アワセそば」通販サイト</p></div>
      <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
        <div class="head-message"><p>Full membership Okinawa soba “Awase-soba” ONLINE STORE</p></div>
      <?php endif; ?>
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
                <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                  <input type="text" value="" name="s" id="s" placeholder="なにをお探しですか？"/>
                <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                  <input type="text" value="" name="s" id="s" placeholder="What are you looking for?"/>
                <?php endif; ?>
                <input type="image" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search-btn.svg" />
              </div>
            </form>
          </div><!-- /.search -->
          <div class="colum03">
            <nav>
              <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                <ul>
                  <li><a href="<?php echo home_url('/my-account'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-login.svg" alt=""><?php if ( is_user_logged_in() ) : ?>マイページ<?php else : ?>ログイン<?php endif; ?></a></li>
                  <li><a href="<?php echo home_url('/cart'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="">カート</a></li>
                </ul>
              <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                <ul>
                  <li><a href="<?php echo home_url('/my-account'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-login.svg" alt=""><?php if ( is_user_logged_in() ) : ?>MyPage<?php else : ?>LogIn<?php endif; ?></a></li>
                  <li><a href="<?php echo home_url('/cart'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="">Cart</a></li>
                </ul>
              <?php endif; ?>
            </nav>
            <div class="lang-btn u-pc">
              <?php echo do_shortcode('[wpml_language_switcher]'); ?>
            </div>
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
                  <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                    <p class="ham-txt">メニュー</p>
                  <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                    <p class="ham-txt">MENU</p>
                  <?php endif; ?>
                </div>
              </div><!-- hamberger-wrap -->
            </div>
          </div>
        </div><!-- /.header-top -->
        <div class="header-bottom">
          <nav class="u-pc">
            <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo home_url('/'); ?>shop/">商品一覧</a></li>
                <li><a href="<?php echo home_url('/'); ?>about/">アワセそばについて</a></li>
                <li><a href="<?php echo home_url('/'); ?>guide/">ご利用案内</a></li>
                <!-- <li><a href="<?php echo home_url('/'); ?>faq/">よくあるご質問</a></li> -->
                <li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
              </ul>
            <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>en/">HOME</a></li>
                <li><a href="<?php echo home_url('/'); ?>shop/">Product List</a></li>
                <li><a href="<?php echo home_url('/'); ?>about/">About Awase Soba</a></li>
                <li><a href="<?php echo home_url('/'); ?>guide/">User Guide</a></li>
                <!-- <li><a href="<?php echo home_url('/'); ?>faq/">FAQ</a></li> -->
                <li><a href="<?php echo home_url('/'); ?>contact/">Contact</a></li>
              </ul>
            <?php endif; ?>
          </nav>
          <div class="search u-sp">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
              <div>
                <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
                  <input type="text" value="" name="s" id="s" placeholder="なにをお探しですか？"/>
                <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
                  <input type="text" value="" name="s" id="s" placeholder="What are you looking for?"/>
                <?php endif; ?>
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

        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
          <div class="column column01">
            <nav>
              <ul class="nav01">
                <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                <li><a href="<?php echo home_url('/'); ?>about/">アワセそばについて</a></li>
                <li><a href="<?php echo home_url('/'); ?>shop/">商品一覧</a></li>
                <li><a href="<?php echo home_url('/'); ?>guide/">ご利用案内</a></li>
                <!-- <li><a href="<?php echo home_url('/'); ?>faq/">よくあるご質問</a></li> -->
              </ul>
            </nav>
            <nav>
              <ul class="nav02">
                <li><a href="<?php echo home_url('/'); ?>company/">会社概要</a></li>
                <li><a href="<?php echo home_url('/'); ?>term/">特定商取引法に基づく表記</a></li>
                <li><a href="<?php echo home_url('/'); ?>policy/">プライバシーポリシー</a></li>
              </ul>
            </nav>
          </div><!-- /.column-->
        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
          <div class="column column01">
            <nav>
              <ul class="nav01">
                <li><a href="<?php echo home_url('/'); ?>en/">TOP</a></li>
                <li><a href="<?php echo home_url('/'); ?>about/">About Awase Soba</a></li>
                <li><a href="<?php echo home_url('/'); ?>shop/">Product List</a></li>
                <li><a href="<?php echo home_url('/'); ?>guide/">User Guide</a></li>
                <!-- <li><a href="<?php echo home_url('/'); ?>faq/">よくあるご質問</a></li> -->
              </ul>
            </nav>
            <nav>
              <ul class="nav02">
                <li><a href="<?php echo home_url('/'); ?>company/">Company</a></li>
                <li><a href="<?php echo home_url('/'); ?>term/">Act on specified commercial transactions</a></li>
                <li><a href="<?php echo home_url('/'); ?>policy/">Privacy Policy</a></li>
              </ul>
            </nav>
          </div><!-- /.column-->
        <?php endif; ?>

        <?php if( ICL_LANGUAGE_CODE == 'ja' ): //日本語 ?>
          <div class="column column02">
            <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">お問い合わせ</a></div>
          </div><!-- /.column-->
        <?php elseif( ICL_LANGUAGE_CODE == 'en' ): //英語 ?>
          <div class="column column02">
            <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">Contact</a></div>
          </div><!-- /.column-->
        <?php endif; ?>

        <div class="lang-btn u-sp">
          <?php echo do_shortcode('[wpml_language_switcher]'); ?>
        </div>

      </div><!-- /.mega-menu_inner -->
    </div><!-- /.mega-menu -->