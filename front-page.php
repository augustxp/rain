<?php get_header(); ?>

  <body>

    <div class="text-center l_title">The Unending Rain</div>
    <div class="text-center l_nav fade-in">
      <p class="l_prologue"><a href="category/the-unending-rain/?order=asc">Chapter 1</a></p>
      <p class="l_star">&#x2605;</p>
      <p class="l_latest"><a href="category/the-unending-rain/">Latest</p></p>

    </div>

    <div class="footer container">
        <nav class="nav-links float-right">
          <?php
          $args = array(
            'theme_location' => 'secondary'
          );
          ?>
          <?php wp_nav_menu($args); ?>
        </nav>
    </div>
  </body>


<?php get_footer(); ?>
