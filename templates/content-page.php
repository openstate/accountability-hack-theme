<div class="container">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
      <?php the_content(); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
  </div>
</div>
