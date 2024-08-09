    <footer class="footer">
      <div class="fotter-top">
        <div class="inner flex">

            <div class="column column01">
              <div class="logo img-box"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo03.svg" alt=""></a></div>
              <a href="<?php echo home_url('/my-account'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-login.svg" alt=""><?php if ( is_user_logged_in() ) : ?>マイページ<?php else : ?>ログイン<?php endif; ?></a>
              <a href="<?php echo home_url('/cart'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.svg" alt="">カート</a>
            </div><!-- /.column-->
            <div class="column column02">
              <nav>
                <ul>
                  <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                  <li><a href="<?php echo home_url('/'); ?>/about/">アワセそばについて</a></li>
                </ul>
              </nav>
              <nav>
                <ul>
                  <li>商品一覧</li>
                  <li class="child"><a href="<?php echo home_url('/'); ?>/product-category/fresh-noodles/">・生麺</a></li>
                  <li class="child"><a href="<?php echo home_url('/'); ?>/product-category/dried-noodles/">・乾麺</a></li>
                  <li class="child"><a href="<?php echo home_url('/'); ?>/product-category/ll-noodles/">・LL麺</a></li>
                  <li class="child"><a href="<?php echo home_url('/'); ?>/product-category/broth/">・だし</a></li>
                </ul>
              </nav>
              <nav>
                <ul>
                  <li><a href="<?php echo home_url('/'); ?>/faq/">よくあるご質問</a></li>
                  <li><a href="<?php echo home_url('/'); ?>/contact/">お問い合わせ</a></li>
                </ul>
              </nav>
            </div><!-- /.column-->
            <div class="column column03">
              <div class="btn-wrap"><a class="btn01" href="<?php echo home_url('/'); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">お問い合わせ</a></div>
              <nav class="navi-bottom">
                <ul>
                  <li><a href="<?php echo home_url('/'); ?>/company/">会社概要</a></li>
                  <li><a href="<?php echo home_url('/'); ?>/term/">特定商取引法に基づく表記</a></li>
                  <li><a href="<?php echo home_url('/'); ?>/policy/">プライバシーポリシー</a></li>
                </ul>
              </nav>
            </div><!-- /.column-->
  
        </div><!-- /.inner-->
      </div><!-- /.footer-top -->

      <div class="fotter-bottom">
        <p><small>© AWASE SOBA. All rights reserved.</small></p>
      </div>

    </footer>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php if ( is_single() ) : ?>
      <script>
        //商品詳細サムネイルスライダー
        const swiperitem = new Swiper(".swiper-item", {
          loop: true,
        }); 
        function thumbnail(index) {
          swiperitem.slideTo(index);
        }
      </script>
      <script>
        document.addEventListener('DOMContentLoaded', (event) => {
          var quantityInput = document.getElementById('quantity');
          var minusButton = document.getElementById('minus');
          var plusButton = document.getElementById('plus');
      
          minusButton.addEventListener('click', function() {
            var currentVal = parseInt(quantityInput.value, 10);
            if (currentVal > 1) {
              quantityInput.value = currentVal - 1;
            }
          });
      
          plusButton.addEventListener('click', function() {
            var currentVal = parseInt(quantityInput.value, 10);
            quantityInput.value = currentVal + 1;
          });
        });
      </script>
    <?php endif; ?>
  </div>
  <?php wp_footer(); ?>
</body>

</html>