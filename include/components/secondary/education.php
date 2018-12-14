<?php

include('tertiary/educationController.php');

?>

<div id="education">
  <div id="education_screen">

    <div class="container">
      <div class="row">
        <h2><?php echo $education['title']; ?></h2>
      </div>
      <div class="exp-container">
        <?php
          buildEducationCard($education['eisti'],$education['education'],$education['pic']);
        ?>
      </div>
    </div>

  </div>

  <div id="education_device" hidden="hidden">

    <div class="container">
      <div class="row">
        <h5><?php echo $education['title']; ?></h5>
      </div>
      <div class="exp-container">
        <?php
          buildEducationCard($education['eisti'],$education['education'],$education['pic']);
        ?>
      </div>
    </div>

  </div>
</div>
