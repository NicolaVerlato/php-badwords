<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myString = 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet';
        $badWord = $_GET["badword"];
        $myStringReplaced = str_replace($_GET['badword'], '***', $myString);
    ?>

    <div>Paragrafo: <?php echo $myString; ?></div>
    <div>Lunghezza paragrafo: <?php echo strlen($myString); ?> caratteri</div>
    <div>Paragrafo modificato: <?php echo $myStringReplaced; ?></div>
    <div>Lunghezza paragrafo modificato: <?php echo strlen($myStringReplaced); ?> caratteri</div>
</body>
</html>