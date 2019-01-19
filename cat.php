<?php
/*
Template Name: Cat
*/
?>
<?php get_header(); ?>

<section id="primary">
  <div id="content" role="main">
    <?php
      global $cat;
      $cats = get_categories(array(
          'child_of' => $cat,
          'parent' => $cat,
          'hide_empty' => 0
      ));
      $c = get_category($cat);
      foreach($cats as $the_cat){
          $posts = get_posts(array(
              'category' => $the_cat->cat_ID,
              'numberposts' => 5,
          ));
          if(!empty($posts)){
              echo '
              <div class="item cat_item">
                  <div class="item_title"><h2><span title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</span></h2></div>
                  <ul class="box_list">';
                      foreach($posts as $post){
                          echo '<li><span class="alignright">'.mysql2date('Y-m-d', $post->post_date).'</span>
                          <a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                      }
                  echo '</ul>
              </div>';
          }
      }
    ?>
  </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>

