<?php 
$newsSection = get_field('news_and_updates', 5, true);
$subTitle = $newsSection['the_subtitle'];
$firstPartOfTitle = $newsSection['first_part_of_title'];
$restOfTitle = $newsSection['the_rest_of_the_title'];
?>

<div class="container">
  <div class="col-xs-12">
    <div class="title">
      <p><?php echo $subTitle; ?></p>
      <h1><span><?php echo $firstPartOfTitle; ?></span> <?php echo $restOfTitle; ?></h1>
    </div>
  </div>
  <div class="col-xs-12 shapeCol">
    <div class="content">
      <div class="owl-carousel">

      <?php
      $theNewsPosts =  $newsSection['news_posts'];
      foreach ($theNewsPosts as $post) :?>

        <div class="item">
          <div class="row">
            <div class="col-md-8 col-sm-12 col sameHeight">
              <div class="content">
                <h1><?php echo $post['the_post_title'];?></h1>
                <p class="date"><?php echo $post['the_date_of_the_post'];?></p>
                <p><?php echo $post['the_post_content'];?></p>
                <a class="m_btn" href="<?php echo $post['read_more_link'];?>">Read more..</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col sameHeight">
              <?php 
              $postimageId = $post['the_post_image']; 
              $postImage = wp_get_attachment_image_src($postimageId, array('800','600'), true );
              ?>
              <div class="imgBox cover" style="background-image: url('<?php echo $postImage[0]; ?>')"></div>
            </div>
          </div>
        </div>

        <?php
      endforeach;
      ?>
      </div>
    </div>
  </div>
</div>
