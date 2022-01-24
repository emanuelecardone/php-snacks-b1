<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $numbers_amount = 15;
    $numbers_array = [];

    while(count($numbers_array) < $numbers_amount){

        // Non uso parametri in quanto non è richiesto un numero max o min
        $this_number = rand();

        if(!in_array($this_number, $numbers_array)){
            $numbers_array[] = $this_number;
        }
    }

    // Non è richiesto di stampare con html quindi faccio con var_dump
    var_dump($numbers_array);
?>