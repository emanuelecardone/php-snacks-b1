<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name_to_check = $_GET['name'];
    $mail_to_check = $_GET['mail'];
    $age_to_check = $_GET['age'];

    $name_result = strlen($name_to_check) > 3 ? true : false;
    $mail_result = (strpos($mail_to_check, '@') !== false && strpos($mail_to_check, '.') !== false) ? true : false;
    $age_result = is_numeric($age_to_check) ? true : false;

    $result = ($name_result && $mail_result && $age_result) ? 'Accesso riuscito' : 'Accesso negato';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <div class="result">
        <?php echo $result ?>
        
    </div>
</body>
</html>