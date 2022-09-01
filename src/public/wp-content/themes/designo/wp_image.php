<?php

	// // disable image scaling (since v5.3)
	// add_filter( 'big_image_size_threshold', '__return_false' );

	// // Update thumbnail default size
	// update_option( 'thumbnail_size_w', 150 ); // default: 300
	// update_option( 'thumbnail_size_h', 150 ); // default: 300
	// update_option( 'thumbnail_crop', 1 ); // default: 1


	add_theme_support( 'post-thumbnails' );



	$taille = 'single-post';
	$w = 500; $h = 450;
	$crop = true; $preview = true; $fraction = 2;
	buildSize($taille, $w, $h, $crop, $preview, $fraction);
/* 
Type: <b>JPG</b><br>
Taille minimum : <b>2600x1300</b><br>
Si exactement de cette taille (pas de crop), compression JPG à 60%,<br>
sinon pas de compression JPG et Crop.
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60%
*/	









// THUMBS NO CROP ---------------------------------------

$taille = 'thumbnail_6_nocrop';
$w = 600; $h = 600;
$crop = false; $preview = false; $fraction = 3;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);

/* 
Type: <b>JPG</b><br>
Taille minimum : <b>600x600</b>
Type: <b>JPG</b><br>
Minimum size :  <b>600x600</b>
*/	


$taille = 'thumbnail_3_nocrop';
$w = 300; $h = 300;
$crop = false; $preview = false; $fraction = 3;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);





// THUMBS CROP ---------------------------------------

$taille = 'thumbnail_6';
$w = 600; $h = 600;
$crop = true; $preview = false; $fraction = 3;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);

$taille = 'thumbnail_5';
$w = 500; $h = 500;
$crop = true; $preview = false; $fraction = 3;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);

$taille = 'thumbnail_2';
$w = 200; $h = 200;
$crop = true; $preview = false; $fraction = 2;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);

$taille = 'mini';
$w = 150; $h = 150;
$crop = true; $preview = false; $fraction = 2;
//buildSize($taille, $w, $h, $crop, $preview, $fraction);

$taille = 'icone';
$w = 50; $h = 50;
$crop = false; $preview = false; $fraction = 2;
buildSize($taille, $w, $h, $crop, $preview, $fraction);







function buildSize($taille, $w, $h, $crop, $preview, $fraction) {
	add_image_size( $taille, $w, $h, $crop);
	if ($preview) { add_image_size( ($taille . '_preview') , ($w/$fraction), ($h/$fraction), $crop); }
}







// COMPRESSION ------------------------------------

	// DEFAULT
	function my_image_quality() { return 80; }
	add_filter( 'jpeg_quality', 'my_image_quality' );



	// // ACF CROP


