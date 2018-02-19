<?php
  $image = get_field('section-03-image');
  $title = get_field('section-03-title');
  $abstract = get_field('section-03-abstract');
?>

<section id="section-03" class="section" style="background: url('<?php echo $image; ?>') no-repeat center right; background-size: 80%;">
  <!-- <img src="<?php echo $image; ?>" alt=""> -->
  <h2 class="section__title"><?php echo $title; ?></h2>
  <div class="section__abstract">
    <?php echo $abstract; ?>
  </div>
</section>
