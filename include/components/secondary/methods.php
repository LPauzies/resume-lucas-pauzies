<?php

include('tertiary/methodsController.php');

?>

<div id="methods">
  <div id="methods_screen">

    <div class="container">
      <div class="row">
        <h2><?php echo $methods['title']; ?></h2>
      </div>
      <div class="row">
        <h5><?php echo $methods['title1']; ?></h5>
      </div>
      <?php buildCard($methods,'methods'); ?>
    </div>
    <div class="container">
      <div class="row">
        <h5><?php echo $methods['title2']; ?></h5>
      </div>
      <?php buildCard($methods,'maths'); ?>
    </div>
    <div class="container">
      <div class="row">
        <h5><?php echo $methods['title3']; ?></h5>
      </div>
      <?php buildCard($methods,'others'); ?>
    </div>
  </div>
  <div id="methods_device" hidden="hidden">

    <div class="container">
      <div class="row">
        <h5><?php echo $methods['title']; ?></h5>
      </div>
      <div class="row">
        <h6><?php echo $methods['title1']; ?></h6>
      </div>
      <?php buildCard($methods,'methods'); ?>
    </div>
    <div class="container">
      <div class="row">
        <h6><?php echo $methods['title2']; ?></h6>
      </div>
      <?php buildCard($methods,'maths'); ?>
    </div>
    <div class="container">
      <div class="row">
        <h6><?php echo $methods['title3']; ?></h6>
      </div>
      <?php buildCard($methods,'others'); ?>
    </div>

  </div>
</div>
