<?php

function buildCard($skills,$item) {

?>

<div class="row">
  <div class="col xl6 l6 m6 s12 border-right">
    <?php
      for ($i=0; $i < 1 ; $i++) {
        $stack="<span class='b'>".$skills[$item][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills[$item][$i]['items']); $j++) {
          if ($j == count($skills[$item][$i]['items'])-1) {
            $stack2 .= $skills[$item][$i]['items'][$j];
          } else {
            $stack2 .= $skills[$item][$i]['items'][$j].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col xl4 l4 m4 s12">
          <?php echo $stack; ?>
        </div>
        <div class="col xl8 l8 m8 s12">
          <?php echo $stack2; ?>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="col xl6 l6 m6 s12">
    <?php
      for ($i=1; $i < 2 ; $i++) {
        $stack="<span class='b'>".$skills[$item][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills[$item][$i]['items']); $j++) {
          if ($j == count($skills[$item][$i]['items'])-1) {
            $stack2 .= $skills[$item][$i]['items'][$j];
          } else {
            $stack2 .= $skills[$item][$i]['items'][$j].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col xl4 l4 m4 s12">
          <?php echo $stack; ?>
        </div>
        <div class="col xl8 l8 m8 s12">
          <?php echo $stack2; ?>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</div>

<?php

}

?>
