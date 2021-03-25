<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>くるみのまふぃん</title> -->
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sass/style.css" /> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="back-to-top"></div>

    <header class="header">
      <div class="header__mv">
        <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0928.JPG" alt="農業×ITのブログ くるみのまふぃん" class="header__mv_img" />
        <h1 class="header__mv_logo">
          <a href="<?php echo home_url(); ?>">kurumi's muffin</a>
        </h1>
        <!-- <h1 class="header__mv_logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2549mini.jpg" alt="kurumi's muffin logo"></a>
        </h1> -->
        <div class="header__mv_message">
          <p class="header__mv_messageMain wipe">農業を稼げる職業に。</p>
          <p class="header__mv_messageSabu wipe">~ AGRICULTURE×IT ~</p>
        </div>
      </div>

      <nav>
        <ul class="header__category">
        <?php
        $cats = get_categories();
        foreach ($cats as $cat) :
            $slug = $cat->slug;
            $name = $cat->name;
            $count = $cat->count;
            $link = get_category_link($cat->cat_ID);
        ?>

        <!-- ループしたいHTMLをここに置く -->
        <li class="<?php echo $slug; ?> header__category_item">
          <a href="<?php echo $link; ?>">
              <?php echo $name; ?>
            </a>
        </li>

        <?php endforeach; ?>

        </ul>
      </nav>
    </header>