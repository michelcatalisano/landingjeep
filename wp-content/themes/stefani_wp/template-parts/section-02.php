<?php
  $image = get_field('section-02-image');
  $title = get_field('section-02-title');
  $abstract = get_field('section-02-abstract');
?>

<section id="section-02" class="section" style="background: url('<?php echo $image; ?>') no-repeat center left; background-size: 80%;">
  <!-- <img src="<?php echo $image; ?>" alt=""> -->
  <h2 class="section__title"><?php echo $title; ?></h2>
  <div class="section__abstract">
    <?php echo $abstract; ?>
  </div>
</section>
