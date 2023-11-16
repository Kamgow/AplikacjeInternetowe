<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>aha</p>
    <h1>
        <?= $title?>
    </h1>
    
    <?php foreach($movies as $movie): ?>
        
        <p>
            <?= $movie->getMovieInfo();?>
        </p>
    <?php endforeach; ?>


</body>
</html>