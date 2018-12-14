<?php

include('tertiary/skillsController.php');

?>

<div id="skills">
  <div id="skills_screen">

    <div class="container">
      <div class="row">
        <h2><?php echo $skills['title']; ?></h2>
      </div>
      <div class="row">
        <h5><?php echo $skills['title1']; ?></h5>
      </div>
      <?php buildSkillsCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h5><?php echo $skills['title2']; ?></h5>
      </div>
      <?php buildFrameworkCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h5><?php echo $skills['title3']; ?></h5>
      </div>
      <?php buildDataVizCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h5><?php echo $skills['title4']; ?></h5>
      </div>
      <?php buildSGBDCard($skills); ?>
    </div>

  </div>

  <div id="skills_device" hidden="hidden">

    <div class="container">
      <div class="row">
        <h5><?php echo $skills['title']; ?></h5>
      </div>
      <div class="row">
        <h6><?php echo $skills['title1']; ?></h6>
      </div>
      <?php buildSkillsCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h6><?php echo $skills['title2']; ?></h6>
      </div>
      <?php buildFrameworkCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h6><?php echo $skills['title3']; ?></h6>
      </div>
      <?php buildDataVizCard($skills); ?>
    </div>
    <div class="container">
      <div class="row">
        <h6><?php echo $skills['title4']; ?></h6>
      </div>
      <?php buildSGBDCard($skills); ?>
    </div>

  </div>
</div>
