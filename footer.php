    <footer>
      <div class="container">
        <div class="col-sm-12">
          <div class="menu">
          <?php
            $nav_menu_args = array(
              'container' => false,
            );
            wp_nav_menu($nav_menu_args);
            ?>
            <!-- <ul>
              <?php 
              // $footerLinks = get_field('footer_menu', 'option');
              // foreach ($footerLinks as $footerLink) { ?>
                <li><a href="<?php // echo $footerLink['the_link'];?>"><?php // echo $footerLink['the_title']; ?></a></li>
              <?php // } ?>
            </ul> -->
          </div>
        </div>
        <?php 
        $footerMainSettings = get_field('footer_main_settings', 'option'); 
        $footer_logo_id = $footerMainSettings['footer_logo'];
        $attr = array('class' => 'logo img-responsive', 'alt' => 'Footer logo');
        $footer_logo = wp_get_attachment_image($footer_logo_id, array('200', '150'), false, $attr);
        $footerParagraph = $footerMainSettings['footer_paragraph'];
        $footerTerms = $footerMainSettings['terms_of_use'];
        $footerPrivacyPolicy = $footerMainSettings['privacy_policy'];
        ?>
        <div class="col-sm-3 col-md-2">
          <?php echo $footer_logo; ?>
        </div>
        <div class="col-sm-9 col-md-10">
          <p><?php echo $footerParagraph; ?></p>
        </div>
        <div class="clearfix"></div>
        <div class="copyrights">
          <div class="col-sm-6">
            <p>Copyrights © <?php echo date("Y");?> All Rights Reserved by <span style="text-transform: uppercase;"><?php bloginfo("name"); ?></span> TRUCKING</p>
          </div>
          <div class="col-sm-6">
            <a href="<?php echo $footerTerms; ?>">Terms of use</a>
            <a href="<?php echo $footerPrivacyPolicy; ?>">Privacy Policy</a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </footer>

    <!-- JavaScript plugins -->
    <?php wp_footer(); ?>
    <script>
      // Remove <br> tag from social menu
      $(function (){
        $("#mCSB_1_container div.socialIcons").find('br').remove();
      });
    </script>
    
  </body>
</html>