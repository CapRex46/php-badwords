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
        $txt = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam iure possimus quod ut perspiciatis. At eligendi repellendus eveniet, aperiam alias, doloribus corporis, nihil sunt similique quidem magnam doloremque ipsa voluptatibus!";
        $censura = $_GET["censura"];
        $censuratxt = str_replace($censura, '***', $txt);
    ?> 
    <h1><?php echo $txt ?></h1>
    <div>
        Lunghezza testo: <?php echo strlen($txt) ?> 
    </div>
    <h3>Testo con censura:</h3>
    <p>
        <?php echo $censuratxt ?>
        Lunghezza testo: <?php echo strlen($censuratxt) ?> 
    </p>
</body>
</html>