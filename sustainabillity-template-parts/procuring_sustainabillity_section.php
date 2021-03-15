<?php $section = get_field('procuring_sustainability', 183, true); ?>
<div class="container">

  <div class="col-md-4 col-sm-12 shapeCol sameHeight">
    <img class="rightShapePc" src="<?php echo get_template_directory_uri(); ?>/img/knowmore_bg__left_orange_pc.png">
  </div>

  <div class="col-md-8 col-sm-12 contentCol sameHeight">
    <div class="title">
      <p><?php echo $section['subtitle'];?></p>
      <h1><span><?php echo $section['title_first_part'];?></span> <?php echo $section['rest_of_title'];?></h1>
    </div>
    <div class="content">
     <?php echo $section['the_content'];?>
    </div>
  </div>

</div>