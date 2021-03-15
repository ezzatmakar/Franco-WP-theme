<?php 
$theHeaderimageId = get_field('header_image', 183, true);
$headerImage = wp_get_attachment_image_src($theHeaderimageId, array('1800','800'), true );
?>
<div class="hero cover" style="background-image: url('<?php echo $headerImage[0]; ?>')"></div>
