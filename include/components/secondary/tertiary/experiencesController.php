<?php

function buildExperienceCard($date,$name,$company,$city,$country,$description,$technologies) {

?>
  <div class="row">
    <div class="col s3">
      <span class="it"><?php echo $date; ?></span>
    </div>
    <div class="col s7 center-align">
      <span class="b"><?php echo $company; ?> - <?php echo $name; ?></span>
    </div>
    <div class="col s2" style="text-align:right">
      <span class="it"><?php echo $city.", ".$country ?></span>
    </div>
  </div>
  <div class="exp-container">
    <div class="row">
      <div class="col s8">
        <?php for ($i=0; $i < count($description) ; $i++) {

          echo $description[$i];
          echo "<br>";

        }
        ?>
      </div>
      <div class="col s4">
        <?php for ($i=0; $i < count($technologies) ; $i++) {

          echo $technologies[$i];
          echo "<br>";

        }
        ?>
      </div>
    </div>
  </div>

<?php

}

?>
