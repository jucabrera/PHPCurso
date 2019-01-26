<?php
echo "<h1>Continue</h1>";
for($numero=1; $numero <=10 ; $numero++){
    if($numero % 2 != 0){
        continue;
    }
    echo $numero;
}

echo "<h1>Break</h1>";
for($numero=1; $numero <=10 ; $numero++){
    if($numero ==5 ){
        break;
    }
    echo $numero;
}