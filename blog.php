<?php get_header(); ?>

<body>
 <div class="bg-primary">
  <div class="container post-width">
    <div class="text-center">
      <div class="text-center banner"><a href="<?php echo home_url(); ?>">The Unending Rain</a></div>
      <nav class="nav-links">
        <?php
        $args = array(
          'theme_location' => 'primary'
        );
        ?>
        <?php wp_nav_menu($args); ?>
      </nav>
      <nav class="nav-links">
        <?php
        $args = array(
          'theme_location' => 'secondary'
        );
        ?>
        <?php wp_nav_menu($args); ?>
      </nav>
    </div>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class="blog-post">
        <h2 class="blog-post-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <p class="blog-post-date"><?php the_date('F j, Y g:i a'); ?> -

          <?php

          $categories = get_the_category();
          $separator = ",";
          $output = '';

          if ($categories) {
            foreach ($categories as $category) {
              $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
            }

            echo trim($output, $separator);

          }

          ?>

        </p>
        <?php the_content(); ?>
        <div class="blog-sep">-</div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p><?php __('No posts found.'); ?></p>
<?php endif; ?>

<div>
  <div class="copyright gray">
    <p>Got a comment? See a mistake? Get in touch with me below.</p>
    <p><script type="text/javascript" language="javascript">
      <!--
      // Email obfuscator script 2.1 by Tim Williams, University of Arizona
      // Random encryption key feature coded by Andrew Moulden
      // This code is freeware provided these four comment lines remain intact
      // A wizard to generate this code is at http://www.jottings.com/obfuscator/
      { coded = "NgRM6N1lh@RHN1o.fMH"
        key = "qjFtxJ6lAsdDf3puKVwnaC8Z9ToBSkePv7gOym0NGi5EUMIQbhrL4RzcHYW21X"
        shift=coded.length
        link=""
        for (i=0; i<coded.length; i++) {
          if (key.indexOf(coded.charAt(i))==-1) {
            ltr = coded.charAt(i)
            link += (ltr)
          }
          else {
            ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
            link += (key.charAt(ltr))
          }
        }
      document.write("<a href='mailto:"+link+"'>Contact</a>")
      }
      //-->
      </script><noscript>Sorry, you need Javascript on to email me.</noscript>
    </p>
    &copy; <?php echo Date('Y'); ?> the-craft.com
  </div>
</div>
</div>
</div>
</body>

<?php get_footer(); ?>
