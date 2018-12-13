<?php

function buildEducationCard($name,$items,$pic) {

?>
  <div class="row">
    <div class="col s2">
    </div>
    <div class="col s7">
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
    <div class="col s1">
      <img class="img-responsive logo" src="<?php echo $pic; ?>" alt="">
    </div>
    <div class="col s2">
    </div>
  </div>

<?php

}

?>
