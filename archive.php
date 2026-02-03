<?php get_header('posts');?>

<main class="main">
  <div class="main__content">
    <h1>
    <?php
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
      echo esc_html( $categories[0]->name );	
    }
    ?>
    </h1>
    <div class="main__content-posts-wrapper">
      <div class="main__content-posts">
        <?php get_template_part('includes/section', 'archive');?>
      </div>
      <div class="main__content-posts-pagination">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links(array (
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages
        ));
        ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer();?>