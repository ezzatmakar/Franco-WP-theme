<?php 
$working_section = get_field('working_at_franco', 158, true);
?>
<div class="col-md-6 col-sm-12 contentCol">
  <div class="title">
    <p><?php echo $working_section['subtitle']; ?></p>
    <h1><span><?php echo $working_section['first_part_of_title'];?></span> <?php echo $working_section['the_rest_of_the_title'];?></h1>
  </div>
  <div class="content">
    <p><?php echo $working_section['the_content'];?></p>
  </div>
</div>
<?php 
$imgId = $working_section['the_image'];
$img = wp_get_attachment_image_src($imgId, array('800','600'), true );
?>
<div class="col-md-6 col-sm-12 shapeCol">
  <img class="img-responsive center-block" src="<?php echo $img[0];?>" alt="">
</div>
