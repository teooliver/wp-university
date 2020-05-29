<?php

get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'Check all events dates here'
  )
);
?>

<div class="container container--narrow page-section">
  <?php 
    while(have_posts()){
      the_post();
      get_template_part('template_parts/content-event');
  }
  echo paginate_links()
  ?>

  <hr class="section-break">
  <p>
    Looking for past events? 
    <a href="<?php echo site_url('/past-events') ?>">Check out our past events</a>
  </p>
</>

<?php
get_footer();
?>