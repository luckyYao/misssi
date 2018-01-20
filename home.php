<?php get_header();?>
<div class="w posts">
  <?php
    get_search_form();
    get_sidebar();
  ?>
  <div class="posts__content" style="width: 880px;">
    <?php if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part(('content-article'));
      endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
<?php  get_footer(); ?>
</div>