<?php

function buildEducationCard($name,$items,$pic) {

?>
  <div class="row">
    <div class="col xl2 l2">
    </div>
    <div class="col xl7 l7">
      <span class="b title-card"><?php echo $name; ?></span>
      <br><br>
      <?php
        for ($i=0; $i < count($items); $i++) {
      ?>
        <span class="it"><?php echo $items[$i]['date']; ?></span> - <span class="b"><?php echo $items[$i]['title']; ?></span><br>
      <?php
        }
      ?>
    </div>
    <div class="col xl1 l1 m12 s12 center-align">
      <a href="https://eisti.fr/"><img class="img-responsive logo" src="<?php echo $pic; ?>" alt=""></a>
    </div>
    <div class="col xl2 l2">
    </div>
  </div>

<?php

}

?>
