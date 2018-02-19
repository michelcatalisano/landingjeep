<?php
  $image = get_field('section-01-image');
  $title = get_field('section-01-title');
  $abstract1 = get_field('section-01-abstract-01');
  $abstract2 = get_field('section-01-abstract-02');
  $logo = get_field('section-01-logo');
  $link = get_field('section-01-link');
?>

<section id="section-01" class="section">
  <img src="<?php echo $image; ?>" alt="">
  <div class="section__header">
    <img src="<?php echo $logo; ?>" alt="">
    <h1 class="section__title"><?php echo $title; ?></h1>
    <p><?php echo $abstract1; ?></p>
    <p><?php echo $abstract1; ?></p>
    <a href="#<?php echo $link; ?>">Scoprila</a>
  </div>
</section>
