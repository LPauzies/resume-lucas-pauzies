<?php

function buildExperienceCard($date,$name,$company,$city,$country,$description,$technologies) {

?>
  <div class="row">
    <div class="col xl3 l3 m3 s12">
      <span class="it"><?php echo $date; ?></span>
    </div>
    <div class="col xl7 l7 m7 s12 center-align">
      <span class="b"><?php echo $company; ?> - <?php echo $name; ?></span>
    </div>
    <div class="col xl2 l2 m2 s12" style="text-align:right">
      <span class="it"><?php echo $city.", ".$country ?></span>
    </div>
  </div>
  <div class="exp-container">
    <div class="row">
      <div class="col xl8 l8 m8 s12" style="text-align: justify;text-justify: inter-word;">
        <?php for ($i=0; $i < count($description) ; $i++) {

          echo $description[$i];
          echo "<br>";

        }
        ?>
        <br>
      </div>
      <div class="col xl4 l4 m4 s12">
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
