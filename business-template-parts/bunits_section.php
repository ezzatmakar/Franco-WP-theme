<?php
$sections = get_field('business_units_sections', 131, true);

?>

    <?php 
    $counter = 1;
    foreach($sections as $section) :
      $sectionSubTitile = $section['subtitle'];
      $sectionTitle = $section['the_title'];
      $sectionContent = $section['the_content'];
      $sectionImage = $section['enter_the_image'];
      if( ($counter % 2) != 0 ) :
        
      ?>
      <section class="bUnits">
        <div class="container">
          <div class="col-md-6 col-sm-12 shapeCol sameHeight">
            <img class="img-responsive center-block" src="<?php echo $sectionImage; ?>" alt="">
          </div>

          <div class="col-md-6 col-sm-12 contentCol sameHeight">
            <div class="title">
              <p><?php echo $sectionSubTitile; ?></p>
              <h1><span><?php echo $sectionTitle; ?></span></h1>
            </div>
            <div class="content">
              <p><?php echo $sectionContent; ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php 
      else : ?>
      <section class="bUnits">
        <div class="container">
          <div class="col-md-6 col-sm-12 contentCol sameHeight">
            <div class="title">
              <p><?php echo $sectionSubTitile; ?></p>
              <h1><span><?php echo $sectionTitle; ?></span></h1>
            </div>
            <div class="content">
              <p><?php echo $sectionContent; ?></p>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 shapeCol sameHeight">
            <img class="img-responsive center-block" src="<?php echo $sectionImage; ?>" alt="">
          </div>
        </div>
      </section>
        <?php
        endif;
      $counter++;
    endforeach; ?>
 