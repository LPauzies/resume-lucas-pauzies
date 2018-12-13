<?php

function buildSkillsCard($skills) {

?>

<div class="row">
  <div class="col s6">
    <?php
      for ($i=0; $i < 5 ; $i++) {
        $color = 'red';
        if (intval($skills['languages'][$i]['mark']) <= 100 && intval($skills['languages'][$i]['mark']) > 70) {
          $color = 'green';
        } else if (intval($skills['languages'][$i]['mark']) <= 70 && intval($skills['languages'][$i]['mark']) > 45) {
          $color = 'yellow';
        }
    ?>
      <div class="row">
        <div class="col s2">
          <?php echo $skills['languages'][$i]['language']; ?>
        </div>
        <div class="col s8">
          <div class="meter <?php echo $color;?>-progressbar">
            <span style="width: <?php echo $skills['languages'][$i]['mark']; ?>%"></span>
          </div>
        </div>
        <div class="col s2">
        </diV>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="col s6">
    <?php
      for ($i=5; $i < 10 ; $i++) {
        $color = 'red';
        if (intval($skills['languages'][$i]['mark']) <= 100 && intval($skills['languages'][$i]['mark']) > 70) {
          $color = 'green';
        } else if (intval($skills['languages'][$i]['mark']) <= 70 && intval($skills['languages'][$i]['mark']) > 45) {
          $color = 'yellow';
        }
    ?>
      <div class="row">
        <div class="col s2">
        </diV>
        <div class="col s2">
          <?php echo $skills['languages'][$i]['language']; ?>
        </div>
        <div class="col s8">
          <div class="meter <?php echo $color;?>-progressbar">
            <span style="width: <?php echo $skills['languages'][$i]['mark']; ?>%"></span>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</div>

<?php

}

function buildFrameworkCard($skills) {

?>

<div class="row">
  <div class="col s6">
    <?php
      for ($i=0; $i < 2 ; $i++) {
        $stack="<span class='b'>".$skills['frameworks'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['frameworks'][$i]['items']); $j++) {
          if ($j == count($skills['frameworks'][$i]['items'])-1) {
            $stack2 .= $skills['frameworks'][$i]['items'][$j][0];
          } else {
            $stack2 .= $skills['frameworks'][$i]['items'][$j][0].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
          <?php echo $stack2; ?>
        </div>
        <div class="col s2">
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="col s6">
    <?php
      for ($i=2; $i < 4 ; $i++) {
        $stack="<span class='b'>".$skills['frameworks'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['frameworks'][$i]['items']); $j++) {
          if ($j == count($skills['frameworks'][$i]['items'])-1) {
            $stack2 .= $skills['frameworks'][$i]['items'][$j][0];
          } else {
            $stack2 .= $skills['frameworks'][$i]['items'][$j][0].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
        </div>
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
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

function buildDataVizCard($skills) {

?>

<div class="row">
  <div class="col s6">
    <?php
      for ($i=0; $i < 1 ; $i++) {
        $stack="<span class='b'>".$skills['dataviz'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['dataviz'][$i]['items']); $j++) {
          if ($j == count($skills['dataviz'][$i]['items'])-1) {
            $stack2 .= $skills['dataviz'][$i]['items'][$j][0];
          } else {
            $stack2 .= $skills['dataviz'][$i]['items'][$j][0].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
          <?php echo $stack2; ?>
        </div>
        <div class="col s2">
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="col s6">
    <?php
      for ($i=1; $i < 2 ; $i++) {
        $stack="<span class='b'>".$skills['dataviz'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['dataviz'][$i]['items']); $j++) {
          if ($j == count($skills['dataviz'][$i]['items'])-1) {
            $stack2 .= $skills['dataviz'][$i]['items'][$j][0];
          } else {
            $stack2 .= $skills['dataviz'][$i]['items'][$j][0].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
        </div>
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
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

function buildSGBDCard($skills) {

?>

<div class="row">
  <div class="col s6">
    <?php
      for ($i=0; $i < 1 ; $i++) {
        $stack="<span class='b'>".$skills['sgbd'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['sgbd'][$i]['items']); $j++) {
          if ($j == count($skills['sgbd'][$i]['items'])-1) {
            $stack2 .= $skills['sgbd'][$i]['items'][$j];
          } else {
            $stack2 .= $skills['sgbd'][$i]['items'][$j].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
          <?php echo $stack2; ?>
        </div>
        <div class="col s2">
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="col s6">
    <?php
      for ($i=1; $i < 2 ; $i++) {
        $stack="<span class='b'>".$skills['sgbd'][$i]['title']."</span>";
        $stack2="<span class='it'>";
        for ($j=0; $j < count($skills['sgbd'][$i]['items']); $j++) {
          if ($j == count($skills['sgbd'][$i]['items'])-1) {
            $stack2 .= $skills['sgbd'][$i]['items'][$j];
          } else {
            $stack2 .= $skills['sgbd'][$i]['items'][$j].', ';
          }
        }
        $stack2 .= "</span>";
    ?>
      <div class="row">
        <div class="col s2">
        </div>
        <div class="col s2">
          <?php echo $stack; ?>
        </div>
        <div class="col s8">
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
