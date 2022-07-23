<?php 

function  ucgen0($ucgen) {
  for ($i = 0; $i<$ucgen; $i++) {
    $ucgensayac = 0;
    while($ucgensayac < $i) {
      echo "0";
      $ucgensayac++;
    }
    echo '<br>';
  }
}
ucgen0(17);


?>