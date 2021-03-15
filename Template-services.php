<?php
/**
 * Template Name: Services Page 
**/
get_header(); 
?>

<section class="knowMore_services">
  <div class="container">
    <?php 
    $top_section = get_field('know_more_services', 306, true);
    $imgId = $top_section['image'];
    $img = wp_get_attachment_image_src($imgId, array('400','200'), true );
    ?>
    <div class="col-md-6 col-sm-12 shapeCol sameHeight">
      <img class="img-responsive center-block" src="<?php echo $img[0]; ?>" alt="Logo Image">
    </div>
    <div class="col-md-6 col-sm-12 contentCol sameHeight">
      <div class="title">
        <p><?php echo $top_section['subtitle']; ?></p>
        <h1><span><?php echo $top_section['first_part_of_title']; ?></span> <?php echo $top_section['rest_of_title']; ?></h1>
      </div>
      <div class="content">
        <p><?php echo $top_section['content']; ?></p>
      </div>
    </div>

  </div>
</section>

<div class="servicesWarp">

  <?php 
  $services = get_field('services', 306, true); 
  $counter = 1;
  foreach($services as $service) :
    $subTitile = $service['service_subtitle'];
    $title = $service['service_title'];
    $content = $service['service_content'];
    $imageID = $service['service_image'];
    $image = wp_get_attachment_image_src($imageID, array('800','600'), true );
    if( ($counter % 2) != 0 ) :
    ?>
  
      <section class="service">
        <div class="container">

          <div class="col-md-6 col-sm-12 contentCol sameHeight">
            <div class="title">
              <p><?php echo $subTitile; ?></p>
              <h1><span><?php echo $title; ?></span></h1>
            </div>
            <div class="content">
              <p><?php echo $content; ?></p>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 shapeCol sameHeight">
            <div class="cover imgBox" style="background-image: url(<?php echo $image[0]; ?>)"></div>
          </div>

        </div>
      </section>
      <?php 
      else : ?>
      <section class="service">
        <div class="container">

          <div class="col-md-6 col-sm-12 shapeCol sameHeight">
            <div class="cover imgBox" style="background-image: url(<?php echo $image[0]; ?>)"></div>
          </div>

          <div class="col-md-6 col-sm-12 contentCol sameHeight">
            <div class="title">
              <p><?php echo $subTitile; ?></p>
              <h1><span><?php echo $title; ?></span></h1>
            </div>
            <div class="content">
              <p><?php echo $content; ?></p>
            </div>
          </div>
            
        </div>
      </section>
      <?php
        endif;
      $counter++;
  endforeach; ?>
</div>


<?php get_footer(); ?>