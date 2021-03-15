<?php 
$theHeaderimageId = get_field('the_header_image', 131, true);
$headerImage = wp_get_attachment_image_src($theHeaderimageId, array('800','600'), true );
?>
<div class="hero cover" style="background-image: url('<?php echo $headerImage[0];?>')">
  <div class="shadow"></div>
</div>