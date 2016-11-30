<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?=$head?>

<body>
  <div style="width:100%;"> <!-- Main Div -->
    <?=$header?>
    <?=$left_menu?>
    <div style="float:right; width:80%; margin-left:10px;">
      <!-- Set Div As your requirement -->
      <div class="container main-container">
        <?=$contenido?>
      </div>
    </div>
    <div>
      <?=$footer?>
    </div>
  </div>

</body>
</html>
