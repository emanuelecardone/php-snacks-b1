<!-- Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $students = [
        [
            'name' => 'Emanuele',
            'lastname' => 'Pinzi',
            'marks' => [5,7,4,8,10]
        ],
        [
            'name' => 'Maria',
            'lastname' => 'Maiora',
            'marks' => [2,2,9,6,5]
        ],
        [
            'name' => 'Mirko',
            'lastname' => 'Fante',
            'marks' => [5,2,7,3,3]
        ]
        ];

    // Stampo con var_dump in quanto non richiesto di stampare in html
    for($i = 0; $i < count($students); $i++){

        $this_student = $students[$i];

        $this_sum = 0;
        for($j = 0; $j < count($this_student['marks']); $j++){
            $this_mark = $this_student['marks'][$j];
            $this_sum += $this_mark;
        }
        $this_average = $this_sum / count($this_student['marks']);

        var_dump($this_student['name'] . ' ' . $this_student['lastname'] . ' // Average:' . $this_average);
    }

?>
