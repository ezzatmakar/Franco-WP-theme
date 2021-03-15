<?php
/**
 * Template Name: Contact Page
**/ 

get_header();
$top_section = get_field('know_more_section', 280, true);
?>
<section class="knowMore_people knowMore_contact">
  <div class="container">
    <div class="col-md-6 col-sm-12 contentCol sameHeight">
      <div class="title">
        <p><?php echo $top_section['subtitle']; ?></p>
        <h1><span><?php echo $top_section['title_first_part']; ?></span> <?php echo $top_section['rest_of_ttile']; ?></h1>
      </div>
      <div class="content">
        <div class="contactForm">
          <?php echo do_shortcode( '[contact-form-7 id="285" title="Contact Page Form"]' ); ?>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 shapeCol sameHeight">
      <div class="contact_info">
        <div class="title">
          <h1><span>Contact</span><br>Information</h1>
        </div>
        <div class="info_text">
          <?php 
          $contect_info = get_field('contact_information', 280, true);
          $emails = $contect_info['emails'];
          
          $phones = $contect_info['phone_numbers'];
          ?>
          <h3>ADDRESS:</h3>
          <p><?php echo $contect_info['address_street_number'];?><br>
          <?php echo $contect_info['address_street_number'];?></p>

          <h3>EMAIL:</h3>
          <p>
            <?php  
            foreach ($emails as $email) :
              if(count($emails) > 1) {echo $email['email']."<br>";}
              else {echo $email['email']; }
            endforeach; 
            ?>
          </p>

          <h3>PHONE NO.</h3>
          <p><?php  
            foreach ($phones as $phone) :
              if(count($phones) > 1) {echo $phone['phone_number']."<br>";}
              else {echo $phone['phone_number']; }
            endforeach; 
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="googlemap">
  <div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
  </div>
</section>

<?php 
$mapDirections = get_field('map_directions', 280, true);
$lat = $mapDirections['lat'];
$lng = $mapDirections['lng'];
get_footer(); 
?>

<script>
  initialize('<?php echo get_template_directory_uri(); ?>/img/pin.png' ,[['<?php bloginfo('name');?>',<?php echo $lat;?>,<?php echo $lng;?>]]);
</script>