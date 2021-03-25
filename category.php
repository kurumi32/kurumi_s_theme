<?php get_header(); ?>

    <div class="container">
      <main class="main">
        <section class="category">
         <h2 class="category__ttl"><?php single_cat_title(); ?></h2>
            <div class="main__flex">
                <?php
                    if (have_posts()) :
                    while (have_posts()) :
                        // 投稿データをロードする（ループ内で使 用する関数が使えるようになる）
                        the_post();
                        // 投稿データのカテゴリーを取得
                        $cat = get_the_category();
                        // カテゴリー名の取得
                        $cat_name = $cat[0]->name;
                        // スラッグの取得
                        $cat_slug = $cat[0]->slug;
                ?>
                <article class="main__post">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('medium'); ?>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_time('Y/m/d'); ?></p>
                      <p class="<?php echo $cat_slug; ?>">
                       <?php echo $cat_name; ?>
                      </p>
                    </a>
                  </article>

                  <?php
                    endwhile;
                    else :
                    ?>
                    <p>投稿がありませんでした</p>
                    <?php endif; ?>       
              
            </div>
            <!-- <div class="main__btn">
              <a href="次ページ">ページャー</a>
            </div> -->
        </section>
      </main>

      <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>
