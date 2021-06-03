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
        $text = "Sono Alessandro e frequento la classe 32 del corso boolean";
        $remove = $_GET["word"];
        $substitute = "***";
        $newText = str_replace($remove, $substitute, $text);
    ?>
    
    <h1><?php echo "Testo originale: " . $text?></h1>
    <p> <?php echo "E' lungo: " . strlen($text)?> </p>

    <h1><?php echo "Testo modificato: " . $newText?></h1>
    <p><?php echo "E' lungo: " . strlen($newText)?></p>
</body>
</html>