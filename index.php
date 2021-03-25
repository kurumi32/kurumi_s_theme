<?php get_header(); ?>

    <div class="container">
      <main class="main">
        
        <div class="main__flex">

        <?php
        if(have_posts()) :
            while(have_posts()) :
            the_post();

            $category = get_the_category();
            $cat_slug = $category[0]->slug;
            $cat_name = $category[0]->name;
        ?>

        <!-- ループしたいHTMLをここに置く -->
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
        else:
        ?>

        <p>お探しの記事はありませんでした。</p>

        <?php endif; ?>     
          
        </div>
        <!-- <div class="main__btn">
          <a href="次ページ">ぺージャー</a>
        </div> -->
      </main>

      <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>    