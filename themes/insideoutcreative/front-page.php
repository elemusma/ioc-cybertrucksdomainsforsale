<?php get_header();

// start of intro
echo '<section class="position-relative" style="min-height:100vh;padding:25px 0px;color:white;text-shadow:1px 1px black;">';

echo wp_get_attachment_image(15, 'full', '', [
    'class'=>'w-100 h-100 position-absolute',
    'style'=>'object-fit:cover;top:0;left:0;'
]);

echo '<p style="position:absolute;bottom:50px;left:50%;transform:translate(-50%,0);text-align:center;">Interested in a new website? Please visit <a href="https://insideoutcreative.io" style="color:#f8a745;">https://InsideOutCreative.io</a></p>';

echo '<div class="position-absolute w-100" style="background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%);top:0;left:0;height:100px;"></div>';

echo '<div class="container">';
echo '<div class="row" style="">';
echo '<div class="col-12 text-center">';

echo wp_get_attachment_image(6, 'full', '', [
    'class'=>'h-auto m-auto',
    'style'=>'width:75px;object-fit:cover;top:25px;left:50%;transform:translate(-50%, 0);z-index:1;'
]);

echo '<h1 style="">Interested in any of the following Cyber Truck related domains?</h1>';

echo '<p style="font-size:1.25rem;">Please call Adam Zwingler for purchasing details <a href="tel:+13035238619" style="color:#f8a745;"><strong>303.523.8619</strong></a></p>';



echo '</div>';

echo '<div class="col-lg-4 col-md-6 col-12 text-center">';
echo '<h2>CyberTruckWraps.biz</h2>';
echo '</div>';
echo '<div class="col-lg-4 col-md-6 col-12 text-center">';
echo '<h2>CyberTruckWraps.co</h2>';
echo '</div>';
echo '<div class="col-lg-4 col-12 text-center">';
echo '<h2>ModifiedCyberTrucks.com</h2>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of intro


// // how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// // popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// // popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>