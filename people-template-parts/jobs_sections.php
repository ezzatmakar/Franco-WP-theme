<?php 
$jobs_section = get_field('jobs_section', 158, true);
?>
<div class="col-md-6 col-sm-12 contentCol">
  <div class="title">
    <p><?php echo $jobs_section['subtitle'];?></p>
    <h1><span><?php echo $jobs_section['title_first_part'];?></span> <?php echo $jobs_section['rest_of_title'];?></h1>
  </div>
  <div class="content">
    <p><?php echo $jobs_section['the_content'];?></p>

    <div class="jobsBoard">
      <?php 
      $jobs = $jobs_section['available_jobs']; 
      
      foreach ($jobs as $job) : 
      $jobCode = $job['job_code'];
      ?>
      
        <div class="jobBox">
          <div class="jTitle">
            <p><?php echo $job['job_title']; ?></p>
          </div>
          <div class="jNo">
            <p><?php echo $jobCode; ?></p>
          </div>
          <div class="jApply">
            <a role="button" data-toggle="collapse" href="#<?php echo $jobCode; ?>" aria-expanded="false" aria-controls="<?php echo $jobCode; ?>">APPLY NOW</a>
          </div>
        </div>
        <div class="jobForm collapse" id="<?php echo $jobCode; ?>">
          <div class="warp">
            <div class="contactForm">
              <?php 
              echo  do_shortcode( '[contact-form-7 id="268" title="Applying Jobs Contact Form"]' ); 
              ?>
            </div>
          </div>
        </div>

        <?php
      endforeach;
      ?>

    </div>
  </div>
</div>