<?php get_header(); ?>

<div class="containerFix">
        <section class="profileFix">
            <div class="profileFix__ttl">
                <h2>PROFILE</h2>
            </div>
            <ul class="profileFix__main">
                <li class="profileFix__main_list">
                  <h3>ABOUT</h3>
                    <div class="flex">
                      <div class="flex_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_5762mini.jpg" alt="自己紹介の写真">
                      </div>
                      <div class="flex_text">
                        <p>福井生まれ、兵庫育ち。農業への興味と、動物が好きなことから農学系の大学へ進学。
                          サークル見学で子牛に一目惚れし、牛引きサークルへ。<br>
                          現在は岐阜県在住の会社員。ブログ、Twitterで発信しながら生産者さんの力になる仕組みを試行錯誤中。<br>
                              <a href="<?php echo esc_url(get_permalink(60)); ?>">→私が農業に興味を持ったきっかけ</a>
                        </p>
                      </div>
                    </div>
                </li>
                <li class="profileFix__main_list">
                  <h3>LIKE</h3>
                    <div class="flexRow">
                      <div class="flexRow_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_1419mini.jpg" alt="">
                      </div>
                      <div class="flexRow_text">
                        <p>趣味は、服を買うこと、ライブへ行くこと、食べること。ちなみに服はストリート系、ライブは邦ロック系、食は肉食系が好き。<br>
                          あと変なこだわり多め、大勢の人が好むもの苦手です(笑)　自分のこだわりが多いからか、こだわりを持ってものを作っている人が好きです。<br>
                        </p>
                      </div>
                    </div>
                </li>
                <li class="profileFix__main_list">
                  <h3>VISION</h3>
                    <div class="flex">
                      <div class="flex_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_1771mini.jpg" alt="">
                      </div>
                      <div class="flex_text">
                        <p>私は、農業の良さを多くの人に知ってもらい、農業を憧れの職業にしたいと考えています。
                          そのためには生産者さんの声が必要です。やりたいこと、困っていること、なんでも結構です！気軽に以下からお問い合わせください。
                          また厚かましいお願いですが、私と同じ考えをお持ちの方もご連絡していただけると幸いです。<br>
                          <a href="<?php echo home_url('contact'); ?>">→お問い合わせ</a>
                        </p>
                      </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>

<?php get_footer(); ?>
