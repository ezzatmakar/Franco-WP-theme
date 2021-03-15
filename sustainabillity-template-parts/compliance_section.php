<?php $section_compliance = get_field('compliance', 183, true); ?>
<div class="container">

  <div class="col-md-8 col-sm-12 contentCol sameHeight">
    <div class="title">
      <p><?php echo $section_compliance['subtitle'];?></p>
      <h1><span><?php echo $section_compliance['title'];?></span></h1>
    </div>
    <div class="content"><?php echo $section_compliance['content'];?></div>
  </div>
  <?php 
  $imgId = $section_compliance['image'];
  $img = wp_get_attachment_image_src($imgId, array('1200','1000'), true );
  ?>
  
  <div class="col-md-4 col-sm-12 shapeCol v-center sameHeight">
    <img class="img-responsive center-block" src="<?php echo $img[0];?>">
  </div>

</div>