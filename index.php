<?php get_header(); ?>

<body>
 <div>
  <div class="container post-width">
    <div class="text-center">
      <div class="text-center banner"><a href="<?php echo home_url(); ?>">The Unending Rain</a></div>
    </div>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class="blog-post">
        <h2 class="blog-post-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <p class="blog-post-date"><?php the_date('F j, Y'); ?></p>
        <?php the_content(); ?>
        <div class="blog-sep">&#x2605;</div>

        <div class="postnav">
          <div class="prevpost">
            <?php previous_post_link('
              <span class="gray">< </span>
              %link', '%title', true);
            ?>
          </div>
          <div class="nextpost">
            <?php next_post_link('
            <span class="gray">Next: </span>
              %link', '%title', true);
            ?>
          </div>
        </div>
        <div class="navv">

            <nav class="nav-links">
              <?php
              $args = array(
                'theme_location' => 'secondary'
              );
              ?>
              <?php wp_nav_menu($args); ?>
            </nav>
        </div>
        <div class="copyright">
          &copy; <?php echo Date('Y'); ?> TheUnendingRain.com
        </div>
    </div>

  <?php endwhile; ?>
<?php else : ?>
  <p><?php __('No posts found.'); ?></p>
<?php endif; ?>


</div>
</div>
</body>

<?php get_footer(); ?>
