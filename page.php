<?php get_header(); ?>

    <div class="containerFix">
        <section class="page">
            <div class="page__ttl">
                <h2>CONTACT</h2>
            </div>
            <div class="page__message">
              <p>サイトの閲覧ありがとうございます！<br>以下のフォームからお問い合わせお願い致します。皆様とお話しできること楽しみにしております。</p>
            </div>
          <?php 
            while (have_posts()) :
              the_post();
  
              
              the_content();
            endwhile;
          ?>
          <!-- <form class="form" action="" method="post">
            <div class="form-content">
              <p class="contact-label">Name</p>
              <input class="input" type="text" name="" value="" />
            </div>
            <div class="form-content">
              <p class="contact-label">E-mail</p>
              <input class="input" type="email" name="" value="" />
            </div>
            <div class="form-content">
              <p class="contact-label">Subject</p>
              <input class="input" type="text" name="" value="" />
            </div>
            <div class="form-content">
              <p class="contact-label">Message</p>
              <textarea class="textarea" name="name"></textarea>
            </div>
            <div class="send form-content">
              <input class="input submit" type="submit" name="" value="Send" />
            </div>
          </form> -->
        </section>

    </div>

    <?php get_footer(); ?>