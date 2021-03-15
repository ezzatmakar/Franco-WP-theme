<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri();?>/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- CSS -->
  <?php wp_head();?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php 
  $topHeader = get_field('top_header', 'option'); 
  $header_logo_id = $topHeader['header_logo'];
  $attr = array('class' => 'logo', 'alt' => 'logo');
  $logo = wp_get_attachment_image($header_logo_id, array('200', '150'), false, $attr);
  ?>
  <div class="fixedMenu">
    <div class="container v-center">
      <div class="col-sm-4 col-xs-3">
        <a href="#7" class="menuBtn"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon_blue.png"></a>
      </div>
      <div class="col-sm-4 col-xs-6">
        <div class="logo">
        <a href="<?php echo get_home_url(); ?>"><?php echo $logo; ?></a>
        </div>

      </div>
      <div class="col-sm-4 col-xs-3">
        <div class="socialIconsAndContactBtn">

          <?php get_template_part('home-template-parts/social_links'); ?>

          <div class="contactBtn">
            <?php $contactUs_url = get_page_link(280); ?>
            <a class="m_btn" href="<?php echo $contactUs_url; ?>"><?php echo "Contact Us";?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mainMenu">

    <div class="container">
      <a href="#7" class="closeMenu">x</a>

      <div class="warp">
        <div class="col-sm-6">
          <div class="menu">
            <?php
              $nav_menu_args = array(
                'container' => false,
              );
              wp_nav_menu($nav_menu_args);
              ?>
          </div>
        </div>

        <div class="col-sm-6">
          <?php get_template_part('home-template-parts/social_links'); ?>

          <div class="logo">
            <?php 
            $logoInMenu_id = get_field('logo_in_menu', 'option'); 
            $attr_logoInMenu = array('alt' => 'logo In Menu');
            $logoInMenu = wp_get_attachment_image($logoInMenu_id, array('200', '150'), false, $attr_logoInMenu); 
            echo $logoInMenu;          
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="mainImage">
    <div class="leftNav">
      <a href="#7" class="menuBtn"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon_blue.png"></a>
      <?php get_template_part('home-template-parts/social_links'); ?>
    </div>


    <div class="topHeader">
      <div class="container">
        <div class="col-xs-6">
          <a href="<?php echo get_home_url(); ?>"><?php echo $logo; ?></a>
        </div>
        <div class="col-xs-6">
          <div class="nav">
            <a class="m_btn" href="<?php echo $contactUs_url; ?>"><?php echo "Contact Us"; ?></a>
          </div>
        </div>
      </div>
    </div>

    
    <?php 
    $home_page_ID = 5;
    $business_page_ID = 131;
    $people_page_ID = 158;
    $sustainabillity_page_ID = 183;
    $francoBrandd_page_ID = 219;
    $contact_page_ID = 280;
    $services_Page_ID = 306; 
    $AboutUS_Page_ID = 332; 

    if(get_the_ID()== $home_page_ID){
      get_template_part( 'herader-template-parts/home_slider' );
    } 
    elseif (get_the_ID()== $business_page_ID){
      get_template_part( 'herader-template-parts/business_units_head' );
    }
    elseif ( get_the_ID()== $people_page_ID ) {
      get_template_part( 'herader-template-parts/people_head' );
    }
    elseif ( get_the_ID()== $sustainabillity_page_ID ) {
      get_template_part( 'herader-template-parts/sustainabillity_head' );
    }
    elseif ( get_the_ID()== $francoBrandd_page_ID ) {
      get_template_part( 'herader-template-parts/franco_brand_head' );
    }
    elseif ( get_the_ID()== $contact_page_ID ) {
      get_template_part( 'herader-template-parts/contact_head' );
    }
    elseif ( get_the_ID()== $AboutUS_Page_ID ) {
      get_template_part( 'herader-template-parts/about_head' );
    }
    ?>
  </section>
