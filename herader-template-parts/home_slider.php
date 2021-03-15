<div class="owl-carousel">
  <?php 
  $slides = get_field('top_slider_', 5, true);
  // echo json_encode($slides);
  foreach($slides as $slider) :
    $slider_img_id = $slider['slider_image'];
    $img_slider = wp_get_attachment_url($slider_img_id);
    $slider_title = $slider['title'];
    $slider_subTitle = $slider['message']; 
    $slider_readmore_link = $slider['read_more_link'];  ?>

      <div class="item cover" style="background-image: url('<?php echo $img_slider; ?>')">
        <div class="container">
          <div class="col-xs-12">
            <div class="content v-center">
              <div class="box">
                <p><?php echo $slider_title; ?></p>
                <h1><?php echo $slider_subTitle; ?></h1>
                <?php 
                if($slider_readmore_link) : ?>
                  <a class="s_btn" href="<?php echo $slider_readmore_link; ?>"><?php echo "Read more..";?></a>
                  <?php
                endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="shadow"></div>
      </div>
    <?php 
  endforeach; ?>
</div>