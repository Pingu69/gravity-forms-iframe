<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo esc_html( $form['title'] ); ?></title>
<style type="text/css">
body {
	padding: 0;
	font-family: sans-serif;
	font-size: 13px;
}
</style>
<?php do_action( 'gfiframe_head', $form_id, $form ); ?>
</head>
<body>
<?php GFFormDisplay::print_form_scripts( $form, false ); // ajax = false ?>
<?php
  //Detect special conditions devices
  $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
  $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad"); 
  $android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
  $class = "xamoom-forms-web";
  if($iPhone || $iPad || $iPod){
    $class = "xamoom-forms-ios";
  } else if($android){
    $class = "xamoom-forms-android";
  }
echo '<div class="xamoom-forms ' . $class . '">';
?> 
  <?php gravity_form( $form_id, $display_title, $display_description ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
