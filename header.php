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

    <div class="head-message"><p>完全会員制　沖縄そば「アワセそば」通販サイト</p></div>

    <header class="header">
      <div class="header-inner inner">
        <div class="header-top">
          <div class="logo img-box colum01"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo02.svg" alt=""></a></div> <!-- /.logo -->
          <div class="search colum02">
            <form role="search" method="get" id="searchform" class="searchform" action="#">
              <div>
                  <input type="text" value="" name="s" id="s" placeholder="なにをお探しですか？"/>
                  <input type="image" id="searchsubmit" src="images/search-btn.svg" />
              </div>
            </form>
          </div><!-- /.search -->
          <div class="colum03">
            <nav>
              <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-login.svg" alt="">ログイン</a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="">カート</a></li>
              </ul>
            </nav>
            <div class="lang-btn">言語切り替えボタンが入ります</div>
          </div>
        </div><!-- /.header-top -->
        <div class="header-bottom">
          <nav>
            <ul>
              <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
              <li><a href="archive-product.html">商品一覧</a></li>
              <li><a href="about.html">アワセそばについて</a></li>
              <li><a href="guide.html">ご利用案内</a></li>
              <li><a href="faq.html">よくあるご質問</a></li>
              <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </nav>
        </div><!-- /.header-bottom -->
      </div><!-- /.header-inner-->
    </header>