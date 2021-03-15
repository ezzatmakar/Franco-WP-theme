<?php
/**
 * Template Name: About Us Page
 */
get_header();
$knowMore = get_field('know_more_section', 332, true);
$img_ID = $knowMore['image'];
$img = wp_get_attachment_image_src($img_ID, array('800','600'), true );

?>

<section class="knowMoreInner">
  <div class="container">

    <div class="col-md-6 col-sm-12 contentCol">
      <div class="title">
        <p><?php echo $knowMore['subtitle']; ?></p>
        <h1><span><?php echo $knowMore['title_first_part']; ?></span> <?php echo $knowMore['rest_of_title']; ?></h1>
      </div>
      <div class="content">
        <p><?php echo $knowMore['content']; ?></p>
      </div>
    </div>
    
    <div class="col-md-6 col-sm-12 shapeCol">
      <img class="img-responsive center-block" src="<?php echo $img[0]; ?>" alt="">
    </div>

  </div>
</section>

<div class="teamWarp">
  <?php 
  $members = get_field('members_section', 332, true);
  ?>
  <section class="team">
    <div class="title">
      <div class="container">
        <div class="col-xs-12">
          <p><?php echo $members['subtitle']; ?></p>
          <h1><span><?php echo $members['title_first_part']; ?></span> <?php echo $members['rest_of_title']; ?></h1>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="container">
        <?php 
        $memberDetails = $members['member'];
        $employeesCount = count($memberDetails);
        
        $counter = 0;
        foreach ($memberDetails as $employee) :
          $firstName = $employee['first_name'];
          $lastName = $employee['last_name'];
          $job = $employee['job_position'];
          $pictureID = $employee['member_picture'];
          $picture = wp_get_attachment_image_src($pictureID, array('800','600'), true );
          $contact = $employee['some_details']; 
          if( ($counter == 0) || ($counter % 4) != 0 ) : 
            ?>

            <div class="col-md-3 col-sm-6">
              <div class="teamBox">
                <div class="face cover" style="background-image:url('<?php echo $picture[0]?>')"></div>
                <div class="clearfix"></div>
                <div class="pTitle">
                  <h1><span><?php echo $firstName; ?></span> <?php echo $lastName; ?></h1>
                  <p><?php echo $job; ?></p>
                </div>
                <div class="pContent">
                  <p><?php echo $contact; ?></p>
                </div>
                <a class="m_btn" href="#7">Read more..</a>
              </div>
            </div>
          
        <?php  elseif( ($counter % 4) == 0 && $employeesCount >= $counter ) : ?>

          </div>
        </div>
        <div class="box">
          <div class="container">

            <div class="col-md-3 col-sm-6">
              <div class="teamBox">
                <div class="face cover" style="background-image:url('<?php echo $picture[0]?>')"></div>
                <div class="clearfix"></div>
                <div class="pTitle">
                  <h1><span><?php echo $firstName; ?></span> <?php echo $lastName; ?></h1>
                  <p><?php echo $job; ?></p>
                </div>
                <div class="pContent">
                  <p><?php echo $contact; ?></p>
                </div>
                <a class="m_btn" href="#7">Read more..</a>
              </div>
            </div>
            

            <?php else :?>
          </div>
        </div>
            
        <?php
        endif;
        $counter++;
        endforeach; ?>

      </div>
    </div>

  </section>

</div>

<?php get_footer(); ?>