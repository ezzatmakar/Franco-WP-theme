<?php 
$sustainability = get_field('sustainability_and_compliance_section', 183, true);
$imgId = $sustainability['the_image'];
$img = wp_get_attachment_image_src($imgId, array('800','600'), true );
?>

<section class="knowMore" style="background-image: url('<?php echo $img[0]; ?>');">
  <div class="container">

    <div class="col-md-8 col-sm-12 contentCol sameHeight">
      <div class="title">
        <p><?php echo $sustainability['subtitle'];?></p>
        <h1><span><?php echo $sustainability['title_first_part'];?></span> <?php echo $sustainability['rest_of_title'];?></h1>
      </div>
      <div class="content">
        <p><?php echo $sustainability['the_section_content'];?></p>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 shapeCol sameHeight">
      <img class="rightShapePc" src="<?php echo get_template_directory_uri(); ?>/img/knowmore_bg__right__white_pc.png">
    </div>

  </div>
</section>