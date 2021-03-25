<?php get_header();
      the_post();

       // カテゴリー情報取得
        $category = get_the_category();
        $cat_slug = $category[0]->slug;
        $cat_name = $category[0]->name;
 ?>

    <div class="container">
      <main class="main">
        <article class="single">
            <div class="single__ttl">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="single__img">
            　<?php the_post_thumbnail('medium'); ?>
            </div>
            <p class="single__date"><?php the_time('Y/m/d'); ?></p>
            <p class="single__category <?php echo $cat_slug; ?>">
              <?php echo $cat_name; ?>
            </p>
            <div class="single__content">
              <?php the_content(); ?>
            </div>
            <div class="single__next">
              <div class="single__next_btn"><?php previous_post_link('%link', '<< 前の記事へ'); ?></div>
              <div class="single__next_btn"><?php next_post_link('%link', '次の記事へ >>'); ?></div>
            </div>
        </article>

        <!-- <div class="main__btn">
          <a href="記事一覧ページ">ページャー</a>
        </div> -->
      </main>

      <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>
