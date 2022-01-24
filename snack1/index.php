<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
            'home' => 'LA Lakers',
            'guest' => 'Golden State Warriors',
            'home_pts' => 30,
            'guest_pts' => 40
        ],
        [
            'home' => 'Chicago Bulls',
            'guest' => 'Brooklyn Nets',
            'home_pts' => 66,
            'guest_pts' => 22
        ],
        [
            'home' => 'Phoenix Suns',
            'guest' => 'NY Knicks',
            'home_pts' => 10,
            'guest_pts' => 60
        ],
        [
            'home' => 'Toronto Raptors',
            'guest' => 'Boston Celtics',
            'home_pts' => 55,
            'guest_pts' => 59
        ],
        [
            'home' => 'Miami Heat',
            'guest' => 'Dallas Mavericks',
            'home_pts' => 20,
            'guest_pts' => 80
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
            <div class="match">
                <?php echo $matches[$i]['home'] ?> - <?php echo $matches[$i]['guest'] ?> | <?php echo $matches[$i]['home_pts'] ?>-<?php echo $matches[$i]['guest_pts'] ?>
            </div>
        <?php } ?>
</body>
</html>