<?php

include('tertiary/skillsController.php');

?>

<div id="skills" onscroll="addAnimation('skills','fadeIn','2')">

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
