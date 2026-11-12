<?php

$nombre = 7;

if ($nombre % 2 == 0) {
    echo "Le nombre est pair";
} else {
    echo "Le nombre est impair";

}

?>



<?php

$montant = 1500;

if ($montant < 500) {
    $remise = 0;
}
elseif ($montant < 1000) {
    $remise = 5;
}
elseif ($montant < 2000) {
    $remise = 10;
}
else {
    $remise = 15;
}



$montantRemise = $montant * $remise / 100;


$montantFinal = $montant - $montantRemise;

echo "Montant des achats : $montant DH <br>";
echo "Taux de remise : $remise % <br>";
echo "Montant de la remise : $montantRemise DH <br>";
echo "Montant final à payer : $montantFinal DH";

?>






