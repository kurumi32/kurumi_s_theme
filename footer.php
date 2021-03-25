<footer class="footer">
      <div class="footer__btn">
        <ul class="footer__btn_list">
          <li class="footer__btn_item">
            <a href="<?php echo home_url(); ?>"><i class="fas fa-home fa-2x"></i></a>
          </li>
          <li class="footer__btn_item">
            <a href="<?php echo home_url('profile'); ?>"><i class="fas fa-user-circle fa-2x"></i></a>
          </li>
          <li class="footer__btn_item">
            <a href="<?php echo home_url('contact'); ?>"><i class="far fa-envelope fa-2x"></i></a>
          </li>
          <li class="footer__btn_item">
            <a href="http://twitter.com/kurumi_s_muffin"
              ><i class="fab fa-twitter fa-2x"></i
            ></a>
          </li>
          <li class="footer__btn_item">
            <a href="http://instagram.com/kurumi_s_muffin"
              ><i class="fab fa-instagram fa-2x"></i
            ></a>
          </li>
        </ul>
      </div>
      <div class="footer__copy">
        <p>©️ 2020 kurumi's muffin</p>
      </div>
    </footer>

    <!-- jQueryの読み込み（CDN） -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- main.jsの読み込み -->
    <!-- <script src="js/main.js"></script> -->

    <?php wp_footer(); ?>
  </body>
</html>
