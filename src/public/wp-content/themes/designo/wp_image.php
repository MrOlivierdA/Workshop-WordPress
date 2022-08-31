<?php

	// disable image scaling (since v5.3)
	add_filter( 'big_image_size_threshold', '__return_false' );

	// Update thumbnail default size
	update_option( 'thumbnail_size_w', 150 ); // default: 300
	update_option( 'thumbnail_size_h', 150 ); // default: 300
	update_option( 'thumbnail_crop', 1 ); // default: 1






	$taille = 'single_top';
	$w = 1658; $h = 668;   
	$crop = false; $preview = false; $fraction = 4;
	buildSize($taille, $w, $h, $crop, $preview, $fraction);

/*
Type: <b>JPG</b><br>
Taille minimum : <b>2600x1300</b><br><br>
Si la taille exacte est fournie, compression JPG à 60%, et 
annuler quand le crop est proposé.
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60% & No Crop&thinsp;!<br>
Otherwise, no JPG compression & Crop&thinsp;!<br><br>
Crop is triggered automatically, just cancel it if you provide the exact size.
If you provide the exact sizes, <br>
JPG compression is recommended at 60%, and cancel the triggered crop box.
*/	






	$taille = 'page-CTA';
	$w = 1920; $h = 144;
	$crop = false; $preview = true; $fraction = 4;
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







	$taille = 'portrait';
	$w = 567; $h = 944;
	$crop = false; $preview = true; $fraction = 4;
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






	$taille = 'full-hd';
	$w = 1920; $h = 1080;
	$crop = false; $preview = true; $fraction = 3;
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





	$taille = 'page-production';
	$w = 1396; $h = 786;
	$crop = false; $preview = true; $fraction = 3;
	buildSize($taille, $w, $h, $crop, $preview, $fraction);
/*
Type: <b>JPG</b><br>
Taille minimum : <b>900x600</b>
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60%
*/	




	$taille = 'profil';
	$w = 452; $h = 544;
	$crop = false; $preview = false; $fraction = 3;
	buildSize($taille, $w, $h, $crop, $preview, $fraction);
/*
Type: <b>JPG</b><br>
Taille minimum : <b>1200x500</b>
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60%
*/	




	$taille = 'page_calltoaction';
	$w = 2600; $h = 700;
	$crop = false; $preview = true; $fraction = 3;
	// buildSize($taille, $w, $h, $crop, $preview, $fraction);
/* 
Type: <b>JPG</b><br>
Taille minimum : <b>2600x700</b>
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60%
*/	






	$taille = 'book_thumb';
	$w = 300; $h = 700;
	$crop = false; $preview = false; $fraction = 3;
	//buildSize($taille, $w, $h, $crop, $preview, $fraction);
/* 
Type: <b>JPG</b><br>
Taille minimum : <b>2600x700</b>
Type: <b>JPG</b><br>
Minimum size :  <b>2200x1400</b><br>
If exactly of this size, JPG compression at 60%
*/	
























// MAX SIZE ---------------------------------------------

$taille = 'max';
$w = 2620; $h = 1326;
$crop = false; $preview = false; $fraction = 1;
// buildSize($taille, $w, $h, $crop, $preview, $fraction);





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

	// ACF CROP
	add_filter( 'acf-image-crop/image-quality', function( $level ) { return 90; });



