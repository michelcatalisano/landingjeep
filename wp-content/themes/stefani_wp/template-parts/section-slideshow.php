<?php
  $title = get_field('section-slideshow-title');
  $slide1 = get_field('section-slideshow-image-1');
  $slide2 = get_field('section-slideshow-image-2');
  $slide3 = get_field('section-slideshow-image-3');
?>

<section id="section-slideshow" class="section">
  <h2 class="section__title"><?php echo $title; ?></h2>
  <ul class="section__slider">
    <li class="slide"><img src="<?php echo $slide1; ?>" alt=""></li>
    <li class="slide"><img src="<?php echo $slide2; ?>" alt=""></li>
    <li class="slide"><img src="<?php echo $slide3; ?>" alt=""></li>
  </ul>
</section>
