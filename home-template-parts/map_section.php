<?php 
$mapSection = get_field("map_section", 5, true);
$mapSectionSubTitile        = $mapSection['subtitle'];
$mapSectionTitileFirstPart  = $mapSection['title_first_part'];
$mapSectionTitileRest       = $mapSection['the_rest_of_title'];
$mapSectionImageId          = $mapSection['map_image'];
// Map placess list
$mapSectionPlacess          = $mapSection['our_places'];
?>

<div class="container">
  <div class="col-md-6 col-sm-12">
    <div class="title">
      <p><?php echo $mapSectionSubTitile; ?></p>
      <h1><span><?php echo $mapSectionTitileFirstPart; ?></span> <?php echo $mapSectionTitileRest; ?></h1>
    </div>
    <div class="content">
      <ul>
        <?php 
        // Loop In Placess
        foreach ($mapSectionPlacess as $place) : ?>
          <li><span class="icon-map-marker"></span> <?php echo $place['place']; ?></li>
          <?php 
        endforeach;?>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="col-md-5 col-md-offset-1 col-sm-5 topShapeMob">
    <div class="map">
      <?php 
      $attrMapImage = array('class'=> 'img-responsive center-block', 'alt' => 'Map Image');
      echo wp_get_attachment_image($mapSectionImageId, array('700', '500'), false, $attrMapImage);  
      ?>
    </div>
  </div>

</div>
