<?php

$items_exp = $experiences['experiences'];
include('tertiary/experiencesController.php');

?>

<div id="experiences">

  <div class="container">
    <div class="row">
      <h2><?php echo $experiences['title']; ?></h2>
    </div>
    <div class="exp-container">
      <?php
        for ($i=0; $i < count($items_exp); $i++) {
          $s = ($i != count($items_exp)-1 ? "class='row pt3 exp-border'" : "class='row pt3'");
          echo '<div '.$s.'>';
          buildExperienceCard($items_exp[$i]['date'],$items_exp[$i]['name'],
                              $items_exp[$i]['company'],$items_exp[$i]['city'],
                              $items_exp[$i]['country'],$items_exp[$i]['description'],$items_exp[$i]['technologies']);
          echo '</div>';
        }
      ?>
    </div>
  </div>


</div>
