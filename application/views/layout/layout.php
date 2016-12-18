<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?=$head?>



<body>
  <?=$header?>
  <div>
    <div class="container">
        <div class="row">
      <div class="col-md-3" id="leftCol">
        <?=$left_menu?>
      </div>
      <div class="col-md-9" id="mainCol">
        <!-- Set Div As your requirement -->
          <?=$contenido?>
      </div>
    </div>
    <div>
      <?=$footer?>
    </div>
  </div>

</body>
</html>
