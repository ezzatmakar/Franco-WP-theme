<?php 
$social_links = get_field('social_links', 'option'); 
$facebook_url = $social_links['facebook_url'];
if($facebook_url){
  $face_url = $facebook_url;
} else {
  $face_url = "#7";
}
$instagram_url = $social_links['instagram_url'];
if($instagram_url){
  $insta_url = $instagram_url;
} else {
  $insta_url = "#7";
}
$twitter_url = $social_links['twitter_url'];
if($twitter_url){
  $twitt_url = $twitter_url;
} else {
  $twitt_url = "#7";
}
?>

<div class="socialIcons">
  <a href="<?php echo $face_url; ?>" target="_blank">
    <span class="icon-fb"></span>
  </a><br>
  <a href="<?php echo $insta_url; ?>" target="_blank">
    <span class="icon-insta"></span>
  </a><br>
  <a href="<?php echo $twitt_url; ?>" target="_blank">
    <span class="icon-twitter1"></span>
  </a>
</div>