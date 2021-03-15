
<?php 
$the_query = new WP_Query( array( 'post_type' => 'statistics', ) );
if ($the_query->have_posts()) {
  while ($the_query->have_posts()) { 
    $the_query->the_post();
    $details = get_field('franco_statistics'); ?>
    <div class="col-md-3 col-sm-6 col">
      <p class="head"><?php the_title();?></p>
      <h1><?php echo $details['the_statistic'];?></h1>
      <p><?php echo $details['the_statistic_details'];?></p>
    </div>
    <?php 
  }
}
?>
