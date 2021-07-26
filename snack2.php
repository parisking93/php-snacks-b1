<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$eta = $_GET['eta'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>
    <?php if(!$nome && !$email && !$eta) {?>
    <h2>passa  il tuo nome, la tua eta e la tua email sul URL per entrare</h2>
    <?php } else { ?>
        <?php if(strlen($nome) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($eta)) {?>
            <span>Accesso riuscito</span>
        <?php } else {?>
            <h2>Accesso Negato</h2>
            <span>controlla i dati inseriti</span>
        <?php }?>
    <?php }?>
    
</body>
</html>